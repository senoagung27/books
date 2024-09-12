@extends('layouts.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Book</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Book</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <form action="{{ route('books.update', $book->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH') <!-- This directive specifies that the method is PUT -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Name:</label>
                                            <input type="text" name="name" class="form-control" value="{{ $book->name }}" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Year:</label>
                                            <input type="number" name="years" class="form-control" value="{{ $book->years }}" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Slug:</label>
                                            <input type="text" name="slugs" class="form-control" value="{{ $book->slugs }}" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label>Author:</label>
                                            <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
                                        </div>
                                        <!-- Add more fields if needed -->
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
