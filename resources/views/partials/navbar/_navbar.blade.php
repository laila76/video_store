@php
    $styleLink="font-semibold hover:text-orange-600 hover:underline underline-offset-4"
@endphp
<nav class="shadow-xl flex justify-between p-5 mb-10 text-blue-600">
    <div id="logo">
        <a href="/" class="font-black text-3xl">Video Store</a>
    </div>
    <div class="space-x-5 flex items-center" id="navBar">
        @auth
            <a  href="{{ route('login') }}" class="{{ $styleLink }}">Modifier un film </a>
            <a  href="{{ route('register') }}" class="{{ $styleLink }}">Supprimer un film</a>
       
        @endauth
        <a  href="{{ route('dashboard') }}" class="{{ $styleLink }}">Dashboard</a>
        <div class="flex justify-center gap-7 items-center">
            <x-btn-logout/>
            <p>{{ Auth::user()->name }}</p> 
        </div>
        
    </div>
</nav>