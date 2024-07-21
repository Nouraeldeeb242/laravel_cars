<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Calss;

class CalssController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_class');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $calss_name = 'arabic';
        $price = '100';
        $description = "this our language";
        $capacity = true;

        Calss::create([

            'calss_name' => $calss_name,
            'price' => $price,
            'description' => $description,
            'capacity' => $capacity,
        ]);

        return "inserted";

    }
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
}
