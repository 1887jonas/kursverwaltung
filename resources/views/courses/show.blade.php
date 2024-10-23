@extends('layouts.app')

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p>Datum: {{ $course->date }}</p>
    <p>Zeit: {{ $course->time }}</p>
    <p>Ort: {{ $course->location }}</p>
    <p>Verfügbare Plätze: {{ $course->available_seats }}</p>

    <h2>Buche einen platz</h2>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ url('/courses/' . $course->id . '/book') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Telefon:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <button type="submit">Verbindlich buchen</button>
    </form>
@endsection
