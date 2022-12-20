<x-layout>
    <div class="container mt-5">
        <div class="row">
            @foreach($users as $user)
            <div class="col-12 col-md4 mb-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$user->name}}</h5>
                      <form method="POST" action="{{route('deleteUser', compact('user'))}}">
                        @csrf

                        

                        @method('delete')
                        
                        <button type="submit" class="btn btn-danger">Cancella</button>


                      </form>
                      
                    </div>
                  </div>
            </div>
                
            @endforeach
        </div>
    </div>
</x-layout>