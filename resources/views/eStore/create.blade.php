<x-layout>
     
    <h1 class="text-center">Inserisci negozio</h1>
    
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <form class="p-5 shadow" method="POST" action="{{route('storeElectronicStore')}}" enctype="multipart/form-data">
    
                        @csrf
    
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Nome negozio</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputNome" aria-describedby="nameHelp" value="{{old('name')}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCity" class="form-label">Città</label>
                            <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="exampleInputCity" aria-describedby="nameHelp" value="{{old('city')}}">
                            @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                          
                        </div>                      
                        <div class="mb-3">
                            <label for="exampleInputDescription" class="form-label">Piccola descrizione</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="exampleInputDescription" cols="30" rows="10">{{old('description')}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                          
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputSelect" class="form-label">Seleziona prodotto</label>
                            <select name="products[]" multiple id="exampleInputSelect" class="form-control">
                                @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputImage" class="form-label">Inserisci una immagine</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="exampleInputImage" aria-describedby="imageHelp" accept="image/jpeg, image/png">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror                      
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Inserisci negozio</button>
                      </form>
                </div>
            </div>
        </div>
    </x-layout>