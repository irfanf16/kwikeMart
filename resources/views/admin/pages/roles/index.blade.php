@extends('admin.layout.master')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                            <a class="btn btn-primary" href="{{ route('roles.create') }}">
                                Add Category
                            </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <h5>Roles</h5>
                        </div>
                        <div class="table-responsive">
                            @if(isset($roles) && $roles->count() > 0)
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($roles as $role)
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->created_at }}</td>
                                                
                                                <td>
                                                    <div style="display: flex;">&nbsp;
                                                        &nbsp;
                                                        <a href="{{route('roles.edit',['id'=>$role->id])}}" class="btn btn-primary">Edit</a>
                                                        &nbsp;
                                                        <a href="" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Created At</th>
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