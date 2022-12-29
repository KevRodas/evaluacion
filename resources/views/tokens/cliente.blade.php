@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Crear Cliente</div>

          <div class="card-body">
            <form method="POST" action="">
              
              <div class="row mb-3">
                <label for="name1"
                  class="col-md-4 col-form-label text-md-end">Nombre</label>

                <div class="col-md-6">
                  <input value="{{ old('name1') }}" id="name1" type="text"
                    class="form-control @error('name1') is-invalid @enderror"
                    name="name1" autocomplete="name1" autofocus>


                  @error('name1')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>


              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Enviar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
