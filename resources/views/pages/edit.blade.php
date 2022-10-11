<x-layouts.layout title="Modification des films">

    <div class="container">
        <h1 class="text-center text-indigo-500 font-black text-4xl mb-5">Update Videos</h1>
        <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                {{-- Title --}}
                <input type="text" name="title" placeholder="Titre du post" id="" class="block w-full rounded-lg border-gray-400" value="{{ old('title', $video->title) }}"> 
                <x-error-msg name="title" />
                {{-- description --}}
                <textarea name="description" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border-gray-400" placeholder="Votre description">
                    {{ old('description', $post->content) }}
                </textarea>
                <x-error-msg name="description" />
                {{-- is_published --}}
                {{-- <div class="mt-5">
                    <label for="is_published">Publication</label>
                    <input @checked(old('is_published', $post->is_published)) type="checkbox" name="is_published" id="" value="is_published">
                </div> --}}
                {{-- Image --}}
                <div class="">
                    <label for="url_img">Choisir une image :</label>
                    <input class="block w-full rounded-lg border-gray-400 mt-5" type="file" name="url_img" id="">
                    <x-error-msg name="url_img" />
                </div>
              
                {{-- <input type="text" name="url_img" placeholder="Url de votre image" id="" class="block w-full rounded-lg border-gray-400 mt-5" value="https://source.unsplash.com/640x480/?person?1"> --}}
                <button class="btn btn-primary mt-6 w-full"> Modifier</button>

            </div>
        </form>
    </div>

</x-layouts.layout>
