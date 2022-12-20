<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p>{{$product->price}}</p>
                    <p>{{$product->description}}</p>
                    <p>{{$product->id}}</p>
                    <a href="{{route('productWel')}}" class="btn btn-primary">Torna indietro</a>

                </div>

            </div>
        </div>
    </div>
</div>
</x-layout>