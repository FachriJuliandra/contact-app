<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
    <h1>aplikasi kontak</h1>
    <div>
    <a href='/contacts'>kontak</a>
    <a href='/contacts/create'>kontak baru</a>
    <a href='/contacts/2'>Tampilan Kontak</a>
    <a href='/students/Fachri'>Tampilan Nama</a> 
    ";
    return $html;
});

Route::get('contacts', function() {
    return "<h1><marquee direction='right'>kontak student day programming</marquee></hi>";
});

Route::get('/contacts/create', function() {
    return "<h1>tambah contact baru</h1>";
});

Route::get('/contacts/{id}', function($id) {
    return "Halaman kontak ID ".$id;
});

Route::get('/students/{name}', function($name) {
    return "Nama Lengkap: ".$name; 
});
Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
})->whereAlphaNumeric('name')->name('companies');