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
                        <a href="{{ route('category.index') }}" class="btn btn-success">Back</a>
                        <h5>Edit Category</h5>
                        <form action="{{ route('category.update',['category'=>$category]) }}" method="post">
                            @csrf
                            <div class="mb-2">
                                @if(isset($category->parent_category) && $category->parent_category->count() > 0)
                                    <label class="form-label">Parent Category</label>
                                    <select class="form-control" name="parent_id">
                                        @foreach($all_categories as $all_category)
                                        <option value="{{ $all_category->id }}" @if($category->parent_category->id == $all_category->id ) selected @endif >{{ $all_category->name }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                            <input type="hidden" name="back_url" value="{{ url()->previous() }}">
                            <div class="mb-2">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ $category->name ?? "" }}">
                            </div>
                            
                            <div class="mb-2">
                                <label class="form-label">Image</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            
                            <div class="mb-2">
                                <label class="form-label">Background Color</label>
                                <input type="color" name="color" value="{{ $category->background_color ?? "" }}">
                            </div>
                            
                            <div class="mb-2">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status">
                                    <option value='1' {{ $category->active == '1' ? 'selected':'' }} >Active</option>
                                    <option value='0' {{ $category->active == '0' ? 'selected':'' }} >Disable</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection