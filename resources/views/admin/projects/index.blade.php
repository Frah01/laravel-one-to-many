@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('I tuoi Progetti') }}
    </h2>
    <div class="row justify-content-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Aggiungi nuovo progetto</h2>
                        </div>
                        <div>
                            <a href="{{route('admin.projects.create')}}" class="btn btn-small btn-primary"><i class="fa-solid fa-plus mx-1"></i><span class="mx-2" >Nuovo Progetto</span></a> 
                        </div>
                    </div>
            </div>
            @if(session('message'))
            <div class="alert alert-success my-3" >
                {{session('message')}}
            </div>
            @endif
        <div class="col">
            <div class="card my-3">
                <div class="card-header">{{ __('User Projects') }}</div>
                <div class="card-body p-0">
                    <table class="table mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Contenuto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo</th>
                            <th scope="col" class="text-center">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                              <th scope="row">{{$project['id']}}</th>
                              <td><p class="fw-semibold">{{$project['title']}}</p></td>
                              <td><p class="fw-semibold">{{$project['content']}}</p></td>
                              <td><p class="fw-semibold">{{$project['slug']}}</p></td>
                              <td><p class="fw-semibold">{{$project->type ? $project->type->name : 'Senza Tipo'}}</p></td>
                              <td>
                                <div class="d-flex">
                                    <a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-square btn-sm btn-info m-1" title="Ispeziona"><i class="fa fa-eye" ></i></a>
                                    <a  href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-square btn-sm btn-secondary m-1" title="Modifica"><i class="fa fa-edit"></i></a>
                                    <form class="d-inline-block" method="POST" action="{{route('admin.projects.destroy', ['project' => $project['slug']])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-square btn-danger confirm-delete-button m-1" data-title="{{$project->title}}"><i class="fas fa-trash" ></i></button>
                                    </form>
                                </div>
                              </td>
                            </tr>    
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.modal_delete')
@endsection
