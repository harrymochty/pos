<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Suppliers::orderBy('name', 'desc')->paginate(10);
        return view('supplier.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ], [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'telepon.required' => 'Telepon Tidak Boleh Kosong',
        ]);

        $data = [
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ];
        Suppliers::create($data);
        return redirect()->to('supplier')->with('success', 'Berhasil Menambahkan Data');

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
        $data = Suppliers::where('id', $id)->first();
        return view('supplier.edit')->with('data', $data);

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
        $request->validate([
            'name' => 'required|unique:categories,name',
        ], [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'name.unique' => 'Category Sudah Tersedia',
        ]);

        $data = [
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ];
        Suppliers::where('id', $id)->update($data);
        return redirect()->to('supplier')->with('success', 'Berhasil Update Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Suppliers::find($id);
        $supplier->delete();

        return redirect()->to('supplier')->with('success', 'Berhasil Menghapus Data');

    }
}
