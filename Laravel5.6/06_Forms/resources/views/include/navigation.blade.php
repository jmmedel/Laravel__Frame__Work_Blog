
<div class="top-right links">
   
        <a {{ Request::route()-> getName()== 'welcome' ? "style=color:red;" : "" }} href="{{ route('welcome') }}">Home</a>
        <a href="#">Login</a>
        <a href="#">Register</a>
        <a {{ Request::route()-> getName()== 'about' ? "style=color:red;" : "" }}href="{{ route('about') }}">About</a>
</div>
