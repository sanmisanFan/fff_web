@extends('mainsite.layouts.homelayout')

@section('styles')
<link href="/assets/css/unslider.css" rel="stylesheet">
<link href="/assets/css/unslider-dots.css" rel="stylesheet">
@stop

@section('page-header')
  
<header class="banner">
      <ul>
        <li style="background-image: url('/assets/img/bg1.jpg');">
          <div class="inner">
            <h1>Banner幻灯片测试</h1>
            <p>随便写点什么看看效果。</p>

            <a class="btn" href="#download">下载</a>
          </div>
        </li>

        <li style="background-image: url('/assets/img/bg2.jpg');">
          <div class="inner">
            <h1>Test for Latin</h1>
            <p>Why I am cooking sooo gooood?</p>

            <a class="btn" href="#download">下载</a>
          </div>
        </li>

        <li style="background-image: url('/assets/img/bg3.jpg');">
          <div class="inner">
            <h1>喵喵喵？？？</h1>
            <p>当家的炸酱面～</p>

            <a class="btn" href="//github.com/idiot/unslider">参与</a>
          </div>
        </li>
      </ul>
    </header>
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        {{-- 文章列表 --}}
        @foreach ($posts as $post)
          <div class="post-preview">
            <a href="{{ $post->url($tag) }}">
              <h2 class="post-title">{{ $post->title }}</h2>
              @if ($post->subtitle)
                <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
              @endif
            </a>
            <p class="post-meta">
              Posted on {{ $post->published_at->format('F j, Y') }}
              @if ($post->tags->count())
                in
                {!! join(', ', $post->tagLinks()) !!}
              @endif
            </p>
          </div>
          <hr>
        @endforeach

        {{-- 分页 --}}
        <ul class="pager">

          {{-- Reverse direction --}}
          @if ($reverse_direction)
            @if ($posts->currentPage() > 1)
              <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                  <i class="fa fa-long-arrow-left fa-lg"></i>
                  Previous {{ $tag->tag }} Posts
                </a>
              </li>
            @endif
            @if ($posts->hasMorePages())
              <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                  Next {{ $tag->tag }} Posts
                  <i class="fa fa-long-arrow-right"></i>
                </a>
              </li>
            @endif
          @else
            @if ($posts->currentPage() > 1)
              <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                  <i class="fa fa-long-arrow-left fa-lg"></i>
                  Newer {{ $tag ? $tag->tag : '' }} Posts
                </a>
              </li>
            @endif
            @if ($posts->hasMorePages())
              <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                  Older {{ $tag ? $tag->tag : '' }} Posts
                  <i class="fa fa-long-arrow-right"></i>
                </a>
              </li>
            @endif
          @endif
        </ul>
      </div>

    </div>
  </div>
@stop
