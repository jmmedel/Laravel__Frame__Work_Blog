
@extends('layouts.admin')

@section('title') New post @endsection

@section('content')
    <div class="class content">
           
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-light">
                                        New Forms
                                    </div>
        
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="normal-input" class="form-control-label">Title</label>
                                                    <input id="normal-input" class="form-control" value="Post Title">
                                                </div>
                                            </div>
        
                                          
                                        </div>
        
                                        <div class="row mt-4">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="placeholder-input" class="form-control-label">Placeholder</label>
                                                    <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Post contents"></textarea>
                                                </div>
                                            </div>
        
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="required-input" class="require">Required</label>
                                                    <input id="required-input" class="form-control" value="Input value">
                                                </div>
                                            </div>
        
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Static</label>
                                                    <p class="form-control-plaintext">email@example.com</p>
                                                </div>
                                            </div>
                                        </div>
        
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
        
                       
                    </div>
    </div>
@endsection