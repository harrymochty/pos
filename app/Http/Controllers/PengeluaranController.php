<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengeluaran::orderBy('created_at', 'desc')->paginate(10);
        return view('pengeluaran.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluaran.create');
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
            'deskripsi' => 'required',
            'nominal' => 'required',
        ], [
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'nominal.required' => 'Nominal Tidak Boleh Kosong',
        ]);

        $data = [
            'deskripsi' => $request->deskripsi,
            'nominal' => $request->nominal,
        ];
        Pengeluaran::create($data);
        return redirect()->to('pengeluaran')->with('success', 'Berhasil Menambahkan Data');

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
        $data = Pengeluaran::where('id', $id)->first();
        return view('pengeluaran.edit')->with('data', $data);

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
            'deskripsi' => 'required',
            'nominal' => 'required',
        ], [
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'nominal.required' => 'Nominal Tidak Boleh Kosong',
        ]);

        $data = [
            'deskripsi' => $request->deskripsi,
            'nominal' => $request->nominal,
        ];
        Pengeluaran::where('id', $id)->update($data);
        return redirect()->to('pengeluaran')->with('success', 'Berhasil Menambahkan Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();

        return redirect()->to('pengeluaran')->with('success', 'Berhasil Menghapus Data');

    }
}
