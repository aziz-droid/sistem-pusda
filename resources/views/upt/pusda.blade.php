@extends('main')

@section('container')

<form class="d-flex mb-5" role="search">
  <button type="button" class="btn btn-primary">Import Data</button>
  <input class="form-control me-2" style="width: 20%; margin-left:55%;" type="search" placeholder="Cari Data" aria-label="Search">
  <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="tambah_bidang">Tambah Tanah</a></button>
</form>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th class="align-middle text-center"  scope="col"  rowspan="2">NO</th>
        <th class="align-middle text-center border-0"  scope="col" colspan="2">SERTIFIKAT HAK PAKAI</th>
        <th class="align-middle text-center"  scope="col" rowspan="2">NAMA JENIS BARANG</th>
        <th class="align-middle text-center" scope="col" rowspan="2">NILAI ASET</th>
        <th class="align-middle text-center"  scope="col" rowspan="2">ALAMAT</th>
        <th class="align-middle text-center"  scope="col" rowspan="2">LUAS</th>
        <th class="align-middle text-center"  scope="col" rowspan="2">AKSI</th>
      </tr>
      <tr>
        <th class="align-middle text-center"  scope="col">NOMOR</th>
        <th class="align-middle text-center"  scope="col">TANGGAL</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($parents as $parent )
      <tr> 
        <th class="align-middle text-center" scope="row"><a href="/pusda/{{ $parent->id }}" class="text-black text-decoration-none">{{ $loop->iteration }}</a></th>
        <td class="align-middle text-center" style="width: 100px">{{ $parent->nomor_sertifikat }}</td>
        <td class="align-middle text-center">{{ $parent->tanggal_sertifikat }}</td>
        <td class="align-middle text-center" style="width: 100px">{{ $parent->nama_aset }}</td>
        <td class="align-middle text-center">Rp{{ number_format($parent->nilai_aset, 0, ',', '.')  }}</td>
        <td class="align-middle text-center" style="width: 250px">{{ $parent->alamat }}</td>
        <td class="align-middle text-center">{{ $parent->luas }}</td>

        <td class="align-middle text-center">
        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pusda.destroy', $parent->id) }}" method="POST">
            <a href="{{ route('pusda.edit', $parent->id) }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
      </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>
@endsection