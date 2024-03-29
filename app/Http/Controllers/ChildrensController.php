<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Childrens;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChildrensRequest;
use App\Http\Requests\UpdateChildrensRequest;

class ChildrensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $childer = Childrens::all();
    //     return view('upt.detail',[
    //         'title' => 'pusda',
    //         'header' =>'UPT PSDA WS BRANTAS KEDIRI',
    //         'childer' => $childer
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function createPinjam()
    {
        return view ('upt.bagian.tambah_pinjam');   
    }
    
    public function createSewa()
    {
        return view ('upt.bagian.tambah_sewa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildrensRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Childrens $childrens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Childrens $childrens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildrensRequest $request, Childrens $childrens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Childrens $childrens)
    {
        //
    }
}
