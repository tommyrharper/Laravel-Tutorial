@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col3 p-5">
            <img src="https://instagram.flhr3-2.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.flhr3-2.fna.fbcdn.net&_nc_ohc=M-I68HMHqW0AX_Sv6Nf&oh=94a2d6432756c51980c703ae5cb36a91&oe=5F6E5B67" alt="" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> Posts</div>
                <div class="pr-5"><strong>23k</strong> Followers</div>
                <div class="pr-5"><strong>212</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection
