@extends('layouts.master')

@section('title','Absensi Pegawai')
@section('content')
<div class="row">
    <div class="col-md-7">
        <a href="{{ route('absen.create') }}" class="btn btn-primary mb-3">Click for absence</a>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Name</th>
                    <th scope="col">In - Out</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>2021001</td>
                    <td>Mark Loft</td>
                    <td>20:21:30</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection