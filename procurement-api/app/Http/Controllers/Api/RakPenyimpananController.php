<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RakPenyimpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RakPenyimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rakPenyimpanan = RakPenyimpanan::with('warehouse','barang')->get();
        return response()->json([
            'message' => 'Fetching all racks.',
            'data' => $rakPenyimpanan
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'id_warehouse' => 'required',
            'tipe_rak' => 'required',
            'jumlah_barang' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $rakPenyimpanan = RakPenyimpanan::create($validator->validated());

        return response()->json([
            'message' => 'Successfully Created New Rack',
            'data' => $rakPenyimpanan
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RakPenyimpanan  $rakPenyimpanan
     * @return \Illuminate\Http\Response
     */
    public function show(RakPenyimpanan $rakPenyimpanan)
    {
        //
        return response()->json([
            'message' => 'Here is your rack.',
            'data' => $rakPenyimpanan->load('warehouse','barang')
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RakPenyimpanan  $rakPenyimpanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RakPenyimpanan $rakPenyimpanan)
    {
        //
        $validator = Validator::make($request->all(), [
            'id_warehouse' => 'required',
            'tipe_rak' => 'required',
            'jumlah_barang' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $rakPenyimpanan->update($validator->validated());

        return response()->json([
            'message' => 'Successfully Updated Rack',
            'data' => $rakPenyimpanan
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RakPenyimpanan  $rakPenyimpanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RakPenyimpanan $rakPenyimpanan)
    {
        //
    }
}
