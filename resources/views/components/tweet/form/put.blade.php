@props([
    'tweet'
])
@php
    var_dump($tweet->id);
@endphp
<div>
    <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post">
        @method('PUT')
        @csrf
        @if (session('feedback.success'))
        <x-alert.success>{{ session('feedback.success') }}</x-alert.success>
        @endif
        <div>
            <textarea
                name="tweet"
                rows="3"
                placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
        </div>
        <p>
            140文字まで
        </p>

        @error('tweet')
        <x-alert.error>{{ $message }}</x-alert.error>
        @enderror

        <div>
            <x-element.button>
                編集
            </x-element.button>
        </div>
    </form>
</div>