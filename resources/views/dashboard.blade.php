@extends('main')

@section('container')
<div class="table-responsive">
  <div class="d-flex justify-content-between mb-3">
  <div class="dropdown">
    <button class="btn btn-transparent border-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      2021
    </button>
    <ul class="dropdown-menu" >
      <li><a class="dropdown-item text-center" href="#">2022</a></li>  
      <li><a class="dropdown-item text-center" href="#">2022</a></li>    
      <li><a class="dropdown-item text-center" href="#">2022</a></li>    
      <li><a class="dropdown-item text-center" href="#">2022</a></li>    
    </ul>
  </div>
  <button type="button" class="btn btn-primary me-5">Export</button>
</div>
<div class="me-2 border-1 border border-dark rounded-1 border-radius">
  <table class="table table-striped table-sm ">
    <thead>
      <tr class=>
        <th class="align-middle text-center" rowspan="2" scope="col">NAMA UPT</th>
        <th class="align-middle text-center" rowspan="2" scope="col">JUMLAH <br> BIDANG TANAH</th>
        <th class="align-middle text-center" rowspan="2" scope="col">TOTAL <br> PINJAM PAKAI</th>
        <th class="align-middle text-center" rowspan="2" scope="col">TOTAL <br> PAKAI SENDIRI</th>
        <th class="text-center border-0" colspan="2" scope="col">TOTAL SEWA/SIP BMD</th>
        <th class="text-center border-0" colspan="2" scope="col">TOTAL RETRIBUSI</th>
      </tr>
      <tr>
          <th class="text-center" scope="col">TANAH </th>
          <th class="text-center" scope="col">RUPIAH</th>
          <th class="text-center" scope="col">TANAH </th>
          <th class="text-center" scope="col">RUPIAH</th>        
        </tr>
    </thead>
    <tbody>
      <tr class="text-center ">
        <td class="fw-bold text-start ps-5">PUSDA JATIM</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
      <tr class="text-center">
        <td class="fw-bold text-start ps-5">UPT KEDIRI</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
      <tr class="text-center">
        <td class="fw-bold text-start ps-5">UPT LUMAJANG</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
      <tr class="text-center">
        <td class="fw-bold text-start ps-5">UPT BONDOWOSO</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
      <tr class="text-center">
        <td class="fw-bold text-start ps-5">UPT PASURUAN</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
      <tr class="text-center">
        <td class="fw-bold text-start ps-5">UPT BOJONEGORO</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
      <tr class="text-center">
        <td class="fw-bold text-start ps-5">UPT PAMEKASAN</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
      <tr class="text-center">
        <td class="fw-bold text-start ps-5 ">TOTAL KESELURUHAN</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
        <td>text</td>
      </tr>
     
   </tbody>
  </table>
</div>
</div>

@endsection