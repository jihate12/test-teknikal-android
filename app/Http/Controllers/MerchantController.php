<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMerchantRequest;
use App\Models\City;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('componens/data_merchant')->with([
            'cities' => City::all(),
            'merchant' => Merchant::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerchantRequest $request)
    {
        $validate = $request->validated();

        $merchant = new Merchant;

        $merchant->merchant_name = $request->merchant_name;
        $merchant->address = $request->address;
        $merchant->phone = $request->phone;
        $merchant->expire_date = $request->exdate;
        $merchant->city_id = $request->cityId;
        $merchant->save();

        return redirect('merchant')->with('msg', 'berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merchant $merchant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merchant $merchant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Merchant $merchant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merchant $merchant)
    {
        //
    }
}
