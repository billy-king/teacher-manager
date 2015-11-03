@extends("layouts/_default")

@section('navbar')
  @include('partials/_navbar')
@stop

@section('content')

  <div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h1>Navbar example</h1>
      <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
      <p>To see the difference between static and fixed top navbars, just scroll.</p>
      <p>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
      </p>
    </div>

  </div> <!-- /container -->

@stop

@section("footer")
  @include('partials/_footer')
@stop
  
@section("js_include")
  {{-- 檔案上傳js --}}
   <script src="josh-ui/file_create.js"></script>
@stop   
 




