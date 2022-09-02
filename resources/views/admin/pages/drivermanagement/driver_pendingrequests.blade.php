@extends('admin.layout.master')
@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <!--<a href="#" class="btn mb-3" download style="background-color: gray; color: white;">Excel</a>-->
                        <h5 class="card-title">Driver Pending Request's</h5>
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
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Amir Irwin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="card shadow">
                                    <div class="text-center">
                                        <img src="assets/images/avatar.png" class="card-img-top" style="width: 150px; height: 150px;" alt="...">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title mt-1">Amir Irwin</h5>
                                        <p class="card-text"><i class="fas fa-project-diagram"></i> Points:160</p>
                                    </div>
                                    <hr>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Total Orders <span class="float-lg-end">16</span> </li>
                                        <li class="list-group-item">Cancel Orders <span class="float-lg-end">0</span> </li>
                                        <li class="list-group-item">Total Earnings <span class="float-lg-end">£ 269.16</span> </li>
                                        <li class="list-group-item">Last Month Earnings <span class="float-lg-end">£ 9.96</span> </li>
                                    </ul>
                                    <hr>
                                    <div class="card-body text-center">
                                        <span class="badge bg-success">Inactive</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="card shadow">
                                    <div class="card-header">
                                        About Amir Irwin
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fas fa-envelope"></i> Email <br> demo@gmail.com</li>
                                        <li class="list-group-item"><i class="fas fa-phone"></i> Phone <br> +921234567</li>
                                        <li class="list-group-item"><i class="fas fa-map-pin"></i> Location <br> Thokar Niaz baig</li>
                                        <li class="list-group-item"><i class="fas fa-image"></i> Licence</li>
                                        <div class="text-center mb-1 mt-1">
                                            <img src="assets/images/default.jpg" class="card-img-top" style="width: 300px; height: 310px;" alt="...">
                                        </div>

                                    </ul>
                                </div>
                            </div>
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
