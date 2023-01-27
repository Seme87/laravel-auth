@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <h1>Modifica: {{ 'title' }}</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mt-4">
           <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{ old('title', $project->title) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Contenuto</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Inserisci il contenuto">{{ old('description', $project->description) }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
  

@endsection