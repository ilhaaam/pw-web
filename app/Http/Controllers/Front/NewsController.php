<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function getIndex()
    {
        pagetitle( [ trans( 'main.apps.news' ), settings( 'server_name' ) ] );
        $articles = Article::orderBy( 'created_at', 'desc' )->paginate( settings( 'news_items_per_page' ) );
        return view( 'front.news.index', compact( 'articles' ) );
    }

    public function detail( $post )
    {
        pagetitle( [ trans( 'main.apps.news' ), settings( 'server_name' ) ] );
        $articles = Article::where( 'slug', $post )->get(); 
        return view( 'front.news.detail', compact('articles') );
    }

    public function author( $author )
    {
        pagetitle( [ trans( 'main.apps.news' ), settings( 'server_name' ) ] );
        $articles = Article::where( 'author', $author )->orderBy( 'created_at', 'desc' )->paginate( settings( 'news_items_per_page' ) );
        return view( 'front.news.index', compact( 'articles' ) );
    }

    public function category( $category )
    {
        pagetitle( [ trans( 'main.apps.news' ), settings( 'server_name' ) ] );
        $articles = Article::where( 'category', $category )->orderBy( 'created_at', 'desc' )->paginate( settings( 'news_items_per_page' ) );
        return view( 'front.news.index', compact( 'articles' ) );
    }
}
