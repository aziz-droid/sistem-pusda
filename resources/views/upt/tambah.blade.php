@extends('main');

@section('container')
<div class="border-bottom border-2">
  <form action="{{ route('pusda.store') }}" method="POST" >
<div class=" d-flex justify-content-between ">
    <button type="button" class="btn btn-transparent mb-3"><a class="text-decoration-none text-black" href="/pusda"><i class="bi bi-arrow-left me-2"></i>Kembali</a></button>
    <div class="me-5">
    <button type="button" class="btn btn-transparent border border-danger text-danger me-3">Batal</button>
    
    <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
    </div>
</div>
<div class="mt-3  mb-4">
    <h5 class="fw-bold d-inline">Informasi Tanah Bidang</h5> 
</div>

  @csrf
<div class="me-5">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama/Jenis Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_aset" placeholder="Masukkan nama/jenis barang" required>
        
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nilai Aset</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nilai_aset" placeholder="Masukkan nilai aset" required>
      </div>
      <p>Sertifikat</p>
      <div class="d-flex">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nomor_sertifikat" placeholder="Masukkan nomor" required>
      </div>
      <div class="mb-3 ms-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
        
        <input class="form-control" type="date"  name="tanggal_sertifikat" placeholder= "Masukkan tanggal" required>
      </div>
    </div>
      
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Luas (m2)</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="luas" placeholder="Masukkan luas induk" required>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" placeholder="Masukkan alamat" rows="3" required></textarea>
    </div>
</div>

</form>
@endsection
