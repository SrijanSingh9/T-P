@foreach ($posts as $post)
    <div class="post">
        <a href="{{ url('post/'.$post->id) }}">{{ $post->title }}</a>
        <p>{{ $post->content }}</p>
    </div>
@endforeach

{{ $posts->links() }}
