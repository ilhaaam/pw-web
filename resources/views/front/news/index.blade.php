@extends( 'front.header' )

@section( 'content' )
    @foreach( $articles as $article )
        <div class="portlet mt-element-ribbon light portlet-fit ">
            <a href="{{ url( '/news/category/' .  $article->category ) }}">
                <div class="ribbon ribbon-right ribbon-clip ribbon-color-{{ $article->color( $article->category ) }} text-capitalized">
                    <div class="ribbon-sub ribbon-clip ribbon-right"></div> 
                        {{ trans( 'news.category.' . $article->category ) }}
                </div>
            </a>
            <div class="portlet-title">
                <div class="caption">
                    <a href="{{ url( '/news/post' ) . '/' . $article->slug }}" data-toggle="tooltip" data-placement="top" title="Click me Senpai!">
                        <span class="caption-subject text-{{ $article->color( $article->category ) }} bold text-capitalize">{{ $article->title }}</span>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                
                <small class="bold">
                    {{ $article->created_at->toFormattedDateString() }} / {{ trans('news.author') }} 
                    <a href="{{ url( '/news/author/' . $article->hide( $article->author) ) }}">
                        <span class="text-primary">{{ $article->author($article->author) }}</span>
                    </a>
                </small>
            </div>
        </div>
    @endforeach
    <div class="text-center">
        {!! $articles->render() !!}
    </div>
@endsection