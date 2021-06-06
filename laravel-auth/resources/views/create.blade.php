@extends('layouts.app')

@section('content')

    <main>

        <div class="container">

            <h2>
                Aggiungi una nuova auto:
            </h2>

            <form method="POST" action="{{route('store')}}">

                @csrf
                @method('POST')
        
                <div class="form-group">
                  
                  <label for="name">Nome</label>
                  <input type="text" class="form-control" name="name"  placeholder="Nome auto">
                  
                </div>

                <div class="form-group">
                  <label for="model">Modello</label>
                  <input type="text" class="form-control" name="model" placeholder="Modello auto">
                </div>

                <div class="form-group">
                    <label for="kW">KW</label>
                    <input type="number" class="form-control" name="kW" placeholder="kW auto">
                </div>

              
                <div class="form-group">
                    <label  for="brand_id">Brand</label>
                    <select  name="brand_id" required>
                        <option  selected disabled >Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{$brand -> id}}">{{$brand -> name}}   ( {{$brand -> nationality}} )</option>
                        @endforeach

                    </select>
                </div>


                <div class="form-group">
                    <label for="pilots_id[]" >Pilots</label>
                    <div class="col-md-6">
                        <select class="form-control" name="pilots_id[]" required multiple>
                            @foreach ($pilots as $pilot)
                                <option value="{{ $pilot -> id }}">
                                    {{ $pilot -> name }}
                                    {{ $pilot -> lastname }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                


                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
        </div>

    </main>
    
@endsection