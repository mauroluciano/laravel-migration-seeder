@extends('layouts.app')

@section('main-content')


  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <section class="container mt-5">

        @forelse($trains as $train)
          <p>
            <strong>ID treno</strong>: {{ $train->id }} <br>
            <strong>Compagnia</strong>: {{ $train->agency }} <br>
            <strong>Carrozza</strong>: {{ $train->coach }}
          </p>
          <hr>
        @empty
          <h2>Non ci sono risultati</h2>
        @endforelse
      </section>
    
  </body>
  </html>
  @endsection