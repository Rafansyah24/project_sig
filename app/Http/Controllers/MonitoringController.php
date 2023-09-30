<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\monitoring;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function table(Request $request)
    {
        
        if($request->has('search')){
            $index = monitoring::where('id','LIKE','%' .$request->search. '%')->get(); // Menambahkan metode get() untuk mengeksekusi query
        }else{
            $index = monitoring::all(); // Mengambil semua data table event_log
        }

        return view('admin.table', ['index' => $index,  'request' => $request]);
    }

    public function tableuser(Request $request)
    {
        
        if($request->has('search')){
            $index = monitoring::where('id','LIKE','%' .$request->search. '%')->get(); // Menambahkan metode get() untuk mengeksekusi query
        }else{
            $index = monitoring::all(); // Mengambil semua data table event_log
        }

        return view('user.tableuser', ['index' => $index,  'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function search(Request $request)
    // {
    //     if ($request->has('search')) {
    //         $index = monitoring::where('id','LIKE','%'.$request->search.'%')->get();
    //     }else{
    //         $index = monitoring::all();
    //     }

    //     return view('table',['index' => $index]);
    // }
}
