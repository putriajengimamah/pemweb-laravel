@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Skincare</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Skincare</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('mendaftars.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mendaftars as $mendaftar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mendaftar->nama }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/mendaftars/') . $mendaftar->image }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td>{!! $mendaftar->deskripsi !!}</td>
                                    <td>{!! $mendaftar->harga !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('mendaftars.destroy', $mendaftar->id) }}" method="POST">
                                            <a href="{{ route('mendaftars.edit', $mendaftar->id) }}"
                                                class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Skincare belum tersedia
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $mendaftars->links() }}
                </div>
            </div><button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true">
        </div>



    </div>
@endsection
@push('add-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@endpush
