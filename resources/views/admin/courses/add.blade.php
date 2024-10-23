@extends('layouts.app')

@section('content')
    <h1>Kursverwaltung</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

<a href="{{ url('/admin/courses/list') }}">Kurse einsehen & verwalten</a><br>
<a href="{{ url('/admin/courses/add') }}">Kurs anlegen</a><br>
<a href="{{ url('/admin/users/list') }}">Benutzer einsehen & verwalten</a><br>
<a href="{{ url('/admin/users/add') }}">Benutzer anlegen</a><br>

<h2>neuen Kurs anlegen</h2>
<form method="POST" action="{{ url('/admin/courses/add') }}">
    @csrf
    <label for="title">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Beschreibung:</label><br>
    <textarea id="description" name="description" rows="4" required></textarea><br><br>

    <label for="date">Datum:</label><br>
    <input type="date" id="date" name="date" required><br><br>

    <label for="time">Zeit:</label><br>
    <input type="time" id="time" name="time" required><br><br>

    <label for="location">Ort:</label><br>
    <input type="text" id="location" name="location" required><br><br>

    <label for="max_participants">max. Teilnehmer:</label><br>
    <input type="number" id="max_participants" name="max_participants" min="1" required><br><br>

    <button type="submit">Kurs anlegen</button>
</form>
