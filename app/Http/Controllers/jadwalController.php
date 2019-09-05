<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\jadwal;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jns=\App\film::all();
        $tea=\App\teater::all();
        return view('/jadwal',compact('jns','tea'));
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
        $jadwal = new jadwal;
        $jadwal->film_id = $request->film_id;
        $jadwal->hari = $request->hari;
        $jadwal->jam = $request->jam;
        $jadwal->harga = $request->harga;
        $jadwal->teater_id = $request->teater_id;
        $jadwal->save();
        return redirect('/jadwal');
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
        $jadwal = jadwal::findOrFail($id);
        return $jadwal;
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
        $input = $request->all();
        $jadwal = jadwal::findOrFail($request->id_jadwal);
        $jadwal->update($input);

        return response()->json([
            'success' => true,
            'message' => 'jadwal Created'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = jadwal::findOrFail($id);
        $jadwal::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'jadwal Deleted'
        ]);
    }



    public function apijadwal(){

        $jadwal = jadwal::all();

        return Datatables::of($jadwal)
            ->addColumn('jdl_film',function($jadwal){

                return $jadwal->film()->first()->judul_film;
            })
            ->addColumn('nm_teater',function($jadwal){

                return $jadwal->teater()->first()->nama_teater;
            })
            ->addColumn('action', function($jadwal){
                return
                    '<a onclick="editForm('. $jadwal->id_jadwal .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> '  .   
                    '<a onclick="deleteData('. $jadwal->id_jadwal.')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn(['action'])->make(true);    }
}
