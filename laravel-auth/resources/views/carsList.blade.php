@extends('layouts.app')

@section('content')
    

    <main>
        <div class="container">
            <h2 class="text-center cars-title">Tutte le auto:</h2>
            
            <div class="grid-cont">
                @foreach ($cars as $car)


                    <div class="row  mt-3">
                        <div class="col-sm-12 ">
                        <div class="card">
                            <div class="card-body">
                                    <h5 class="card-title">Brand:</h5>

                                    <div class="icons-actions">
                                        <a href="{{route('edit', $car -> id)}}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{route('delete', $car -> id)}}">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>


                                    <p class="card-text"> {{$car -> brand -> name}}, <br> 
                                                          {{$car -> brand -> nationality}}
                                    </p>

                                    <h5 class="card-title">Dettagli auto:</h5>
                                    <p class="card-text"> 
                                        {{ $car -> name}} - {{ $car -> model}}
                                    </p>


                                    <div class="dropdown show">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Piloti che hanno guidato quest'auto
                                        </a>
                                    
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        
                                            @foreach ($car -> pilots as $pilot)
                                                <a class="dropdown-item" href="{{route('pilotDetails', $pilot -> id)}}">
                                                    {{ $pilot -> name}} {{ $pilot -> lastname}}
                                                </a>
                                            @endforeach

                                        </div>
                                    </div>
                            </div>
                         </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

    </main>




@endsection