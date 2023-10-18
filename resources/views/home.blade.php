@extends('layouts.app')

@section('main-content')
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
@endsection