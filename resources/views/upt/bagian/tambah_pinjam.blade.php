@extends('main');

@section('container')
<div class="border-bottom border-2">
<form action="{{ route('children.store') }}" method="POST" >
<div class=" d-flex justify-content-between ">
    <button type="button" class="btn btn-transparent mb-3"><a class="text-decoration-none text-black" href="/pusda/{{ $parent->id }} "><i class="bi bi-arrow-left me-2"></i>Kembali</a></button> 
    <div class="me-5">
    <button type="button" class="btn btn-transparent border border-danger text-danger me-3">Batal</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
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
            <label for="exampleFormControlInput1" class="form-label">Pilih Penggunaan/Pemanfaatan</label>
            <select class="form-select" name="penggunaan_pemanfaatan"  aria-label="Default select example">
              <option value="2">Pakai Sendiri</option>
              <option value="1">Pinjam Pakai</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Peruntukan Pemanfaatan</label>
            <input type="text" class="form-control" name="peruntukkan" id="exampleFormControlInput1" placeholder="Masukkan peruntukkan pemanfaatan">
          </div>  
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Luas Bagian(m2)</label>
            <input type="text" class="form-control" name="luas" id="exampleFormControlInput1" placeholder="Masukkan luas bagian">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kondisi Saat Ini</label>
            <input type="text" class="form-control" name="kondisi saat ini" id="exampleFormControlInput1" placeholder="Masukkan kondisi tanah saat ini">
          </div>
    </div>
    </div>
    <div class="col">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Koordinat</label>
        <input type="text" class="form-control" name="koordinat" id="exampleFormControlInput1" placeholder="Masukkan koordinat">
      </div>
        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="nama_aset" placeholder="Masukkan keterangan" rows="3"></textarea>
    </div>
    </div>
  </div>
</div>

@endsection
