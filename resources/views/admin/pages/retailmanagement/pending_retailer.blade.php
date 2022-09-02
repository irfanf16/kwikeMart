@extends('admin/welcome')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Restaurant</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <td>5</td>
                                    <td>Processing</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>
                                        <span class="badge bg-sucess">Inactive</span>
                                    </td>
                                    <td>
                                        <div style="display: flex;">
                                            <a href="{{route('pending_retailerview')}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                            &nbsp;
                                            <a href="{{route('add_retail')}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            &nbsp;
                                            <a href="" class="btn btn-primary" onclick="myFunction()"><i class="fa fa-trash"></i></a>
                                        </div>
        
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                </div>
            </div>
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
