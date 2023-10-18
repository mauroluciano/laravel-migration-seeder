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
            <strong>ID treno</strong>: {{ $train->id }}<br>
            <strong>Compagnia</strong>: {{ $train->agency }} <br>
            <strong>Partenza da</strong>: {{ $train->departing_from }} <br>
            <strong>Arrivo a</strong>: {{ $train->going_to }}<br>
            <strong>Orario partenza</strong>: {{ $train->leaving_time }}<br>
            <strong>Orario arrivo:</strong>: {{ $train->arrives_time }}<br>
            <strong>Numero treno</strong>: {{ $train->id_train }}<br>
            <strong>Carrozza</strong>: {{ $train->coach }}<br>
            <strong>In orario</strong>: {{ $train->time==1?'Si': 'No' }} <br>
            <strong>In ritardo</strong>: {{ $train->time==1?'No': 'Si' }}

          </p>
          <hr>
        @empty
          <h2>Non ci sono risultati</h2>
        @endforelse
      </section>
    
  </body>
  </html>
  @endsection