@extends('layouts.admin')
@section('content')
<div class="container back-grey">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-start p-3">
                <a class="btn btn-primary" href="{{route('admin.projects.index')}}"><i class="fa-solid fa-arrow-left mx-1"></i><span class="mx-2">Torna ai tuoi progetti</span></a>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-8">
            <div class="d-flex  align-items-center">  
                <div class="mt-3 mx-2">
                    <div>
                        <h4 class="p-2">Titolo:</h4>
                        <p class="p-2 text-uppercase fw-semibold">{{$project['title']}}</p>
                    </div>
                    <div>
                        <h4 class="p-2 fw-semibold">Contenuto:</h4> 
                        <p class="p-2 fw-semibold">{{$project['content']}}</p>  
                    </div>
                     <div>
                        <h4 class="p-2 fw-semibold">Tipo:</h4> 
                        <p class="p-2 fw-semibold">{{$project->type ? $project->type->name : 'Senza Tipo'}}</p>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-4">
            <div class="mt-5">
        
            </div>
        </div>
    </div>
</div>
@endsection