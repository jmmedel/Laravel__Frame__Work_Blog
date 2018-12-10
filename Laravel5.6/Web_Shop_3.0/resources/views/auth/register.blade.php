@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/test.css" rel="stylesheet" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="login-body">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
                <li><a href="login" data-target="#login-access" data-toggle="tab">Login</a></li>
                <li class="active"><a href="register" data-target="#register" data-toggle="tab" class="active">Register</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">

                <div id="register-access" name="register-access" class="tab-pane fade active in">
                    <h2><i class="glyphicon glyphicon-check"></i> Register</h2>
                    <form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
                        @csrf
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
                        <div class="form-group">
                            <button type="submit" name="password-reset-button" id="submit" tabindex="7" class="btn btn-lg btn-success">Register</button>
                        </div>
                        <div class="form-group row mb-0">

                        </div>
                    </form>
                </div>
            </div>
		</section>
	</article>
</div>

@endsection
