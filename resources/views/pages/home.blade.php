<x-layout.layout title='Home'>
    <div class="">
        <p class="text-5xl text-center font-black text-red-500 pb-10">Video Store</p>
        <div class="">
            <div>
                 @foreach ($videos as $video )
             <a href="videos/{{ $video->id }}">

                <x-cards.video-card :url_img="$video->url_img" :title="$video->title" :description="$video->description"/>
            </a>
                
            @endforeach

            </div>
           
           
        </div>

    </div>
</x-layout.layout>