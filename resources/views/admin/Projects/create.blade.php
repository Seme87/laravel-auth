@extends('layouts.admin')

@section('content')
    
    <div class="container">
        <h1>Crea Project</h1>
        
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
           <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Contenuto</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Inserisci il contenuto"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
  

@endsection