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
                <form action="{{ route('alternatifs.update', $alternatif->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama', $alternatif->nama) }}" placeholder="Masukkan Nama Skincare">

                        <!-- error message untuk title -->
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5"
                            placeholder="Masukkan Deskripsi Skincare">{{ old('deskripsi', $alternatif->deskripsi) }}</textarea>

                        <!-- error message untuk content -->
                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Komposisi</label>
                        <input type="text" class="form-control @error('komposisi') is-invalid @enderror" name="komposisi"
                            value="{{ old('komposisi') }}" placeholder="Masukkan Komposisi">

                        <!-- error message untuk title -->
                        @error('komposisi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Kemasan</label>
                        <input type="text" class="form-control @error('kemasan') is-invalid @enderror" name="kemasan"
                            value="{{ old('kemasan') }}" placeholder="Masukkan Kemasan">

                        <!-- error message untuk title -->
                        @error('kemasan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga"
                            value="{{ old('harga') }}" placeholder="Masukkan Harga">

                        <!-- error message untuk title -->
                        @error('harga')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Brand</label>
                        <input type="text" class="form-control @error('brand') is-invalid @enderror" name="brand"
                            value="{{ old('brand') }}" placeholder="Masukkan Brand">

                        <!-- error message untuk title -->
                        @error('brand')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Kesesuaian</label>
                        <input type="text" class="form-control @error('kesesuaian') is-invalid @enderror" name="kesesuaian"
                            value="{{ old('kesesuaian') }}" placeholder="Masukkan Kesesuaian">

                        <!-- error message untuk title -->
                        @error('kesesuaian')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>

                </form>
            </div><button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true">
        </div>



    </div>
@endsection
@push('add-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>
@endpush
