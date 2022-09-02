@extends('admin.layout.master')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                            <a class="btn btn-primary" href="{{ route('category.create') }}">
                                Add Category
                            </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <h5>Main Categories</h5>
                        </div>
                        <div class="table-responsive">
                            @if(isset($categories) && $categories->count() > 0)
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    @if ($category->active == '1')
                                                        <a href="{{route('category.change.status',['id'=>$category->id])}}" class="btn btn-primary">
                                                            Active
                                                        </a>
                                                    @else    
                                                        <a href="{{route('category.change.status',['id'=>$category->id])}}" class="btn btn-secondary">
                                                            Disable
                                                        </a>
                                                    @endif    
                                                    </td>
                                                </td>
                                                <td>
                                                    <div style="display: flex;">&nbsp;
                                                        @if(isset($category->sub_category) && $category->sub_category->count() > 0)
                                                            <a href="{{ route('category.show',['category'=>$category->id]) }}" class="btn btn-info">View</a>
                                                        @endif
                                                        &nbsp;
                                                        <a href="{{route('category.edit',['category'=>$category])}}" class="btn btn-primary">Edit</a>
                                                        &nbsp;
                                                        <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Status</th>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <label for="" class="form-label">Add Category Image</label>
                            <input type='file' class="form-control">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <label for="" class="form-label">Add Category Name</label>
                            <input type="text" class="form-control" placeholder="">
                         </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12 col-lg-12">
                            <label for="" class="form-label">Approval</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Approved</option>
                                <option value="2">Not Approved</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary shadow" type="button" data-bs-dismiss="modal">Save</button>
                    <button class="btn btn-primary shadow" type="submit">Send For Approval</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            alert("Do you really want to delete this country?");
        }
    </script>

@endsection
