<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/master',function(){
 return view('master');
});
Route::get('team','teamcontroller@awal');
Route::get('about','aboutcontroller@awal');
Route::get('home','homecontroller@awal');
Route::get('tentang','tentangcontroller@awal');
Route::get('/tentang/kedua','tentangcontroller@kedua');
Route::get('home_layanan','homecontroller@layanan');
Route::get('home_fasilitas','homecontroller@fasilitas');
Route::get('jdwl','homecontroller@jadwaldokter');
Route::get('jdwl/lihat/{jadwal}','homecontroller@lihatjadwaldokter');
Route::get('home_umum','homecontroller@umum');
Route::get('spls','homecontroller@spesialis');
Route::get('spls/lihat/{spesialis}','homecontroller@lihatspesialis');


Route::get('/login','sesicontroller@form');
Route::post('/login','sesicontroller@validasi');
Route::get('/logout','sesicontroller@logout');
Route::get('/','sesicontroller@index');


Route::group(['middleware'=>'Autentifikasidokter'],function()
{

Route::get('dokter-master','Pdokterc@awal_dokter');
Route::get('lihat_pasien','Pdokterc@lihatpasien');
Route::get('dr/lihat/{dr}','Pdokterc@lihatdokter');
Route::post('pdokter/updatedokter{pdokter}','Pdokterc@updatedokter');
Route::get('tambah_rawat','Pdokterc@tambahrawat');
Route::post('simpan_rawat','Pdokterc@simpanrawat');
Route::get('edit_rawat/','Pdokterc@editrawat');
Route::get('edit_dokter/{dr}','Pdokterc@editdokter');
Route::get('awal_rawat','Pdokterc@awalrawat');
Route::get('awal_pasien','Pdokterc@awalpasien');
Route::get('awal_dokter','Pdokterc@awal_dokter');
Route::get('awal_pasien_dokter','Pdokterc@awalrawat');
Route::post('pdokter/updaterawat/{pdokter}','Pdokterc@updaterawat');
Route::get('/pddokter/hapus/{pdokter}','Pdokterc@hapus');
});
 Route::group(['middleware'=>'AutentifikasiUser'],function()
{
Route::get('pengguna','penggunac@awal');
Route::get('/pengguna/tambah','penggunac@tambah');
Route::get('pengguna/lihat/{pengguna}','penggunac@lihat');
Route::post('/pengguna/simpan','penggunac@simpan');
Route::get('/pengguna/edit/{pengguna}','penggunac@edit');
Route::post('/pengguna/edit/{pengguna}','penggunac@update');
Route::get('/pengguna/hapus/{pengguna}','penggunac@hapus');

Route::get('layanan','layananc@awal');
Route::get('/layanan/tambah','layananc@tambah');
Route::get('layanan/lihat/{layanan}','layananc@lihat');
Route::post('/layanan/simpan','layananc@simpan');
Route::get('/layanan/edit/{layanan}','layananc@edit');
Route::post('/layanan/edit/{layanan}','layananc@update');
Route::get('/layanan/hapus/{layanan}','layananc@hapus');

Route::get('spesialis','spesialisc@awal');
Route::get('/spesialis/tambah','spesialisc@tambah');
Route::get('spesialis/lihat/{spesialis}','spesialisc@lihat');
Route::post('/spesialis/simpan','spesialisc@simpan');
Route::get('/spesialis/edit/{spesialis}','spesialisc@edit');
Route::post('/spesialis/edit/{spesialis}','spesialisc@update');
Route::get('/spesialis/hapus/{spesialis}','spesialisc@hapus');

Route::get('jenis_info','jenis_infoc@awal');
Route::get('/jenis_info/tambah','jenis_infoc@tambah');
Route::get('jenis_info/lihat/{jenis_info}','jenis_infoc@lihat');
Route::post('/jenis_info/simpan','jenis_infoc@simpan');
Route::get('/jenis_info/edit/{jenis_info}','jenis_infoc@edit');
Route::post('/jenis_info/edit/{jenis_info}','jenis_infoc@update');
Route::get('/jenis_info/hapus/{jenis_info}','jenis_infoc@hapus');

Route::get('pasien','pasienc@awal');
Route::get('/pasien/tambah','pasienc@tambah');
Route::get('pasien/lihat/{pasien}','pasienc@lihat');
Route::post('/pasien/simpan','pasienc@simpan');
Route::get('/pasien/edit/{pasien}','pasienc@edit');
Route::post('/pasien/edit/{pasien}','pasienc@update');
Route::get('/pasien/hapus/{pasien}','pasienc@hapus');

Route::get('dokter','dokterc@awal');
Route::get('/dokter/tambah','dokterc@tambah');
Route::get('dokter/lihat/{dokter}','dokterc@lihat');
Route::post('/dokter/simpan','dokterc@simpan');
Route::get('/dokter/edit/{dokter}','dokterc@edit');
Route::post('/dokter/edit/{dokter}','dokterc@update');
Route::get('/dokter/hapus/{dokter}','dokterc@hapus');

Route::get('jadwal','jadwalc@awal');
Route::get('/jadwal/tambah','jadwalc@tambah');
Route::get('jadwal/lihat/{jadwal}','jadwalc@lihat');
Route::post('/jadwal/simpan','jadwalc@simpan');
Route::get('/jadwal/edit/{jadwal}','jadwalc@edit');
Route::post('/jadwal/edit/{jadwal}','jadwalc@update');
Route::get('/jadwal/hapus/{jadwal}','jadwalc@hapus');

Route::get('informasi','informasic@awal');
Route::get('/informasi/tambah','informasic@tambah');
Route::get('informasi/lihat/{informasi}','informasic@lihat');
Route::post('/informasi/simpan','informasic@simpan');
Route::get('/informasi/edit/{informasi}','informasic@edit');
Route::post('/informasi/edit/{informasi}','informasic@update');
Route::get('/informasi/hapus/{informasi}','informasic@hapus');

Route::get('pasien_dokter','pasien_dokterc@awal');
Route::get('/pasien_dokter/tambah','pasien_dokterc@tambah');
Route::get('pasien_dokter/lihat/{pasien_dokter}','pasien_dokterc@lihat');
Route::post('/pasien_dokter/simpan','pasien_dokterc@simpan');
Route::get('/pasien_dokter/edit/{pasien_dokter}','pasien_dokterc@edit');
Route::post('/pasien_dokter/edit/{pasien_dokter}','pasien_dokterc@update');
Route::get('/pasien_dokter/hapus/{pasien_dokter}','pasien_dokterc@hapus');

Route::get('/pasien_dokter/hapus/{pasien_dokter}','pasien_dokterc@hapus');

});
