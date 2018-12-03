@extends('layouts.master')

   @section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('img/assets/Mainpage.jpg') }}' ")>
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Kagaya Blog</h1>
              <span class="subheading"> {{ remove_spaces('Personal blog') }} </span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">

       
     
      
       
        <!--class="col-lg-8 col-md-10 mx-auto" -->
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
          <div class="post-preview">
            <a href="{{ route('singlePost',$post->id) }}">
              <h2 class="post-title">
                {{ $post->title }}
              </h2>
            
            </a>
            <p class="post-meta">Posted by
                <a href="#">{{ $post->user->name }}</a>
              on {{ date_format($post->created_at,'F d, Y')}}
              <i class="fa fa-comment" aria-hidden="true"></i>  | {{ $post->comments->count() }}
            </p>

             
          </div>
          <hr>
       
          @endforeach
          {{ $posts->links() }}
          
          
          
          
        </div>

        <!-- Sidebar Widgets Column -->
        <!-- col-md-4 -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
           
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>
          

          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>



        </div>
       
      </div>
    </div>

    
  @endsection