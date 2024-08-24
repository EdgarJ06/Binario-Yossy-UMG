@extends('layout.app')

@section('title', 'Binario-Texto')

@section('content')
    <div class="card-body">
        <div class="mb-3">
            <form action="{{route('binarioTexto')}}" method="POST">
                @csrf
                <label for="basic-url" class="form-label">Ingresa el contenido binario: </label>
                <div class="input-group">

                    <textarea class="form-control" placeholder="0010001 0010010" id="binario" name="binario" style="height: 150px"></textarea></div>
                <br>
                <button type="submit" class="btn btn-secondary">Convertir Binario</button>
            </form>
            @if (isset($resultado))
                <br>
                <h5 class="card-title"> Su conversion es: </h5>
                <textarea class="form-control" style="height: 80px">{{$resultado }}</textarea>
            @else

            @endif
        </div>
    </div>
@endsection
