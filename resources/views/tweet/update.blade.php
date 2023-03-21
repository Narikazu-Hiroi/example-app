<x-layout title="編集 | つぶやきアプリ">
    <x-layout.single>
        <h2>
            つぶやきアプリ
        </h2>
        @php
            $breadcrumbs = [
                ['href' => route('tweet.index'), 'label' => 'TOP'],
                ['href' => '#', 'label' => '編集']
            ];
        @endphp
        <x-tweet.form.put :tweet="$tweet"></x-tweet.form.put>
    </x-layout.single>
</x-layout>