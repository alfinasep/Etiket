<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\film;


class filmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('film');
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
        $film = new film;
        $film->judul_film = $request->judul_film;
        $film->deskripsi_film = $request->deskripsi_film;
        $film->rating_film = $request->rating_film;
        $film->produsen_film = $request->produsen_film;
        $film->durasi_film = $request->durasi_film;
        $film->save();
        return redirect('/film');
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
        $film = film::findOrFail($id);
        return $film;
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
        $film = film::findOrFail($id);
        $film->update($input);

        return response()->json([
            'success' => true,
            'message' => 'film Created'
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
         $film = film::findOrFail($id);
        $film::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'film Deleted'
        ]);
    }


    public function apifilm(){

        $film = film::all();

        return Datatables::of($film)
            ->addColumn('action', function($film){
                return
                    '<a onclick="editForm('. $film->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> '  .   
                    '<a onclick="deleteData('. $film->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn(['action'])->make(true);
    }
}
