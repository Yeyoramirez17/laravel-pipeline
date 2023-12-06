@extends('layout.app')

@section('content')
    <ul class="list-group">
        @foreach( $articles as $article )
            <li class="list-group-item">
                <p>
                    ({{ $article->id }}): {{ $article->title }} ({{ $article->status }})
                </p>
            </li>
        @endforeach
    </ul>

    {{ $articles->links() }}
@endsection
