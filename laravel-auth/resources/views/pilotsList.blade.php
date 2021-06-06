@extends('layouts.app')
@section('content')

    <main>
        <div class="container">
            <h2 class="text-center cars-title">Tutti i piloti:</h2>
            <div class="row">

                        
                <div class="grid-cont">
                    @foreach ($pilots as $pilot)


                        <div class="row  mt-3">
                            <div class="col-sm-12 ">
                            <div class="card">
                                <div class="card-body">
                                        <h5 class="card-title">Pilota:</h5>

                                        <div class="icons-actions">
                                            <a href="{{route('edit', $pilot -> id)}}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{route('delete', $pilot -> id)}}">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>


                                        <p class="card-text"> {{$pilot  -> name}}, <br> 
                                                            {{$pilot  -> lastname}}
                                        </p>
                            </div>
                        </div>
                    </div>
                 </div>
               @endforeach
            </div>
        </div>
    </main>
    
@endsection




