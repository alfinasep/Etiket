<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\transaksi;
use App\seat;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jad=\App\film::all();
        // $kur=\App\seat::all();
        $kur = seat::select('seat.id','seat.nama_seat')->leftjoin('transaksi','transaksi.kursi_id','=','seat.id')->whereNull('transaksi.kursi_id')->get();
        return view ('transaksi',compact('kur','jad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new transaksi;
        $transaksi->jadwal_id = $request->jadwal_id;
        $transaksi->kursi_id = $request->kursi_id;
        $transaksi->jumlah_tiket = $request->jumlah_tiket;
        $transaksi->jumlah_harga = $request->jumlah_harga;
        $transaksi->ticket_auth = $request->ticket_auth;
        $transaksi->ticket_pass = $request->ticket_pass;
        $transaksi->save();
        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $transaksi = transaksi::findOrFail($id);
        // return $transaksi;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $input = $request->all();
        // $transaksi = transaksi::findOrFail($id);
        // $transaksi->update($input);

        // return response()->json([
        //     'success' => true,
        //     'message' => 'transaksi Created'
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'transaksi Deleted'
        ]);
    }

    public function apitransaksi(){

        // $transaksi = \DB::select("select * from seat LEFT JOIN transaksi on seat.id = transaksi.kursi_id where transaksi.kursi_id IS NULL");

        // $transaksi = seat::leftjoin('transaksi','transaksi.kursi_id','=','seat.id')
        // ->leftjoin('jadwal','transaksi.jadwal_id','=','jadwal.id')
        // ->leftjoin('film','jadwal.film_id','=','film.judul_film')
        // ->whereNull('transaksi.kursi_id')->get();
        $transaksi = transaksi::all();

        return Datatables::of($transaksi)
            ->addColumn('trans',function($transaksi){
                // return $transaksi->nama_seat;
                return $transaksi->seat()->first()->nama_seat;
            })

            ->addColumn('tra',function($transaksi){

                return $transaksi->film()->first()->hari;
            })
            
            ->addColumn('action', function($transaksi){
                return
                    // '<a onclick="editForm('. $transaksi->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> '  .   
                    '<a onclick="deleteData('. $transaksi->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn(['action'])->make(true);
    }
}
