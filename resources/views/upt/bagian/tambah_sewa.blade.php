@extends('main');

@section('container')


<div class="border-bottom border-2">
<div class=" d-flex justify-content-between ">
    <button type="button" class="btn btn-transparent mb-3"><a class="text-decoration-none text-black" href="/pusda/detail"><i class="bi bi-arrow-left me-2"></i>Kembali</a></button>
    <div class="me-5">
    <button type="button" class="btn btn-transparent border border-danger text-danger me-3">Batal</button>
    <button type="button" class="btn btn-primary">Tambah Data</button>
    </div>
    </div>
</div>

<div class="mt-3  mb-4">
    <h5 class="fw-bold d-inline">Informasi Tanah Bagian</h5> 
</div>
<div class="container">
  <div class="row ">
    <div class="col">
      <div class="me-5">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penggunaan/Pemanfaatan</label>
            <select class="form-select" aria-label="Default select example">
              <option value="2">Sewa/SIP BMD</option>
              <option value="1">Retribusi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama">
          </div>  
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nilai Sewa/Retribusi (Rp/Tahun)</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nilai sewa">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Peruntukkan Pemanfaatan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan peruntukkan pemanfaatan">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Koordinat</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan koordinat">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Luas Bagian(m2)</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan luas bagian">
          </div>
          <p class="fw-bold">Masa Berlaku</p>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Dari</label>
            <input class="form-control" type="date"  placeholder="Pilih tanggal">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sampai</label>
            <input class="form-control" type="date"  placeholder="Pilih tanggal">
          </div>
        
          
          
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor Perikatan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : xxx/zzz/104.5/2022">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Perikatan</label>
        <input class="form-control" type="date"  placeholder="Pilih tanggal" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Masukkan keterangan" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label fw-bold">Surat Perjanjian </label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label fw-bold">Surat Permohonan</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label fw-bold">Dan lain-lain </label>
      <input class="form-control" type="file" id="formFile">
    </div>
    </div>
  </div>
</div>

@endsection
