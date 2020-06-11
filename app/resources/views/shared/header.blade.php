<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boolean</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="main-header">
      <nav class="navbar">
        <a href="{{ route('static-page.home')}}" class="navbar-brand">
          Boolean
        </a>

        <ul class="main-nav">
          <li><a href="{{ route('static-page.home')}}">Home</a></li>
          <li><a href="{{route('student.index')}}">Dopo il Corso</a></li>
          <li><a href="#">Corso</a></li>
          <li><a href="#">Lezione gratuita</a></li>
          <li><a href="#">Assumi i nostri studenti</a></li>
        </ul>
      </nav>
    </header> <!-- main-header -->
