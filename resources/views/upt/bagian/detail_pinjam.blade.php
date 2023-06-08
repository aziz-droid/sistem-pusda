@extends('main');

@section('container')
<div class="border-bottom border-2">
<div class=" d-flex justify-content-between ">
    <button type="button" class="btn btn-transparent mb-3"><a class="text-decoration-none text-black" href="/pusda/detail"><i class="bi bi-arrow-left me-2"></i>Kembali</a></button>
    <div class="me-5">
        <button type="button" class="btn btn-transparent border border-danger text-danger">Hapus</button>
    <button type="button" class="btn btn-primary">Ubah Data</button>
    </div>
    </div>
</div>

<div class="mt-3  mb-4">
<h5 class="fw-bold d-inline">Informasi Tanah Bagian</h5> 
</div>

 {{-- DETAIL TANAH --}}
<table style="width: 80%" class="">
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Penggunaan/Pemanfaatan</p></td>
        <td class=""><p class="fw-bold d-inline" >Koordinat (LS BT)</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">Pinjam Pakai</p> </td>
        <td class=" ">932429974 </td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Peruntukan Pemanfaatan</p></td>
        <td class=""><p class="fw-bold d-inline" >Keterangan</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">Dinas Kesehatan</p> </td>
        <td class="">babibu</td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Luas Bagian (m2)</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">12000</p> </td>
    </tr>
   
</table>

<div class="border-bottom mt-3"></div>


@endsection