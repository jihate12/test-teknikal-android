<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('componens/data_city')->with([
            'cities' => City::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request)
    {
        $validate = $request->validated();

        $users = new City;

        $users->name = $request->cityName;
        $users->longitude = $request->longitude;
        $users->latitude = $request->latitude;
        $users->save();

        return redirect('cities')->with('msg', 'berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
