<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        return response()->json([
            'message' => 'Fetching all vendors.',
            'data' => $vendors
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'tipe_barang' => 'required',
            'alamat' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $vendor = Vendor::create($validator->validated());

        return response()->json([
            'message' => 'Successfully Created New Vendor',
            'data' => $vendor
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        return response()->json([
            'message' => 'Here is your vendor.',
            'data' => $vendor->load('barang')
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'tipe_barang' => 'required',
            'alamat' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $vendor->update($validator->validated());

        return response()->json([
            'message' => 'Successfully Updated Vendor',
            'data' => $vendor
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Vendor $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $id = $vendor->id;
        $vendor->delete();

        return response()->json([
            'message' => 'Successfully Deleted Vendor',
            'data' => $id
        ], 200);
    }
}
