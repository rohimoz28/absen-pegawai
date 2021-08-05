@extends('layouts.master')

@section('title','Absensi Pegawai')
@section('content')
<div class="row">
    <div class="col-md-4">
        <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Nomer Induk Pegawai</label>
                <select id="inputState" class="form-control">
                    <option selected>Masukkan nomer induk pegawai...</option>
                    <option>Jack Grealish - 2021001</option>
                    <option>Luke Shaw - 2021002</option>
                    <option>Mohamed Salah - 2021003</option>
                </select>
                <button class="btn btn-primary mt-3">Submit</button>
            </div>

        </form>
    </div>
</div>
@endsection