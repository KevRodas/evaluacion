@extends('layouts.app')

@section('content')
  <div class="container pt-4 p-3">
    <div class="col-md-8 mx-auto">
      <div class="card card-body text-center">
        <p>Este es su API Token, cópielo antes de salir de esta página.</p>
        <p class="text-info">{{ $token->plainTextToken }}</p>
      </div>
    </div>
  </div>
@endsection
