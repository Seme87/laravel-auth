@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <div class="mt-4">
            {{ $project->description }}
        </div>
    </div>
  

@endsection