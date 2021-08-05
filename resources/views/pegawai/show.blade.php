@extends('layouts.master')

{{-- @section('title','Form Pegawai') --}}
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $pegawai->full_name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $pegawai->nik }}</h6>
                <p class="card-text"><strong>Email:</strong> {{ $pegawai->email }}</p>
                <p class="card-text"><strong>Mobile:</strong> {{ $pegawai->mobile_number }}</p>
                <p class="card-text"><strong>In-Out:</strong> 20.20</p>

                <a href="{{ route('pegawai.edit',$pegawai->id) }}" class="card-link">Edit</a>
                <a href="{{ route('pegawai.index') }}" class="card-link">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection()