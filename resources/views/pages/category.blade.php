<x-layouts.layout  title="Liste des Category">
    <div class="container">
        <h1 class=" pt-10 pb-10 font-bold text-2xl mb-5">Gerer les categories</h1>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="">
            <input class="my-3" type="text" name="category" placeholder="" id="">
              <x-error-msg name="category"/>
            <button type="submit" class="btn btn-primary " >Enregistrer</button>


            </div>
           

        </form>



    

    </div>

</x-layouts.layout>
