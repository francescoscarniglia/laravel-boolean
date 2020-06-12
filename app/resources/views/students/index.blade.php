@extends('layouts.main')

@section('main-content')

<h1>Studenti.</h1>

<div class="students">
  @foreach($students as $student)
    <a href="{{route ('student.show', ['id' => $student['id']])}}" class="student">
      <header>
        <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
        <div class="info">
          <h3>{{ $student['nome'] }} ( {{ $student['eta'] }} anni)</h3>
          <h4>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}}</h4>
        </div>{{-- info --}}
      </header>
      <p>
        {{ $student['descrizione'] }}
      </p>{{-- description --}}
    </a>
  @endforeach
</div>


@endsection
