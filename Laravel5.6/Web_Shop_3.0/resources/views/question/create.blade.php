
@extends('layouts.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/about-bg.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>About Me pages need to edit </h1>
              <span class="subheading">This is what I do.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Question</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Questions</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                   <form action="{{ route('questions.store') }}" method="post">
                        @include ("question._form", ['buttonText' => "Ask Question"])
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection