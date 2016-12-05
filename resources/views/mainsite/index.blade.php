<html>
    <head>
        <title>{{ config('website.title') }}</title>
        <link href="admin/assets/backend/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>{{ config('website.title') }}</h1>
            <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
            <hr>
            <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="/article/{{ $post->slug }}">{{ $post->title }}</a>
                    <em>({{ $post->published_at }})</em>
                    <p>
                        {{ str_limit($post->content) }}
                    </p>
                </li>
            @endforeach
            </ul>
            <hr>
            {!! $posts->render() !!}
        </div>
    </body>
</html>
