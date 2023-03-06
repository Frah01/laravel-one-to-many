@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12">
                <div class="my-3">
                    <h2>Aggiungi nuovo progetto</h2>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger my-3" >
                @foreach ($errors->all() as $error)
                <ul class="list-unstyled mb-0" >
                    <li>{{$error}}</li>
                </ul>
                @endforeach
            </div>
             @endif
            <div class="col-12">
                <form action="{{route('admin.projects.store')}}" method="POST">
                @csrf  
                <div class="form-group" >
                    <label for=""><p class="fw-semibold">Titolo</p></label>
                    <input type="text" class="form-control" placeholder="Titolo.." id="title" name="title">
                </div>
                <div class="form-group" >
                    <label for=""><p class="fw-semibold mt-2">Contenuto</p></label>
                    <textarea type="text" class="form-control" placeholder="Contenuto.." id="content" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label"><p class="fw-semibold mt-1">Categorie</p></label>
                        <select class="form-control" name="type_id" id="type_id">
                            @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group my-3" >
                    <button type="submit" class="btn btn-sm btn-success" >Aggiungi Progetto</button>
                </div>
            </form>
            </div>
    </div>
</div>
@endsection