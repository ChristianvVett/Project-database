<x-layout>

    <h1 class="text-center">Contattaci</h1>

    <form  action="{{route('send.mail')}}" method="POST">

        @csrf

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-6">                    
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        <div class="mb-3">
                            <label for="exampleInputSurname" class="form-label">Cognome</label>
                            <input type="text" name="surname" class="form-control" id="exampleInputSurname" aria-describedby="surnameHelp">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Picoolo testo</label>
                            <textarea name="text" class="form-control" id="exampleInputText" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form> 
</x-layout>