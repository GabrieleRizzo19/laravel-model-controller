@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="card col-4">
                    <div class="card-body">
                        <h4 class="card-title"> {{ $movie->title }} </h4>
                        <h5 class="card-subtitle mb-2 text-body-secondary"> {{ $movie->original_title }} </h6>
                        <p><strong>Nazionalità:</strong> {{ $movie->nationality }} </p>
                        <p><strong>Data:</strong> {{ $movie->date }} </p>
                        <p><strong>Voto:</strong> {{ $movie->vote }} </p>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>



@endsection