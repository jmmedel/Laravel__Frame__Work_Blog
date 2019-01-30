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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Edit Question</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Questions</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                   <form action="{{ route('questions.update', $question->id) }}" method="post">
                        {{ method_field('PUT') }}
                        @include ("question._form", ['buttonText' => "Update Question"])
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection