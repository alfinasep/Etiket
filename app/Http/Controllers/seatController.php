<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\seat;

class seatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $te=\App\teater::all();
        return view('/seat',compact('te'));
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
        $seat = new seat;
        $seat->nama_seat = $request->nama_seat;
        $seat->teater_id = $request->teater_id;
        $seat->save();
        return redirect('/seat');
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
        $seat = seat::findOrFail($id);
        return $seat;
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
        $seat = seat::findOrFail($id);
        $seat->update($input);

        return response()->json([
            'success' => true,
            'message' => 'seat Created'
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
        $seat = seat::findOrFail($id);
        $seat::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'seat Deleted'
        ]);
    }

    public function apiseat(){

        $seat = seat::all();

        return Datatables::of($seat)
            ->addColumn('tea',function($seat){

                return $seat->teater()->first()->nama_teater;
            })
            
            ->addColumn('action', function($seat){
                return
                    '<a onclick="editForm('. $seat->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> '  .   
                    '<a onclick="deleteData('. $seat->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn(['action'])->make(true);
    }
}
