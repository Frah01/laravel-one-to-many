@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Le tue tipologie') }}
    </h2>
    <div class="row justify-content-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2>Aggiungi nuova tipologia</h2>
                        </div>
                        <div>
                            <a href="{{route('admin.types.create')}}" class="btn btn-small btn-primary"><i class="fa-solid fa-plus mx-1"></i><span class="mx-2" >Nuova Tipologia</span></a> 
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
                    <table class="table table-striped mb-0">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tipo</th>
                            <th scope="col" >Slug</th>
                            <th scope="col" class="text-center">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($types as $type)
                            <tr>
                                <td><p class="fw-semibold">{{$type->id}}</p></td>
                                <td><p class="fw-semibold">{{$type->name}}</p></td>
                                <td><p class="fw-semibold">{{$type->slug}}</p></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('admin.types.show', $type->slug)}}" class="btn btn-square btn-sm btn-info m-1" title="Ispeziona"><i class="fa fa-eye" ></i></a>
                                        <a  href="{{route('admin.types.edit', $type->slug)}}" class="btn btn-square btn-sm btn-secondary m-1" title="Modifica"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline-block" method="POST" action="{{route('admin.types.destroy', $type->slug)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-square btn-danger confirm-delete-button m-1" data-title="{{$type->name}}"><i class="fas fa-trash" ></i></button>
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
