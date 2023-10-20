<x-layout>
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; border: 2px solid #ccc; padding: 20px;">
        @foreach ($posts as $post)
            <div class="grid-item" style="border: 1px solid #ccc; padding: 10px;">
                <nav>
                    <ul style="list-style: none;">
                        <li style="font-weight: bold; color: #ff3700; text-decoration: underline;">
                            <a href="/categories/{{ $post->category->slug }}">
                                {{ $post->category->name }}
                            </a>
                        </li>
                    </ul>
                </nav>
                <article>
                    <h1 style="font-weight: bold; color: #231713; text-decoration: underline;">
                        <a href="/posts/{{$post->slug}}" style="text-decoration: none; color: #333;">
                            {{$post->title}}
                        </a>
                    </h1>
                    <div style="/* Add additional CSS styles here */">
                        {!! $post->excerpt !!}
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</x-layout>
