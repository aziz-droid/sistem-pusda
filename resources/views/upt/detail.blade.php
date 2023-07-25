@extends('main');

@section('container')
<div class="border-bottom border-2">
<div class=" d-flex justify-content-between ">
    <button type="button" class="btn btn-transparent mb-3"><a class="text-decoration-none text-black" href="/pusda"><i class="bi bi-arrow-left me-2"></i>Kembali</a></button>
    <div class="me-5">
    <button type="button" class="btn btn-primary">Lokasi Peta</button>
    </div>
    </div>
</div>

<div class="mt-3  mb-4">
<h5 class="fw-bold d-inline">Informasi Tanah Bidang</h5> 
</div>

 {{-- DETAIL TANAH --}}
<table style="width: 80%" class="">
 
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Nama/Jenis Barang</p></td>
        <td class=""><p class="fw-bold d-inline" >Luas Tanah Bidang (m2)</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">{{ $parent->nama_aset }}</p></td>
        <td class="">{{ $parent->luas }}</td>
    </tr>

    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline">Nilai Aset</p></td>
        <td class=""><p class="fw-bold d-inline" >Alamat</p> </td>
    </tr>
    <tr class="" >
        <td colspan="2" class="" style="vertical-align: top"><p class=" d-inline text-top">RP {{ $parent->nilai_aset }}</p></td>
        <td class="" style="width: 500px;">{{ $parent->alamat }}</td>
    </tr>

    <tr class="">
        <td colspan="2" class=""></td>
    </tr>
</table>
<p style="margin-left:70px" class="fw-bold d-inline">Sertifikat</p>
<div class="">
    <span class="ms-2 fw-bold">Nomor</span>
    <span class="fw-bold" style="margin-left: 50px">Tanggal</span>
</div>

<div class="d-inline ">
    <span >{{ $parent->nomor_sertifikat }}</span>
    <span style="margin-left: 40px">{{ $parent->tanggal_sertifikat }}</span>
</div>
<div class="border-bottom mt-3"></div>

<div class="mt-3  mb-3">
    <h5 class="fw-bold d-inline">Rincian Penggunaan/Pemanfaatan </h5>
</div>
<div class="d-flex mb-4" role="search">
    <button type="button" class="btn btn-primary">Import Data</button>
    <input class="form-control me-2" style="width: 20%; margin-left:55%;" type="search" placeholder="Cari Data" aria-label="Search">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
    
<!-- Modal -->
<div class="modal fade" style="margin-top:13%" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tanah Bagian</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <button class="btn btn-primary mb-3" style="margin-left: 135px">
          <a class="text-white text-decoration-none" href="/pusda/detail/tambah_pinjam">Pakai Sendiri/Pinjam Pakai</a>
        </button>
        <button class="btn btn-primary d-block " style="margin-left: 170px">
          <a class="text-white text-decoration-none" href="/pusda/detail/tambah_sewa">Sewa/Retribusi</a>
        </button>
      </div>
    </div>
  </div>
</div>
</div>


  {{-- LIST DATA TANAH BAGIAN --}}
  <div class="table-responsive">
    
    <table class="table table-striped table-sm">
      <tbody> 
        @foreach ($parent->childrens as $children )
    
        <tr>
          <th class="align-middle text-center" scope="row"><a href="pusda/detail" class="text-black text-decoration-none">1</a></th>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">PENGGUNAAN/<br>PEMANFAATAN</p>
            <P>{{ $children->penggunaan_pemanfaatan }}</P>
          </td>
         
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">PEMANFAATAN</p>
            <P>{{ $children->peruntukkan }}</P>
          </td>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">NO PERIKATAN</p>
            <P>{{ $children->nomor_perikatan }}</P>
          </td>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">LUAS</p>
            <P>{{ $children->luas }}</P>
          </td>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">NILAI SEWA</p>
            <P>{{ $children->nilai }}</P>
          </td>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">MASA BERLAKU</p>
            <P>{{ $children->berlaku_dari }} - {{ $children->berlaku_sampai }}</P>
          </td> 
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px"><a href="/pusda/detail/detail_sewa">DETAIL</a></p>
          </td>
        </tr> 
        @endforeach  
      </tbody>
    </table>
   
  
  
  </div>





 


@endsection