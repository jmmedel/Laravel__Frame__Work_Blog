
@extends("layouts.master")
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h2>{{ $post->title }}</h2>
              <span class="meta">Posted by
                <a href="#">{{ $post->user->name }}</a>
                on {{ date_format($post->created_at,'F d, Y')}} 
              </span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
             {!!$post->content!!}
          </div>


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

        </ul>
      </div>
    </div>
  </div>
</div>
 
<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Side Widget</h5>
  <div class="card-body">
    You can put anything you want inside of these side widgets. They are easy to   and feature the new Bootstrap 4 card containers
  </div>
</div>


<div class="card my-4">
  <h5 class="card-header">Side Widget</h5>
  <div class="card-body">
    You can put anything you want inside of these side widgets. They are easy to  and feature the new Bootstrap 4 card containers!
  </div>
</div>


<!-- Twiiter page add here -->

 <!-- ======================    Twiiter Widget by john  =========== -->
<div onload="paint()">
<div>
<p>Twiiter</p>
</div>

<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/hikakin" data-widget-id="343053082919333888">Tweets by kagaya</a>
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
    </article>
    
   
    </div class="container">

        <div class="col-lg-8 col-md-10 mx-auto">
        <div class="comments">
         
          <hr>
          <h2>Comments</h2>
          <hr>
          @foreach($post->comments as $comment)
          <p>{{ $comment->content }}</p>
          </br>
          
          <p><small>{{ $comment->user->name }} on {{ date_format($comment->created_at,'F d,Y')}} </small></p>
          <hr>
          @endforeach

          @if(Auth::check())

            <form action="{{route('UserController')}}" method="POST">
              @csrf
                  <div class="form-group">
                        <textarea class="form-control"  placeholder="Comment...." name="comment" id="" col"30" rows="10"> </textarea>
                        <input type="hidden" name="post" value="{{ $post->id }}" > 
                  </div>
                  <div class="form group">
                    <button class="btn btn-primary" type="submit">Make Comment </button>
                  </div>
            </form>

          @endif
        </div>
       
      </div>

      </div>

@endsection   
  