@props(['title',
'description',
'url_img',

])

<div class="card w-96 bg-base-100 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="https://placeimg.com/400/225/arch" alt="Shoes" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">{{ $video-> }}</h2>
    <p>description</p>
    <div class="card-actions">
      {{-- <button class="btn btn-primary">Buy Now</button> --}}
    </div>
  </div>
</div>