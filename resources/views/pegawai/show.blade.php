@extends('layouts.master')

{{-- @section('title','Form Pegawai') --}}
@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8">
        <h2>Detail Pegawai</h2>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <div class="col-6">
                        <input type="hidden" value="{{ $pegawai->id }}">
                        <th class="pl-0 w-25" scope="row"><strong>Full Name</strong></th>
                        <td>{{ $pegawai->full_name }}</td>
                    </div>
                    <div class="col-6">
                        <th class="pl-0 w-25" scope="row"><strong>Email</strong></th>
                        <td>{{ $pegawai->email }}</td>
                    </div>
                </tr>
                <tr>
                    <div class="col-6">
                        <th class="pl-0 w-25" scope="row"><strong>NIK</strong></th>
                        <td>{{ $pegawai->nik }}</td>
                    </div>
                    <div class="col-6">
                        <th class="pl-0 w-25" scope="row"><strong>Mobile Number</strong></th>
                        <td>{{ $pegawai->mobile_number }}</td>
                    </div>
                </tr>
            </tbody>
        </table>

        {{-- Back Button --}}
        {{-- <div class="row">
            <div class="col-5">
                <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Back</a>
    </div>
</div> --}}
</div>
</div>
<div class="row">
    <div class="col-10">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">In - Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absen as $item)
                <tr>
                    <td>{{ date('d-M-Y', strtotime($item->date_time)) }}</td>
                    <td>{{ $item->in_out }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection()