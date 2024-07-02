<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            
        $d1 = ["id"=>1, 'latitude' => -22.474001986316246, 'longitude'=> -45.61185994348595 ];
        $d2 = ["id"=>2, 'latitude' => -22.475826152845368, 'longitude'=> -45.610347177676594 ];
        $d3 = ["id"=>3, 'latitude' => -22.471078865478, 'longitude'=> -45.61905979145229 ];
        $d4 = ["id"=>4, 'latitude' => -22.47330954770081, 'longitude'=> -45.62034725171557 ];
        $d5 = ["id"=>5, 'latitude' => -22.47409275653002, 'longitude'=> -45.60737608929579 ];

        $drivers = [];
        array_push($drivers,$d1,$d2,$d3,$d4,$d5);


        return response()->json($drivers[rand(0,4)],200); 
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
}
