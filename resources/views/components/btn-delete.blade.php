<div class="">
    <form action="{{ route('videos.destroy',$video->id) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir supprimer cet article ?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-error" type="submit">Supprimer</button>
    </form>
</div>