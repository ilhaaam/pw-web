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
                    <a href="{{ url( '/news/post' ) . '/' . $article->slug }}">
                        <span class="caption-subject text-{{ $article->color( $article->category ) }} bold text-capitalize">{{ $article->title }}</span>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                {!! substr($article->content, 0, 210) !!}....
                <a href="{{ url( 'news/post' ) . '/' . $article->slug }}"> Read more</a>
                <p></p>
                <small class="bold">
                    {{ $article->created_at->toFormattedDateString() }} / 
                    <a href="{{ url( '/news/author/' .  $article->author ) }}">
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