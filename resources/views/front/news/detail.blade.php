@extends( 'front.header' )

@section( 'content' )
    @foreach( $articles as $article )
        <div class="portlet mt-element-ribbon light portlet-fit ">
            <a href="{{ url('/news/category/' .  $article->category ) }}">
                <div class="ribbon ribbon-right ribbon-clip ribbon-color-{{ $article->color( $article->category ) }} text-capitalized">
                    <div class="ribbon-sub ribbon-clip ribbon-right"></div> 
                        {{ trans( 'news.category.' . $article->category ) }}
                </div>
            </a>
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject text-{{ $article->color( $article->category ) }} bold text-capitalize">{{ $article->title }}</span>
                </div>
            </div>
            <div class="portlet-body">
                {!! $article->content !!}
                
                <small class="bold">
                    {{ trans('news.written_by') }} 
                    <a href="{{ url( '/news/author/' .  $article->hide( $article->author) ) }}">
                        <span>{{ $article->author($article->author) }}</span>
                    </a>
                    {{ trans('news.on') }} 
                    {{ $article->created_at->toFormattedDateString() }}
                </small>
            </div>
        </div>
    @endforeach
@endsection