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
                        <h5>Add Parent Category</h5>
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option value='1' >Active</option>
                                        <option value='0' >Disable</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection