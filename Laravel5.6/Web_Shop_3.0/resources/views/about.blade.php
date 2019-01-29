
@extends('layouts.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/about-bg.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Tume About   </h1>
              <span class="subheading">なぜ　Tumeを開発しようと思ったきっかけは？</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>私たちKOKONYSは情報系の学校に通っています。
各々目指す先は違いますが、皆プログラムを組む際、
なぜエラーが発生するのか、なぜ思った通りの結果が出ないのか、
と手詰まりを覚えたことがあります。</p>
          <p>そんな時、助けてくれたのは自分とは違う作り方、考え方の友人でした。
自分の考え方では、同じ視点からでしか物事を考えにくく、
障害を乗り越えることが難しかったです。</p>
          <p>そこで私たちは同じ情報系を学ぶ同志を集め、
皆で助け合う場を作り、エラーによる有耶無耶を解決しようと
考えたためTumeの作成に取り組みました。</p>
        </div>
      </div>
    </div>

@endsection