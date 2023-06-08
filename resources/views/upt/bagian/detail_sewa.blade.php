@extends('main');

@section('container')
<div class="border-bottom border-2">
<div class=" d-flex justify-content-between ">
    <button type="button" class="btn btn-transparent mb-3"><a class="text-decoration-none text-black" href="/upt/detail"><i class="bi bi-arrow-left me-2"></i>Kembali</a></button>
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
 @foreach ($childrens as $childer)
   
 @endforeach
<table style="width: 80%" class="">
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Penggunaan/Pemanfaatan</p></td>
        <td class=""><p class="fw-bold d-inline" >Masa Berlaku</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">Sewa</p> </td>
        <td class=" ">12/12/2021 - 12/12/2023</td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Atas Nama</p></td>
        <td class=""><p class="fw-bold d-inline" >Nomor Perikatan</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline"></p> </td>
        <td class="">42323</td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Peruntukan/Pemanfaatan</p></td>
        <td class=""><p class="fw-bold d-inline" >Tanggal Perikatan</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">Tanah Kantor Sawah</p> </td>
        <td class="">12/6/2022</td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Koordinat (LS BT)</p></td>
        <td class=""><p class="fw-bold d-inline" >Surat Perjanjian</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">823461523432</p> </td>
        <td class=""><a href="">Surat Perjanjian.pdf</a></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Luas Induk (m2)</p></td>
        <td class=""><p class="fw-bold d-inline" >Surat Permohonan</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">Tanah Kantor Sawah</p> </td>
        <td class=""><a class="text-primary" href="">Surat permohonan.pdf</a></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class="fw-bold d-inline" >Nilai Sewa/Retribusi (Rp/Tahun)</p></td>
    </tr>
    <tr class="">
        <td colspan="2" class=""><p class=" d-inline">4.000.000</p> </td>
    </tr>
</table>

<div class="border-bottom mt-3"></div>

<div class="mt-3 mb-3 me-5 d-flex justify-content-between" >
    <h5 class="fw-bold d-inline">Informasi Pembayaran</h5>
    
    {{-- <button type="button" class="btn btn-primary">
      <a class="text-white text-decoration-none" href="/pusda/detail/detail_sewa/tambah_sewa">Tambah Data</a>
    </button> --}}

 
    
<!-- Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Pembayaran</h1>
      </div>
      <div class="modal-body ">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tahun</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan tahun pembayaran">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Jumlah Pembayaran(Rp)</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan jumlah pembayaran">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Bukti Pembayaran (png, jpg, pdf)</label>
          <input class="form-control" type="file" id="formFile" placeholder="masukkan gambar (jpg, png, pdf)">
        </div>
        <div class="text-center">
        <button type="button" class="btn btn-primary">Simpan Data</button>
      </div>
      </div>
    </div>
  </div>
</div>

    
</div>
  {{-- LIST INFORMASI PEMBAYARAN --}}
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <tbody> 
        <tr>
          <th class="align-middle text-center" scope="row"><a href="pusda/detail" class="text-black text-decoration-none">1</a></th>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">TAHUN</p>
            <P>2022 </P>
          </td>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">JUMLAH</p>
            <P>Rp.4.000.000</P>
          </td>
          <td class="align-middle text-center">
            <p class="text-body-tertiary m-0" style="font-size: 12px">BUKTI PEMBAYARAN</p>
            <P><a href="">Bukti.jpg</a></P>
          </td>
          <td class="align-middle text-center">
            <i class="bi bi-pencil-square text-warning"></i>
            <i class="bi bi-trash text-danger"></i>
          </td>
        </tr> 
        <tr>
            <th class="align-middle text-center" scope="row"><a href="pusda/detail" class="text-black text-decoration-none">1</a></th>
            <td class="align-middle text-center">
              <p class="text-body-tertiary m-0" style="font-size: 12px">TAHUN</p>
              <P>2022 </P>
            </td>
            <td class="align-middle text-center">
              <p class="text-body-tertiary m-0" style="font-size: 12px">JUMLAH</p>
              <P>Rp.4.000.000</P>
            </td>
            <td class="align-middle text-center">
              <p class="text-body-tertiary m-0" style="font-size: 12px">BUKTI PEMBAYARAN</p>
              <P><a href="">Bukti.jpg</a></P>
            </td>
            <td class="align-middle text-center">
              <i class="bi bi-pencil-square text-warning"></i>
              <i class="bi bi-trash text-danger"></i>
            </td>
          </tr>
      </tbody>
    </table>
  
  
  </div>





 


@endsection