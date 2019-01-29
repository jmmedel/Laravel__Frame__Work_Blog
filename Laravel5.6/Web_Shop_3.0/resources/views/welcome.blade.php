@extends('layouts.master')

   @section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('img/assets/Mainpage.jpg') }}' ")>
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Tume</h1>
              <span class="subheading"> {{ remove_spaces('Tume blog') }} </span>
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
              <i class="fa fa-comment" aria-hidden="true"></i>  comments| {{ $post->comments->count() }}
              <i class="fa fa-eye" aria-hidden="true"></i>  views| {{ $post->views }}
            </p>

             
          </div>
          <hr>
       
          @endforeach
          {{ $posts->links() }}
          
          
          
          
        </div>

        <!-- Sidebar Widgets Column -->
        <!-- col-md-4 -->
        <div class="col-md-4 ">

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
            <h5 class="card-header">Tags</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6 ">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">JavaSCript React</a>
                    </li>
                    <li>
                      <a href="#">JavaSCript Vue</a>
                    </li>
                    <li>
                      <a href="#">JavaSCript Angular</a>
                    </li>
                    <li>
                      <a href="#">JavaScript</a>
                    </li>

                    <li>
                      <a href="#">.net core</a>
                    </li>

                    <li>
                      <a href="#">Scala</a>
                    </li>

                    

                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Programming Language</a>
                    </li>
                    <li>
                      <a href="#">C</a>
                    </li>
                    <li>
                      <a href="#">C++</a>
                    </li>
                    <li>
                      <a href="#">Java</a>
                    </li>
                    <li>
                      <a href="#">Python</a>
                    </li>
                    <li>
                      <a href="#">Ruby</a>
                    </li>
                    <li>
                      <a href="#">C#</a>
                    </li>
                    <li>
                      <a href="#">VB.net</a>
                    </li>
                    <li>
                      <a href="#">Perl</a>
                    </li>

                    <li>
                      <a href="#">Laravel</a>
                    </li>

                    <li>
                      <a href="#">Django</a>
                    </li>

                    <li>
                      <a href="#">Ruby and rails</a>
                    </li>


                  </ul>
                </div>
              </div>
            </div>
          </div>
           
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Sponsor</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to  and feature the Bootstrap 4 card containers!
            </div>
          </div>
          

          <div class="card my-4">
            <h5 class="card-header">Top Company</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to  and feature the  Bootstrap 4 card containers!
            </div>
          </div>


          <!-- Twiiter page add here -->

           <!-- ======================    Twiiter Widget by john  =========== -->
<div onload="paint()">
    <div>
        <p>Twiiter</p>
    </div>

    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Tume4_PgQe" data-widget-id="343053082919333888">Tweets by kagaya</a>
    <script>
        !function (d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
              if (!d.getElementById(id)) {
                   js = d.createElement(s);
                   js.id = id; js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                 } 
            }(document, "script", "twitter-wjs");
    </script>


    
    
</div>



        </div>
       
      </div>
    </div>

    
  @endsection