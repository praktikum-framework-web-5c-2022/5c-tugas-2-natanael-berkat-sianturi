<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});


Route::get('/dosen', function () {
    $dsn = ["Kamal Prihandani", "Aji Primajaya", "Betha Nurina Sari", "Carudin", "Intan Purnamasari", "Iqbal Maulana",
         "Oman Kamarudin", "Dadang Yusuf", "Rini Mayasari", "Tesa Nur Padila"];
    return view('dosen')->with('dosens',$dsn);
});

Route::get('/matakuliahs', function () {
    $mk = ["Framewrok PW", "PB Mobile", "Blockchain", "Technopreneur", "Data Mining", "Cloud Computing", "Algoritma",
        "Machine Learning", "Mtk Diskrit", "Struktur Data"];
    return view('matakuliah')->with('matakuliahs',$mk);
});

Route::get('/mahasiswa', function () {
    $mhs = ["Radika Lubis", "Sopiatul Ulum", "Kim Jongin", "Park Chanyeol", "Inumaki Toge", "Uchiha Itachi",
         "Kageyama Tobio", "Hinata shoyo", "Lay Zhang", "Zhong Chenle"];
    return view('mahasiswa')->with('mahasiswas',$mhs);
});


Route::get('/dosen', function(){
    $list_dosen = ["Kamal Prihandani", "Aji Primajaya", "Betha Nurina Sari", "Carudin", "Intan Purnamasari", "Iqbal Maulana",
    "Oman Kamarudin", "Dadang Yusuf", "Rini Mayasari", "Tesa Nur Padila"];
    return view('dosen')->with('dosens', $list_dosen);
});

// Route::get('/matakuliah', function(){
//     $list_matakuliah = ["Framewrok PW", "PB Mobile", "Blockchain", "Technopreneur", "Data Mining", "Cloud Computing", "Algoritma",
//     "Machine Learning", "Mtk Diskrit", "Struktur Data"];
//     return view('matakuliah')->with('studies', $list_matakuliah);
// });

// Route::get('/mahasiswa', function(){
//     $list_mahasiswa = ["Radika Lubis", "Sopiatul Ulum", "Kim Jongin", "Park Chanyeol", "Inumaki Toge", "Uchiha Itachi",
//     "Kageyama Tobio", "Hinata shoyo", "Lay Zhang", "Zhong Chenle"];
//     return view('mahasiswa')->with('students', $list_mahasiswa);
// });

