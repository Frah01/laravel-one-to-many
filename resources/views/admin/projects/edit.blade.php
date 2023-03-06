@extends('layouts.admin')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 text-center my-3">
               <h4>Modifica il tuo progetto</h4>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col">
                <div class="d-flex justify-content-start py-3">
                    <a class="btn btn-primary" href="{{route('admin.projects.index')}}"><i class="fa-solid fa-arrow-left mx-1"></i><span class="mx-2">Torna ai tuoi progetti</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-6">
                <div class="container" >
                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                            <div class="alert alert-danger my-3" >
                                @foreach ($errors->all() as $error)
                                <ul class="list-unstyled mb-0" >
                                    <li>{{$error}}</li>
                                </ul>
                                @endforeach
                            </div>
                             @endif
                        </div>
                    </div>
                </div>
                <form action="{{route('admin.projects.update', $project->slug)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Titolo</p></label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{old('title') ?? $project->title}}">   
                    </div>
                        <label for="floatingTextarea2"><p class="fw-semibold mt-1">Descrizione</p></label>
                        <textarea name="description" class="form-control" placeholder="Descrizione"  rows="10">{{old('content') ?? $project->content}}</textarea>
                        <div class="form-group">
                            <label class="control-label"><p class="fw-semibold mt-1">Categorie</p></label>
                                <select class="form-control" name="type_id" id="type_id">
                                    @foreach($types as $type)
                                    <option value="{{$type->id}}" {{$type->id == old('type_id', $project->type_id) ? 'selected' : " "}}  >{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success" class="form-control" >Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection