<x-layout title="TOP | つぶやきアプリ">
    <x-layout.single>
        <h1>つぶやきアプリ</h1>
        <x-tweet.form.post></x-tweet.form.post>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>
</x-layout>