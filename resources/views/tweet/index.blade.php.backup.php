<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>つぶやきアプリ</title>
    </head>
    <body>
        <h1>つぶやきアプリ</h1>
        <div>
            @foreach($tweets as $tweet)
                <details>
                    <summary>{{ $tweet -> content }} by {{ $tweet -> user-> name }}</summary>
                    @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
                    <div>
                        <a href="{{ route('tweet.update.index', ['tweetId'=>$tweet->id]) }}">
                        <form action="{{ route('tweet.delete', ['tweetId'=>$tweet->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">削除</button>
                        </form>
                        </a>
                    </div>
                    @else
                        編集できません
                    @endif
                </details>
            @endforeach
        </div>
    </body>
</html>
