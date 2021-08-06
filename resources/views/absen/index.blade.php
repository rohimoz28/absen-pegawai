@extends('layouts.master')

@section('title','Absensi Pegawai')
@section('content')
<div class="row">
    <div class="col-md-4">
        @if ($message = Session::get('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">{{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <a href="{{ route('absen.create') }}" class="btn btn-primary mb-3">Click for absence</a>
    </div>
    <div class="col-md-4">
        <div class="input-group mb-3">
            <form action="{{ route('absen.index') }}" method="GET" role="search" class="form-inline">
                <input type="text" name="keyword" class="form-control" placeholder="Search by NIK or Name">
                @csrf
                <div class="input-group-append">
                    <button class="btn btn-success ml-2" type="submit" id="keyword">Search</button>
                </div>
            </form>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">In - Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absen as $no=>$a)
                <tr>
                    <th scope="row">{{ $absen->firstItem()+$no }}</th>
                    <td>{{ $a->nik_id }}</td>
                    <td>{{ $a->full_name }}</td>
                    <td>{{ date('l d-m-Y', strtotime($a->date_time)) }}</td>
                    <td>{{ $a->in_out }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $absen->links() }}
    </div>
</div>
@endsection