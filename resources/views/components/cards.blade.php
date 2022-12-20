<div class="col-12 col-md-4 mb-2">
    <div class="card" style="width: 18rem;">
      <img src="{{$img}}" class="card-img-top" alt="{{$name}}">
      <div class="card-body">
        <h5 class="card-title">{{$name}}</h5>
        
        <a href="{{route('show.viaggio', ['id'=>$id])}}" class="btn btn-primary">Dettaglio</a>
      </div>
    </div>
  </div>