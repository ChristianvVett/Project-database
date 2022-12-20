<x-layout>

    <h1 class="text-center">I nostri negozi</h1>
    
    <div class="container">
        <div class="row">                          
            <div class="col-12 col-md-4 mb-2">
                <div class="card" style="width: 18rem;">                     
                    <img src="{{Storage::url($store->image)}}" class="card-img-top" alt="{{$store->name}}">                     
                    <div class="card-body">
                      <h5 class="card-title">{{$store->name}}</h5>
                      <p>{{$store->city}}</p>
                      <p>{{$store->description}}</p>
                      {{-- Traversare i modelli --}}
                      {{-- partendo da un oggetto store ho recuperato lo user collegato e di quello user ho preso il suo name --}}
                      @if ($store->user)
                      <p>Inserito da {{$store->user->name}}</p>
                         
                      @else
                      <p>Nessun utente collegato</p>
                          
                      @endif

                     <label>Prodotti venduti</label>
                     {{-- @dd($store->products) --}}

                     @foreach ($store->products as $product)
                     <div>
                        <a href="{{route('productShow', ['id'=>$product->id])}}">{{$product->name}}</a>
                     </div>
                     @endforeach
                     {{-- <p>{{$store->products->name}}</p> --}}
                      
                      <a href="{{route('indexElectronicStore')}}" class="btn btn-primary">Torna indietro</a>
                    </div>                 
                </div>
            </div>           
        </div>
    </div>
</x-layout>