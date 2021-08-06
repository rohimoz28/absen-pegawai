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
    <div class="col-md-4">
        <form method="POST" action="{{ route('absen.store') }}">
            @csrf
            <div class="form-group">
                <label for="nik">Nomer Induk Pegawai</label>
                <select name="nik" id="nik" class="form-control">
                    <option selected>Masukkan nomer induk pegawai...</option>
                    @foreach($pegawai as $p)
                        <option>{{ $p['nik'] }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
