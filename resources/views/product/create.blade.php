<x-layout>
   
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

{{-- se stiamo utilizzando immagini che dovranno essere nel nostro progetto sempre, vanno inserite in un folder prresesnte nel folder publi e dovranno essere richiamati con "../cartellaImmagini/file.estensione" --}}

<h1 class="text-center">Inserisci prodotto</h1>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" method="POST" action="{{route('productStore')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nome prodotto</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputNome" aria-describedby="nameHelp" value="{{old('name')}}">
                        @error('name')
                           <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPrice" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="exampleInputPrice" aria-describedby="priceHelp" value="{{old('price')}}">
                        @error('price')
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
                        <label for="exampleInputImage" class="form-label">Inserisci una immagine</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="exampleInputImage" aria-describedby="imageHelp" accept="image/jpeg, image/png">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary">Inserisci prodotto</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>