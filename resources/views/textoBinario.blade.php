@extends('layout.app')

@section('title', 'Textp-Binario')

@section('content')
    <div class="card-body">
        <div class="mb-3">
            <form action="{{route('textoBinario')}}" method="POST">
                @csrf
                <label for="basic-url" class="form-label">Ingresa el texto: </label>
                <div class="input-group">
                    <input type="text" id="text" name="text" class="form-control" placeholder="Hola..">
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Convertir Texto</button>
            </form>
            @if (isset($resultado))
                <br>
                <h5 class="card-title"> Su conversion es: </h5>
                <textarea class="form-control" style="height: 150px">{{$resultado }}</textarea>
            @else

            @endif
        </div>
    </div>
@endsection
