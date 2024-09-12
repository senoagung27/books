@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create New Book</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Create New Book</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <form action="{{ route('books.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Name:</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Year:</label>
                                            <input type="number" name="years" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Slug:</label>
                                            <input type="text" name="slugs" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label>Author:</label>
                                            <input type="text" name="author" class="form-control" required>
                                        </div>
                                        <!-- You can add two more input fields here for the other columns -->
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
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
