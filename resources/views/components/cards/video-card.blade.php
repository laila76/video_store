@props(['title',
'description',
'url_img',

])

<div class="card w-96 bg-base-100 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">{{ $title }}</h2>
   
     <p class="">{{ Str::substr($description, 0, 80) }}</p>
    <div class="card-actions">
      {{-- <button class="btn btn-primary"></button> --}}
    </div>
  </div>
</div>