<x-layout>
    <div class="container my-5">
        <div class="row">           
                @foreach ($products as $product)
            <div class="col-12 col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                    @if ($product->image)  
                    <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="{{$product->name}}">                     
                    @else
                    <img src="/standardImage/default.jpg" class="card-img-top" alt="{{$product->name}}">                      
                    @endif

                    <div class="card-body">
                      <h5 class="card-title">{{$product->name}}</h5>
                      <p>{{$product->price}}</p>
                      <p>{{$product->description}}</p>
                      <p>{{$product->id}}</p>                  
                      <a href="{{route('productShow', ['id'=>$product->id])}}" class="btn btn-primary">Dettaglio</a>
                    </div>                 
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>