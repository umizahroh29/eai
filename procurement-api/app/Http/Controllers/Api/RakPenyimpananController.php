<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RakPenyimpanan;
use Illuminate\Http\Request;

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
        $id = $rakPenyimpanan->id;
        $rakPenyimpanan->delete();

        return response()->json([
            'message' => 'Successfully Deleted Rak Penyimpanan',
            'data' => $id
        ], 200);
    }
}
