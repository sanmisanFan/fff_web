@extends('mainsite.layouts.homelayout')

@section('styles')
<link href="/assets/css/swiper.min.css" rel="stylesheet">
@stop

@section('page-header')
  
{{--<header class="banner">
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
    </header>--}}

<!-- focus images -->
<header class="focusImgs">
  <a class="focusImgs_prev" id="j_homeslide_prev" href="javascript:;">
    <span class="fa fa-angle-left"></span>
  </a>
  <a class="focusImgs_next" id="j_homeslide_next" href="javascript:;">
    <span class="fa fa-angle-right"></span>
  </a>
  <div class="swiper-container" id="j_homeslide">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="http://www.g-cores.com/volumes/21452">
            <img class="hidden-xs" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/ab216532-bad1-45ec-b796-a68f49ee3260.jpg" alt="Ab216532 bad1 45ec b796 a68f49ee3260" />
            <img class="visible-xs-inline-block" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/695d1939-ca4c-4599-953c-2902fa340d0d.jpg" alt="695d1939 ca4c 4599 953c 2902fa340d0d" />
</a>        </div>
        <div class="swiper-slide">
          <a href="http://www.g-cores.com/volumes/21442">
            <img class="hidden-xs" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/78b7be38-e0fd-4bcb-ab2b-98630426cfe5.jpg" alt="78b7be38 e0fd 4bcb ab2b 98630426cfe5" />
            <img class="visible-xs-inline-block" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/41946641-714e-454e-9569-4a2ebc42a0f4.jpg" alt="41946641 714e 454e 9569 4a2ebc42a0f4" />
</a>        </div>
        <div class="swiper-slide">
          <a href="http://www.g-cores.com/volumes/21391">
            <img class="hidden-xs" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/4876a849-1a61-4dce-bd58-2be07d29ba6f.jpg" alt="4876a849 1a61 4dce bd58 2be07d29ba6f" />
            <img class="visible-xs-inline-block" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/d4d7c5d7-e92a-4c5e-a0d6-e2253cc3d532.jpg" alt="D4d7c5d7 e92a 4c5e a0d6 e2253cc3d532" />
</a>        </div>
        <div class="swiper-slide">
          <a href="http://www.g-cores.com/volumes/21401">
            <img class="hidden-xs" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/fc24ae5c-717d-45ce-a6ea-d55137f2071e.jpg" alt="Fc24ae5c 717d 45ce a6ea d55137f2071e" />
            <img class="visible-xs-inline-block" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/d9a42fe6-429d-4c34-8609-9fcd152f2ee3.jpg" alt="D9a42fe6 429d 4c34 8609 9fcd152f2ee3" />
</a>        </div>
        <div class="swiper-slide">
          <a href="http://www.g-cores.com/volumes/21352">
            <img class="hidden-xs" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/67420ef1-ce1c-4c4a-bf50-88bfe2c161ec.jpg" alt="67420ef1 ce1c 4c4a bf50 88bfe2c161ec" />
            <img class="visible-xs-inline-block" data-no-retina="" src="http://alioss.g-cores.com/uploads/focus_image/115f550b-82e4-49a1-bdaf-c2be65f960e4.jpg" alt="115f550b 82e4 49a1 bdaf c2be65f960e4" />
</a>        </div>
    </div>
  </div>
  <div id="j_homeslideindex" class="focusImgs_index"></div>
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
