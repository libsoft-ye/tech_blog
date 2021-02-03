@extends('web.master')

@section('content')
<h1>
    {{ $article->title }}
</h1>
<span title="{{ $article->created_at }}">{{ $article->created_at->diffForHumans() }}</span>
<br>
<p>
    {{ $article->content }}
</p>

@endsection
