<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\teater;

class teaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teater');
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
        $teater = new teater;
        $teater->nama_teater = $request->nama_teater;
        $teater->save();
        return redirect('/teater');
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
        $teater = teater::findOrFail($id);
        return $teater;
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
        $teater = teater::findOrFail($id);
        $teater->update($input);

        return response()->json([
            'success' => true,
            'message' => 'teater Created'
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
        $teater = teater::findOrFail($id);
        $teater::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'teater Deleted'
        ]);
    }

    public function apiteater(){

        $teater = teater::all();

        return Datatables::of($teater)
            ->addColumn('action', function($teater){
                return
                    '<a onclick="editForm('. $teater->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> '  .   
                    '<a onclick="deleteData('. $teater->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })->addIndexColumn(['action'])->make(true);
    }
}
