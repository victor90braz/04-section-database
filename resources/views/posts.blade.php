<x-layout>
    <div class="container">
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>

                <div>
                    {!! $post->body !!}
                </div>
            </article>
        @endforeach
    </div>
</x-layout>


