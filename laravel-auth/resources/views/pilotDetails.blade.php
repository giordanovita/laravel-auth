@extends('layouts.app')


@section('content')

    <main>
        <div class="container ">

                <div class="row">

                    <div class="col-sm-12">
                    <div class="card text-center">
                    <div class="card-body  bg-dark text-light">
                            <h4 class="card-title">{{ $pilot -> name}} {{ $pilot -> lastname}}</h4>
                            <h5 class="card-title">Data di nascita: {{ $pilot -> date_of_birth}}</h5>
                            <h5 class="card-title">Provenienza: {{ $pilot -> nationality}}</h5>
                            
                            <h6 class="card-text"> 
                                Tutte le macchine guidate da {{ $pilot -> name}} {{ $pilot -> lastname}}:
                            </h6>

                            <ul class="col-sm-12" >

                                @foreach ($pilot -> cars as $car)
                    
                                        <li class="border mt-3 p-2">
                                            <h4>
                                                Casa costruttrice:
                                            </h4>
                            
                                            <h5>
                                                {{$car -> brand -> name}},  
                                                <br>
                                                {{$car -> brand -> nationality}}
                                            </h5>
                            
                            
                                            <h4>
                                                Dettagli auto:
                                            </h4>
                                            <h5>  
                                                {{ $car -> name}} -
                                                {{ $car -> model}}
                                            </h5>
                                        </li>
                                @endforeach
                            </ul>
                            
                            <a href="{{route('carsList')}}" class=" btn btn-primary p-3 text-center mt-3">Torna alle auto</a>
                    </div>
                    </div>
                </div>
            </div>

       

        </div>
     
        
    </main>
    
@endsection