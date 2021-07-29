@extends('layouts.master')

@section('title','Form Add Pegawai')
@section('content')
<div class="col-7">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('pegawai.update',$pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nik" id="nik" @if (old('nik')) value="{{ old('nik') }}"
                    @else value="{{ $pegawai->nik }}" @endif>
            </div>
        </div>
        <div class="form-group row">
            <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="full_name" id="full_name" @if (old('full_name'))
                    value="{{ old('full_name') }}" @else value="{{ $pegawai->full_name }}" @endif>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" @if (old('email'))
                    value="{{ old('email') }}" @else value="{{ $pegawai->email }}" @endif>
            </div>
        </div>
        <div class="form-group row">
            <label for="mobile_number" class="col-sm-2 col-form-label">Mobile Number</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="mobile_number" id="mobile_number"
                    value="{{ $pegawai->mobile_number }}">
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/" class="btn btn-secondary">Back</a>
            </div>
        </div>

    </form>
</div>
@endsection