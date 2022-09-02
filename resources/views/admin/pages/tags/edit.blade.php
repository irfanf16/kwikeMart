@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <form action="{{ route('tags.update',['id'=>$tag->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $tag->name }}" required>
                                    <label>Icon</label>
                                    <img src="{{ asset($tag->icon) }}" class="img-fluid" width="120">
                                    <input type="file" class="form-control" name="icon">
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