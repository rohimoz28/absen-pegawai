@extends('layouts.master')

{{-- @section('title','Halaman Pegawai') --}}
@section('content')
<h2>Aplikasi Absen Pegawai Sederhana</h2>
<br>
<p>1. Absensi</p>
<p>* Berupa inputan NIK pegawai yang ketika ditekan tombol enter maka akan menyimpan data absensi sesuai dengan realtime
    now</p>
<p>* Untuk enter pertama dianggap absen masuk. enter kedua dianggap absen keluar</p>
<p>* Inputan absen berada di menu absensi lalu klik tombol "Click for absence"</p>
<br>
<p>2. Backend</p>
<p>* Menu pegawai berisi CRUD pegawai, searching, paginating, dan sorting pegawai</p>
<p>* Menu absensi berisi view data pegawai</p>
<br>
<p>3. Login Aplikasi</p>
<p>* Login static dengan username dan password : admin</p>
@endsection