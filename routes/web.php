<?php

use App\Models\Parents;
use App\Models\Childrens;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\ChildrensController;



Route::get('/', function () {
    return view('dashboard',[
        'title' => 'dashboard',
        'header'=>'UPT-UPT JATIM'
    ]);
});



Route::resource('/pusda', ParentsController::class);
Route::resource('/pusda/{id}', ChildrensController::class);
 
// Route::get('/pusda/detail', function (){
//     return view('upt.detail',[
//         'title' => 'pusda',
//         'header'=>'UPT PSDA WS BRANTAS KEDIRI',
//         'parents'=> Parents::all()
//     ]);
// } );

Route::get('tambah_bidang', function () {
    return view('upt.tambah',[
        'title' => 'pusda',
        'header'=>'UPT PSDA WS BRANTAS KEDIRI'
    ]);
});
Route::get('/pusda/detail/detail_pinjam', function () {
    return view('upt.bagian.detail_pinjam',[
        'title' => 'pusda',
        'header'=>'UPT PSDA WS BRANTAS KEDIRI'
    ]);
});
Route::get('/pusda/detail/detail_sewa', function () {
    return view('upt.bagian.detail_sewa',[
        'title' => 'pusda',
        'header'=>'UPT PSDA WS BRANTAS KEDIRI'
    ]);
});
Route::get('/pusda/detail/tambah_sewa', function () {
    return view('upt.bagian.tambah_sewa',[
        'title' => 'pusda',
        'header'=>'UPT PSDA WS BRANTAS KEDIRI'
    ]);
});
Route::get('/pusda/detail/tambah_pinjam', function () {
    return view('upt.bagian.tambah_pinjam',[
        'title' => 'pusda',
        'header'=>'UPT PSDA WS BRANTAS KEDIRI'
    ]);
});





