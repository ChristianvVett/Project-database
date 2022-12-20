<x-layout>

  <x-slot name="title">Viaggi</x-slot>

    <h1 class="text-center">I nostri viaggi</h1>

    <div class="container mt-5">
        <div class="row">
                @foreach($trips as $trip)
                  <x-cards
                  img="{{$trip['img']}}"
                  name="{{$trip['name']}}"
                  id="{{$trip['id']}}"                 
                  />
                @endforeach
        </div>
    </div>
  </x-layout>