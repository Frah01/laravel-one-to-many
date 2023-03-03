@extends('layouts.admin')
@section('content')
<div class="container back-grey">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-start p-3">
                <a class="btn btn-primary" href="{{route('admin.types.index')}}"><i class="fa-solid fa-arrow-left mx-1"></i><span class="mx-2">Torna alle tue tipologie</span></a>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-8">
            <div class="d-flex  align-items-center">  
                <div class="mt-3 mx-2">
                    <div>
                        <h4 class="p-2">Nome:</h4>
                        <p class="p-2 text-uppercase fw-semibold">{{$type['name']}}</p>
                    </div>
                    <div>
                        <h4 class="p-2 fw-semibold">Slug:</h4> 
                        <p class="p-2 fw-semibold">{{$type['slug']}}</p>  
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