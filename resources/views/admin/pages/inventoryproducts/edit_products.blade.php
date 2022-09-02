@extends('admin.layout.master')
@section('content')

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Select Category</label>
                                <select class="form-select shadow-sm form-control" id="autoSizingSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">Baby Products</option>
                                    <option value="2">Households</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Select Sub Category</label>
                                <select class="form-select shadow-sm form-control" id="autoSizingSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">Lotions</option>
                                    <option value="2">Cleaning spray</option>
                                </select>
                            </div>

                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Product Name</label>
                                <input type="text" value="{{$product->title ?? ""}}" class="form-control">
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Add Product Image</label>
                                <input type='file' class="form-control">
                            </div>

                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Product Price</label>
                                <input type="text" value="{{$product->price ?? ""}}" class="form-control">
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Select Color</label>
                                <select class="form-select shadow-sm form-control" id="autoSizingSelect">
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
                                <select class="form-select shadow-sm form-control" id="autoSizingSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">S</option>
                                    <option value="2">M</option>
                                    <option value="2">L</option>
                                    <option value="2">XL</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <label for="formFile" class="form-label">Select Quantity</label>
                                <select class="form-select shadow-sm form-control" id="autoSizingSelect">
                                    <option selected="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                    <option value="2">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
