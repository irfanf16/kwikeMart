@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Add Tag
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                    <label>Icon</label>
                                    <input type="file" class="form-control" name="icon" required>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection