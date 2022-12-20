<x-layout>
    <h1>Dettaglio viaggio</h1>

    <div class="container mt-5">
        <div class="row">
                  <div class="col-12 col-md-4 mb-2">
                    <div class="card" style="width: 18rem;">
                      <img src="{{$trip['img']}}" class="card-img-top" alt="{{$trip['name']}}">
                      <div class="card-body">
                        <h5 class="card-title">{{$trip['name']}}</h5>
                        <p>{{$trip['costo']}}</p>
                        <p>{{$trip['durata']}}</p>
                        
                        <a href="{{route('nostri.viaggi')}}" class="btn btn-primary">Torna indietro</a>
                      </div>
                    </div>
                  </div>
        </div>
    </div>
  </x-layout>