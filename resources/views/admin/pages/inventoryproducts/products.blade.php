@extends('admin.layout.master')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <a href="{{route('products.create')}}" class="btn btn-primary" >
                                    Add Product
                                </a>
                            </div>
                        </div>
                        <div class="row mt-5">
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            @if(isset($products) && $products->count() > 0)
                            @php($count = 1)
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Discount Price</th>
                                        <th>Unit</th>
                                        <th>Item Per Unit</th>
                                        <th>Weight</th>
                                        <th>Min. Order</th>
                                        <th>Origin of Country</th>
                                        <th>Manufacturer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>
                                                <img src="{{ asset('storage/app/public/images/'.$product->image) }}" class="img-fluid" width="120">
                                            </td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->discount }}</td>
                                            <td>{{ $product->discount_price }}</td>
                                            <td>{{ $product->unit }}</td>
                                            <td>{{ $product->items_per_unit }}</td>
                                            <td>{{ $product->weight }}</td>
                                            <td>{{ $product->min_order }}</td>
                                            <td>{{ $product->country_of_origin }}</td>
                                            <td>{{ $product->manufacturer }}</td>
                                            <td>
                                                <div style="display: flex;">
                                                    <a href="{{route('nutrition.index',['product'=>$product])}}" class="btn btn-primary">Add Nutritions</a>
                                                    <a href="{{route('tag.index',['product'=>$product])}}" class="btn btn-primary">Add Tags</a>
                                                    <a href="{{ route('edit_products',['product'=>$product]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('products.destroy',['id'=>$product->id]) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                    </tr>
                                    @php($count++)
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Discount Price</th>
                                        <th>Unit</th>
                                        <th>Item Per Unit</th>
                                        <th>Weight</th>
                                        <th>Min. Order</th>
                                        <th>Origin of Country</th>
                                        <th>Manufacturer</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            @else
                            {{__('No Product Found')}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Select Category</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Baby Products</option>
                                <option value="2">Households</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Select Sub Category</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Lotions</option>
                                <option value="2">Cleaning spray</option>
                            </select>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Product Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Add Product Image</label>
                            <input type='file'>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Product Price</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Select Color</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">Red</option>
                                <option value="2">Yellow</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Short Description</label>
                            <textarea type="text" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Long Description</label>
                            <textarea type="text" class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Select Size</label>
                            <select class="form-select shadow-sm" id="autoSizingSelect">
                                <option selected="">Choose...</option>
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                                <option value="4">XL</option>
                                <option value="5">KG</option>
                                <option value="6">HK</option>
                                <option value="7">GRAM</option>
                                <option value="8">UNIT</option>
                            </select>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <label for="formFile" class="form-label">Select Quantity</label>
                            <input type="number" class="form-control">
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
