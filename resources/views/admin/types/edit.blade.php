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
                    <a class="btn btn-primary" href="{{route('admin.types.index')}}"><i class="fa-solid fa-arrow-left mx-1"></i><span class="mx-2">Torna ai tuoi progetti</span></a>
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
                <form action="{{route('admin.types.update', $type->slug)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Nome</p></label>
                        <input type="text" name="name" class="form-control" placeholder="Inserisci la tipologia" value="{{old('name') ?? $type->name}}">   
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success" class="form-control" >Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection