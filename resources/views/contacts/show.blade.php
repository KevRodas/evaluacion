@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Imformación del Ususario</div>

          <div class="card-body">

            <div class="d-flex justify-content-center">
              <img class="profile-picture"
                src="{{ Storage::url($contact->profile_picture) }}">
            </div>
            <p>Nombre: {{ $contact->name }}</p>
            <p>Email: <a href="mailto:{{ $contact->email }}">
                {{ $contact->email }}
              </a>
            </p>
            <p>Edad: {{ $contact->age }}</p>
            <p>Nuemro de Telefono: <a href="tel:{{ $contact->phone_number }}">
                {{ $contact->phone_number }}
              </a>
            </p>
            <p>Crear en: {{ $contact->created_at }}</p>
            <p>Ultima Actualización de le información: {{ $contact->updated_at }}</p>

            <div class="d-flex justify-content-center">
              <a href="{{ route('contacts.edit', $contact->id) }}"
                class="btn btn-secondary mb-2 me-2">Editar Ususario</a>
              <form action="{{ route('contacts.destroy', $contact->id) }}"
                method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger mb-2">Borrar Usuario</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
