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
        {{-- Kriteria --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kriteria</h6>
            </div>
            <div class="card-body">
                {{-- <a href="/admin/tambahdata" class="btn btn-primary mb-3">Tambah Data</a> --}}
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Bobot</th>
                                <th>Presentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $k)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $k->name }}</td>
                                    <td>{{ $k->jenis }}</td>
                                    <td>{{ $k->bobot }}</td>
                                    <td>{{ $k->persentase }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true">
        </div>

        {{-- Alternatif --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alternatif</h6>
            </div>
            <div class="card-body">
                <a href="/admin/alternatifs/create" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Komposisi</th>
                                <th>Kemasan</th>
                                <th>Harga</th>
                                <th>Brand</th>
                                <th>Kesesuaian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->deskripsi }}</td>
                                    <td>{{ $p->komposisi }}</td>
                                    <td>{{ $p->kemasan }}</td>
                                    <td>{{ $p->harga }}</td>
                                    <td>{{ $p->brand }}</td>
                                    <td>{{ $p->kesesuaian }}</td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('alternatifs.destroy', $p->id) }}" method="POST">
                                            <a href="{{ route('alternatifs.edit', $p->id) }}"
                                                class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class="bi bi-trash"></i></button>
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
                    {{-- {{ $posts->links() }} --}}
                </div>
            </div><button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true">
        </div>

        {{-- Normalisasi --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Normalisasi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Komposisi</th>
                                <th>Kemasan</th>
                                <th>Harga</th>
                                <th>Brand</th>
                                <th>Kesesuaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normalisasi as $n)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $n->nama }}</td>
                                    <td>{{ $n->komposisi }}</td>
                                    <td>{{ $n->kemasan }}</td>
                                    <td>{{ $n->harga }}</td>
                                    <td>{{ $n->brand }}</td>
                                    <td>{{ $n->kesesuaian }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true">
        </div>

        {{-- Hasil --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hasil Sistem Pendukung Keputusan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $h)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $h->nama }}</td>
                                    <td>{{ $h->hasil }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true">
        </div>

    </div>
@endsection
@push('add-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
