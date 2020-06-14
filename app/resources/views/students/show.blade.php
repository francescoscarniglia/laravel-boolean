@extends('layouts.main')

@section('main-content')

<header>
  <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
  <div class="info">
    <h3>{{ $student['nome'] }} <small>( {{ $student['eta'] }} anni)</small></h3>
    <h4>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}}</h4>
  </div>{{-- info --}}
</header>
<p>
  {{ $student['descrizione'] }}
</p>{{-- description --}}

@endsection
