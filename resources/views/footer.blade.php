@section('footer')
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b><a href="/">{{ config('app.name') }} </a></b><small><i>v</i></small>1.0.0
      <sub><b><a target="_blank" href="https://laravel.com/">Laravel</a></b><i> v</i>{{ Illuminate\Foundation\Application::VERSION }} & <b><a target="_blank" href="https://www.php.net">PHP<a></b> <i> v</i>{{ PHP_VERSION }}</sub>
  </div>
  <strong>Copyright© 2020 - {{date("Y");}}</strong> Derechos reservados
</footer>
@endsection
