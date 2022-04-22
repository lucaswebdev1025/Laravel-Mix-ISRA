@extends('layout.application')

@section('main')
    <div class="feed container">
        <div class="feed-h">
            <img src="/storage/images/feed-icon.png" alt="feed" class="feed-h__icon">
            <h1 class="feed-h__title">{{ __('Blog') }}</h1>
        </div>
        <div class="feed-b">
            @foreach($posts as $post)
                <div class="feed-c">
                <div class="feed-c-prew">
                    <img src="{{ $post->image ? $post->image->getThumbUrl(262, 163) : '/storage/images/feed-card-preview-example.png' }}" alt="preview">
                </div>
                <div class="feed-c-t">
                    <div class="feed-c-h">
                        <h2 class="feed-c-title">{{ $post->title }}</h2>
                        <div class="feed-c-date">
                            <div class="feed-c-date__icon">
                                {{ date('d.m.Y', strtotime($post->created_at)) }}
                                <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m40 152h344v44.019h40v-104.019c0-33.084-26.916-60-60-60h-12v-32h-40v32h-80v-32h-40v32h-80v-32h-40v32h-12c-33.084 0-60 26.916-60 60v300h192v-40h-152zm0-60c0-11.028 8.972-20 20-20h304c11.028 0 20 8.972 20 20v20h-344zm332 140c-77.196 0-140 62.804-140 140s62.804 140 140 140 140-62.804 140-140-62.804-140-140-140zm0 240c-55.14 0-100-44.86-100-100s44.86-100 100-100 100 44.86 100 100-44.86 100-100 100zm20-160h-40v80h80v-40h-40zm-280-120h-40v40h40zm-40 120h40v-40h-40zm80 0h40v-40h-40zm0-80h40v-40h-40zm120 0v-40h-40v40z"/></svg>
                            </div>
                        </div>
                    </div><!-- /.feed-card-header -->
                    <div class="feed-c-p">
                        {!! $post->preview !!}
                    </div>
                    <a href="{{ route('blog.post', ['id' => $post->id]) }}" class="feed-c-link link-arrow">{{ __('Read more') }}</a>
                </div>
            </div><!-- /.feed-card -->
            @endforeach
        </div>
        <div class="feed-pag">
            @foreach($posts->getUrlRange($posts->currentPage() - 4, $posts->currentPage() + 4) as $page => $url)
                @if($page > 0 && $page <= $posts->lastPage())
                    <a href="{{ $url }}" class="feed-pag-item {{ $posts->currentPage() == $page ? 'active' : '' }}">{{ $page }}</a>
                @endif
            @endforeach
        </div>
    </div>
@endsection
