<x-layout>

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif

    <h1 class="text-center">Registrati</h1>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 p-5 shadow">
                <form method="POST" action="{{route('register')}}">

                    @csrf

                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Nome e Cognome</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                      @error('name')
                           <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                        @error('email')
                           <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                      @error('password')
                           <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirm" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation"class="form-control" id="exampleInputPasswordConfirm">
                        @error('password')
                           <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
    
</x-layout>