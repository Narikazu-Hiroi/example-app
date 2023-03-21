@if($myTweet)
<details>
    <div>
        <div>
            <a href="{{ route('tweet.update.index', ['tweetId' => $tweetId]) }}">
                <span>編集</span>
            </a>
        </div>
        <div>
            <form action="{{ route('tweet.delete', ['tweetId' => $tweetId]) }}" method="post" onclick="return confirm('削除してもよろしいですか?');">
                @method('DELETE')
                @csrf
                <button type="submit">
                    <span>削除</span>
                </button>
            </form>
        </div>
    </div>
</details>
@endif