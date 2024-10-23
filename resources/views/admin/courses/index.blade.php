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
