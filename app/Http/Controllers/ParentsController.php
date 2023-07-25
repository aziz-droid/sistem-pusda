<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('upt.pusda',[
            'title' => 'pusda',
            'header' =>'UPT PSDA WS BRANTAS KEDIRI',
            'parents' => Parents::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('upt.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //validate form
        $this->validate($request, [
            'nomor_sertifikat'     => 'required',
            'tanggal_sertifikat'   => 'required',
            'nama_aset'            => 'required',
            'nilai_aset'           => 'required',
            'alamat'               => 'required',
            'luas'                 => 'required',
        ]);

        Parents::create([
            'nomor_sertifikat'     => $request->nomor_sertifikat,
            'tanggal_sertifikat'   => $request->tanggal_sertifikat,
            'nama_aset'            => $request->nama_aset,
            'nilai_aset'           => $request->nilai_aset,
            'alamat'               => $request->alamat,
            'luas'                 => $request->luas,
            'upt'                  => $request->upt,
        ]);

        return redirect()->route('pusda.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         //get post by ID
         $parent = Parents::with('childrens')->findOrFail($id);
         //render view with post
         return view('upt.detail', compact('parent'), [
            'title'=>'pusda',
            'header' =>'UPT PSDA WS BRANTAS KEDIRI'
         ]);
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //get post by ID
        $parent = Parents::findOrFail($id);

        //render view with post
        return view('upt.edit', compact('parent'), [
            'title'=>'pusda',
            'header' =>'UPT PSDA WS BRANTAS KEDIRI'
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        //validate form
        $this->validate($request, [
            'nomor_sertifikat'     => 'required',
            'tanggal_sertifikat'   => 'required',
            'nama_aset'            => 'required',
            'nilai_aset'           => 'required',
            'alamat'               => 'required',
            'luas'                 => 'required',
        ]);

        //get post by ID
        $parent = Parents::findOrFail($id);

            //update post with new image
            $parent->update([
                'nomor_sertifikat'     => $request->nomor_sertifikat,
                'tanggal_sertifikat'   => $request->tanggal_sertifikat,
                'nama_aset'            => $request->nama_aset,
                'nilai_aset'           => $request->nilai_aset,
                'alamat'               => $request->alamat,
                'luas'                 => $request->luas,
                'upt'                  => $request->upt
            ]);

        //redirect to index
        return redirect()->route('pusda.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $parent = Parents::findOrFail($id);


        //delete post
        $parent->delete();

        //redirect to index
        return redirect()->route('pusda.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
