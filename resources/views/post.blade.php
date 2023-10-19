<x-layout>
    <div class="container">
        <article>
            <h1>{{ $post->title }}</h1>
            <div>{!! $post->body !!}</div>
            <x-button class="my-button">Send Post</x-button>
        </article>
        <a href="/">Go Back</a>
    </div>
</x-layout>
