@extends('layouts.master')

@section('title','Halaman Pegawai')
@section('content')
<div class="col-md-8 mb-3">
    @if ($message = Session::get('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">{{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <a href="{{ route('pegawai.create') }}" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add New Pegawai</span>
    </a>
</div>
<div class="col-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pegawai</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th class="text-center">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawai as $p )
                        <tr>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->full_name }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->mobile_number }}</td>
                            <td class="text-center">
                                <form action="{{ route('pegawai.destroy',$p->id) }}" method="POST">
                                    <a class="badge badge-pill badge-info"
                                        href="{{ route('pegawai.show',$p->id) }}">Show</a>
                                    <a class="badge badge-pill badge-warning"
                                        href="{{ route('pegawai.edit',$p->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge badge-pill badge-danger">Delete</button>
                                </form>
                                {{-- <a href="{{ route('pegawai.edit',$p->id) }}"
                                class="badge badge-pill badge-success">Update</a>
                                <a href="" class="badge badge-pill badge-danger">Delete</a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Page level plugins -->
<script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('js/demo/datatables-demo.js') }}"></script>
@endpush