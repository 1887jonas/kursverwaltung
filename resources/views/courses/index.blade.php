@extends('layouts.app')

@section('content')
    <h1>Buchbare Kurse</h1>
    <ul>
        @foreach ($courses as $course)
            <li>
                {{ $course->title }} am {{ $course->date }} in {{ $course->location }} ({{ $course->available_seats }} Plätze frei) - 
                <a href="{{ url('/courses/' . $course->id) }}">Platz buchen</a>
            </li>
        @endforeach
    </ul>
@endsection
