@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Editar nuevo contacto</div>

          <div class="card-body">
            <div class="d-flex justify-content-center mb-4">
              <img class="profile-picture"
                src="{{ asset($contact->profile_picture) }}">
            </div>
            <form method="POST"
              action="{{ route('contacts.update', $contact->id) }}"
              enctype="multipart/form-data">
              @csrf
              @method("PUT")
              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">Name</label>

                <div class="col-md-6">
                  <input value="{{ old('name') ?? $contact->name }}" id="name"
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" autocomplete="name" autofocus>


                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Número de Telefono</label>

                <div class="col-md-6">
                  <input
                    value="{{ old('phone_number') ?? $contact->phone_number }}"
                    id="phone_number" type="tel"
                    class="@error('phone_number') is-invalid @enderror form-control"
                    name="phone_number" autocomplete="phone_number">

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-6">
                  <input id="email" type="text"
                    class="@error('email') is-invalid @enderror form-control"
                    name="email" value="{{ old('email') ?? $contact->email }}"
                    autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Edad</label>

                <div class="col-md-6">
                  <input value="{{ old('age') ?? $contact->age }}" id="age"
                    type="tel"
                    class="@error('age') is-invalid @enderror form-control"
                    name="age" autocomplete="age">

                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
               <div>
              <div class="row mb-3">
                <label for="lugar de contacto"
                  class="col-md-4 col-form-label text-md-end">Lugar de Concacto</label>

                <div class="col-md-6">
                  <input value="{{ old('lugar de contacto') }}" id="lugar de contacto" type="text"
                    class="form-control @error('lugar de contacto') is-invalid @enderror"
                    name="lugar de contacto" autocomplete="lugar de contacto" autofocus>


                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              </div>  

              <div class="row mb-3">
                <label for="age"
                  class="col-md-4 col-form-label text-md-end">Fotografia</label>

                <div class="col-md-6">
                  <input id="profile_picture" type="file"
                    class="@error('profile_picture') is-invalid @enderror form-control"
                    name="profile_picture">

                  @error('profile_picture')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
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
