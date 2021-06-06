@extends('layouts.app')

@section('content')

    <main>

        <div class="container">

            <h2>
                Modifica dettagli auto:
            </h2>

            <form method="POST" action="{{route('update', $car -> id)}}">

                @csrf
                @method('POST')
        
                <div class="form-group">
                  
                  <label for="name">Nome</label>
                  <input type="text" class="form-control" name="name" value="{{$car -> name}}" placeholder="Nome auto">
                  
                </div>

                <div class="form-group">
                  <label for="model">Modello</label>
                  <input type="text" class="form-control" name="model"value="{{$car -> model}}" placeholder="Modello auto">
                </div>

                <div class="form-group">
                    <label for="kW">KW</label>
                    <input type="number" class="form-control" name="kW" value="{{$car -> kW}}" placeholder="kW auto">
                </div>


                <div class="form-group">
                    <label  for="brand_id">Brand</label>
                    <select  name="brand_id" required>
                        @foreach ($brands as $brand)
                            <option value="{{$brand -> id}}" 
                                
                                @if ($car -> brand -> id == $brand -> id)
                                    selected
                                @endif
                                
                                >{{$brand -> name}}   ( {{$brand -> nationality}} )</option>
                        
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="pilots_id[]" >Pilots</label>
                    <div class="col-md-6">
                        <select id="pilots_id[]" class="form-control" name="pilots_id[]" required multiple>
                            @foreach ($pilots as $pilot)
                                <option value="{{ $pilot -> id }}"
                                    
                                    @foreach ($car -> pilots as $pil)
                                        
                                        @if ($pil -> id == $pilot -> id)

                                            selected
                                            
                                        @endif

                                    @endforeach

                                    >
                                    {{ $pilot -> name }}
                                    {{ $pilot -> lastname }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
        </div>





    </main>


    
@endsection