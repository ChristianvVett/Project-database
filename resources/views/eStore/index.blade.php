<x-layout>
    <div class="container">
        <div class="row">           
                @foreach ($stores as $store)
            <div class="col-12 col-md-4 mb-2">
                <div class="card" style="width: 18rem;">                     
                    <img src="{{Storage::url($store->image)}}" class="card-img-top" alt="{{$store->name}}">                     
                    <div class="card-body">
                      <h5 class="card-title">{{$store->name}}</h5>

                      <a href="{{route('showElectronicStore',['store'=>$store])}}" class="btn btn-primary">Dettaglio negozio</a>

                      @if($store->user)

                      @if(Auth::user()->id == $store->user->id)
                      <a href="{{route('editElectronicStore',['store'=>$store])}}" class="btn btn-warning">Modifica negozio</a>
                      <form method="POST" action="{{route('deleteElectronicStore', compact('store'))}}">

                        @method('delete')

                        @csrf

                        <button type="submit" class="btn btn-danger">Cancella</button>
                      </form>

                      @elseif(Auth::user()->id == 1)
                      <a href="{{route('editElectronicStore',['store'=>$store])}}" class="btn btn-warning">Modifica negozio</a>
                      <form method="POST" action="{{route('deleteElectronicStore', compact('store'))}}">

                          @method('delete')

                          @csrf

                          <button type="submit" class="btn btn-danger">Cancella</button>
                      </form>

                      @endif                  
                    @endif
                    </div>                 
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>