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
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h1>Editing answer for question: <strong>{{ $question->title }}</strong></h1>
                    </div>
                    <hr>
                    <form action="{{ route('questions.answers.update', [$question->id, $answer->id]) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="7" name="body">{{ old('body', $answer->body) }}</textarea>
                            @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 