@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Books</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Data Books</div>
                </div>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-body p-4">

                                <!-- Create button -->
                                <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">
                                    <i class="fas fa-book"></i> Create
                                </a>

                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Nama Buku</th>
                                                <th>Tahun Terbit</th>
                                                <th>Slug</th>
                                                <th>Penulis</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($books as $book)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $book->name }}</td>
                                                    <td>{{ $book->years }}</td>
                                                    <td>{{ $book->slugs }}</td>
                                                    <td>{{ $book->author }}</td>
                                                    <th>
                                                        <a href="{{ route('books.edit', $book->id) }}"
                                                            class="edit btn btn-info btn-sm">
                                                            <i class="ri-pencil-fill"></i> Edit
                                                        </a>
                                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="ri-delete-bin-6-fill"></i> Delete
                                                            </button>
                                                        </form>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection

@section('ff')
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
@endsection
