<x-layouts.layout  title="List des Category">
    <div class="container">
        <h1 class=" pt-10 pb-10 font-bold text-2xl mb-5">Gerer les categories</h1>
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="">
            <input class="@error('category') border-red-500 @enderror my-3" type="text" name="category" placeholder="" id="" 
            value="{{ old('category', $category->category) }}">
              <x-error-msg name="category"/>
            <button type="submit" class="btn btn-primary " >Modifier</button>


            </div>
           

        </form>




    </div>

</x-layouts.layout>
