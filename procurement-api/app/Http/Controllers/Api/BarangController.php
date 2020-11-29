<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\RequestBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_vendor' => 'required',
            'id_rak' => 'required',
            'nama' => 'required',
            'tipe' => 'required',
            'kuantitas' => 'required',
            'harga' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $barang = Barang::create($validator->validated());

        return response()->json([
            'message' => 'Successfully Created New Barang',
            'data' => $barang
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validator = Validator::make($request->all(), [
            'id_vendor' => 'required',
            'id_rak' => 'required',
            'nama' => 'required',
            'tipe' => 'required',
            'kuantitas' => 'required',
            'harga' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $barang->update($validator->validated());

        return response()->json([
            'message' => 'Successfully Updated Barang',
            'data' => $barang
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Barang $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $id = $barang->id;
        $barang->delete();

        return response()->json([
            'message' => 'Successfully Deleted Barang',
            'data' => $id
        ], 200);
    }

    public function request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_vendor' => 'required|exists:vendor,id',
            'id_karyawan' => 'required',
            'id_barang' => 'required|exists:barang,id',
            'kuantitas' => 'required',
            'harga' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $req = RequestBarang::create($validator->validated());

        return response()->json([
            'message' => 'Successfully Request Product',
            'data' => $req
        ], 200);
    }

    public function approve(RequestBarang $requestBarang)
    {
        $requestBarang->update(
            ['disetujui' => true]
        );

        return response()->json([
            'message' => 'Successfully Approve Requested Product',
            'data' => $requestBarang
        ], 200);
    }

    public function updateQuantity(Request $request, Barang $barang)
    {
        $validator = Validator::make($request->all(), [
            'kuantitas' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Error',
                'error' => $validator->errors()
            ], 422);
        }

        $barang->update($validator->validated());

        return response()->json([
            'message' => 'Successfully Updated Product Quantity',
            'data' => $barang
        ], 200);
    }
}
