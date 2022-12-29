@extends('layouts.app')

@section('content')
  <div class="container pt-4 p-3">
    <div class="col-md-4 mx-auto">
      <div class="card card-body text-center">
        <p>Su prueba gratuita ha finalizado</p>
        <p>Actualizar a la versión pro <a href="{{ route('checkout') }}">here</a></p>
      </div>
    </div>
  </div>
@endsection
