@extends('admin.layout.master')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-2">
                            <div class="d-flex align-items-center"><b>View Sub-Category of: &nbsp;</b></div>
                            <form action="{{route('category.view_sub')}}" method="post" class="d-flex">
                                @csrf
                                <select class="form-control" name="cate_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>&nbsp;
                                <button type="submit" class="btn btn-primary">View</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(isset($sub_categories) && $sub_categories->count() > 0)
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Color</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($sub_categories as $sub_category)
                                            <tr>
                                                <td>{{ $sub_category->id }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/app/public/images/'.$sub_category->image) }}" class="img-fluid" width="120">
                                                </td>
                                                <td>{{ $sub_category->name }}</td>
                                                <td>{{ $sub_category->background_color }}</td>
                                                <td>
                                                    @if(isset($sub_category->subCategories) && $sub_category->subCategories->count() > 0)
                                                        <a href="{{route('category.show.sub',['category'=>$category->id,'sub_category'=>$sub_category->id])}}" class="btn btn-primary">View</a>
                                                    @endif
                                                    <a href="{{route('category.edit',['category'=>$sub_category->id])}}" class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Color</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
