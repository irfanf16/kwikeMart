@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('message'))
                        <p class="alert alert-{{ Session::get('alert') }}">{{ Session::get('message') }}</p>
                        @endif
                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                        <h5>Add Sub Category</h5>
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2">
                                        @if(isset($all_categories) && $all_categories->count() > 0)
                                            <label class="form-label">Parent Category</label>
                                            <select class="form-control" name="parent_id">
                                                @foreach($all_categories as $all_category)
                                                <option value="{{ $all_category->id }}" >{{ $all_category->name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-2">
                                <label class="form-label">Background Color</label>
                                <input type="color" name="color">
                            </div>
                            
                            
                            <div class="mb-2">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status">
                                    <option value='1' >Active</option>
                                    <option value='0' >Disable</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection