<x-layout.layout  title='show'>
    <div class="container mb-10">

   
    <div class="font-bold">
        <p>Show Films </p>
    </div>
    <div>
        <div>
            <img src="{{ asset('storage/' . $video->url_img) }}" alt="{{ $video->title }}" class="pb-5 max-w-lg">
        </div>
        <p class="text-3xl font-black pb-10">{{ $video->title }}</p>
        <p class="max-w-xl"> {!! nl2br(e($video->description)) !!}</p>
        {{-- <p class="">{{ Str::substr($description, 0, 80) }}</p> --}}
        <p class="text-xl font-serif pb-6">{{ $video->nationality }}</p>
        <p class="text-xl font-serif pb-6">{{ $video->year_created  }}</p>
        <p class="text-xl font-serif pb-6">{{ $video->actors }}</p>
    </div>
    <div class="">
         @auth

                 @if(Auth::user()->is_admin == 1)
                <div class="pt-6 flex gap-10">
                    <x-btn-delete :video="$video" />
                    <a href="{{ $video->id }}/edit" class="btn btn-success">Modifier</a>
                </div>
                @endif
               
         
            @endauth 
    </div>
    </div>
</x-layout.layout>
    