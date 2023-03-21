@props([
    'tweets' => [],
])
<div>
    <ul>
        @foreach($tweets as $tweet)
        <li>
            <div>
                <span>
                    {{ $tweet->user->name }}
                </span>
                <p>{!! nl2br(e($tweet->content)) !!}</p>
                <x-tweet.images :images="$tweet->images"/>
            </div>
            <div>
                <!-- TODO 編集と削除 -->
                <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id"></x-tweet.options>
            </div>
        </li>
        @endforeach
    </ul>
</div>