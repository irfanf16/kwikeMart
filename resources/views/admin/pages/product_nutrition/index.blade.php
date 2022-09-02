@extends('admin.layout.master')
@section('content')
<style>
    .form-control{
        border: transparent!important;
    }
    .form-control:focus{
        border: 1px solid blue!important;
    }
</style>

    <div class="page-content">
        <div class="main-wrapper">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-5">
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="float-lg-end">
                                </div>
                            </div>
                        </div>
                        <h5>Add New Product Nutrition</h5>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <label>Product Title</label><p>{{ $product->title }}</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        @if(isset($nutritions) && sizeof($nutritions) > 0)
                        <table class="table table-bordered">
                            <tr>
                                <th>Typical Values</th>
                                <th>Per 100g of Product</th>
                                <th>% RI Per 100g</th>
                                <th>Action</th>
                            </tr>
                            @foreach($nutritions as $nutrition)
                            <tr>
                                <form action="{{route('nutrition.store')}}" method="post" >
                                    @csrf
                                    
                                    <td>
                                        <input name="product_id" type="hidden" value="{{ $product->id }}">
                                        <input name="typical_values" type="hidden" value="{{ $nutrition->typical_values }}" class="form-control" required>
                                        {{ $nutrition->typical_values }}
                                    </td>
                                    
                                    <td>
                                        <input
                                        name="per_100g_of_product"
                                        type="text" 
                                        value="{{ $product_nutritions->where('typical_values',$nutrition->typical_values)->where('product_id',$product->id)->first()->per_100g_of_product ?? "" }}"
                                        class="form-control" 
                                        required
                                        >
                                    </td>
                                    
                                    <td>
                                    <input 
                                    name="ri_per_100g"
                                    type="text"
                                    value="{{ $product_nutritions->where('typical_values',$nutrition->typical_values)->where('product_id',$product->id)->first()->ri_per_100g ?? "" }}"
                                    class="form-control" 
                                    required
                                    >
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        </form>&nbsp;
                                        @if($product_nutritions->where('typical_values',$nutrition->typical_values)->where('product_id',$product->id)->first() != Null)
                                        <form action="{{ route('nutrition.destroy') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $product_nutritions->where('typical_values',$nutrition->typical_values)->where('product_id',$product->id)->first()->id }}" name="id">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
