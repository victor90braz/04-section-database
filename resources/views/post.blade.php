<x-layout>
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f5f5f5;">
        <nav>
            <ul style="list-style: none;">
                <li style="font-weight: bold; color: #007bff; text-decoration: underline;">
                    {{ $post->category->name }}
                </li>
            </ul>
        </nav>

        <article style="margin-top: 20px; padding: 10px; background-color: #fff;">
            <h1 style="font-size: 24px; margin-bottom: 10px;">{{ $post->title }}</h1>
            <div>{!! $post->body !!}</div>
        </article>
        <a href="/" class="btn-go-back" style="display: inline-block; margin-top: 20px; text-decoration: underline; color: #007bff;">Go Back</a>
    </div>
</x-layout>
