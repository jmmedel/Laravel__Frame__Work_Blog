@extends('layouts.admin')

@section('title') Admin Edit Products @endsection


@section('content')
    <div class="class content">
           
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-light">
                                        Edit Products
                                    </div>
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li> 
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('admineditProuctPost',$product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">


                                       

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="normal-input" class="form-control-label">Thumbnail</label>
                                                    <input type="file" name="thumbnail" id="normal-input" class="form-control" placeholder="Post Title">
                                                </div>
                                                <img src="{{ asset($product->thumbnail) }}" width="100" alt"">
                                            </div>
                                          
                                        </div>
                                        

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="normal-input" class="form-control-label">Title</label>
                                                    <input  name="title" value="{{ $product->title }}" id="normal-input" class="form-control" placeholder="Title">
                                                </div>
                                           </div>
                                            
                                        </div>


                                        <div class="row mt-4">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="placeholder-input" class="form-control-label">Description</label>
                                                    <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Product Description">{{ $product->description }}</textarea>
                                                </div>
                                            </div>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="normal-input" class="form-control-label">Prices</label>
                                                    <input  name="price" value="{{ $product->price }}" id="normal-input" class="form-control" placeholder="10.00">
                                                </div>
                                           </div>
                                            
                                        </div>
                                        
                                        
                                        <button  class="btn btn-success"type= "submit">Edit Products</button>
                                     
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        
                       
                    </div>
    </div>
@endsection