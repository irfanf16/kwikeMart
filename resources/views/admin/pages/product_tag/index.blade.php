@extends('admin.layout.master')
@section('content')
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
                        <h5>Add New Product Tag</h5>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <label>Product Title</label><p>{{ $product->title }}</p>
                        @if(isset($product_tags) && $product_tags->count() > 0)
                        <div class="row">
                                @foreach($product_tags as $product_tag)
                                    <div class="col-1">
                                        <img src="{{ asset( 'storage/app/public/images/'.$product_tag->tag->icon ?? "" ) }}" class="img-fluid" width="120">
                                        <form action="{{ route('tag.destroy') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product_tag->id }}">
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                
                @if(isset($tags) && sizeof($tags) > 0)
                    <div class="card">
                        <div class="card-body">
                            @foreach($tags as $tag)
                                @if( $product_tags->where('product_id',$product->id)->where('tag_id',$tag->id)->first() )
                                @else
                                    <form action="{{ route('tag.store') }}" method="post">
                                        @csrf
                                        
                                        <div class="row m-2">
                                            <div class="col-md-3 col-3">
                                                <input name="product_id" type="hidden" value="{{ $product->id }}">
                                                <input name="tag_id" type="hidden" value="{{ $tag->id }}">
                                                {{ $tag->name }}
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <img src="{{ asset('storage/app/public/images/'.$tag->icon) }}" class="img-fluid" width="120">
                                            </div>
                                            <div class="col-md-3 col-3"></div>
                                            <div class="col-md-3 col-3">
                                                <button type="submit" class="btn btn-primary">Add Product Tag</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                                @endforeach

                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
