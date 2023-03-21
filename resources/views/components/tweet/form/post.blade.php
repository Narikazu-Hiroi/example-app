@auth
<form action="{{ route('tweet.create') }}" method="post" enctype="multipart/form-data">
    @csrf
    <textarea
        name="tweet"
        rows="3"
        placeholder="つぶやきを入力">
    </textarea>
    <div>
        <span>140文字まで</span>
    </div>
    <x-tweet.form.images></x-tweet.form.images>
    @error('tweet')
    <x-alert.error>{{ $message }}</x-alert.error>
    @enderror
    <x-element.button>つぶやく</x-element.button>
</form>
@endauth
@guest
<div>
    <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
    <x-element.button-a :href="route('register')">会員登録</x-element.button-a>
</div>
@endguest