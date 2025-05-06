@extends('layouts.app')

@section('content')
    <h1>{{ $user?->name ?? 'Гость' }}, добро пожаловать!</h1>

    @foreach($projects as $project)
        <div class="project">
            <h2>{{ $project->title }}</h2>
        </div>
    @endforeach
@endsection
