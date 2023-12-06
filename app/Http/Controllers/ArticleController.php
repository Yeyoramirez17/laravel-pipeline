<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke(): Renderable
    {
        $articles = Article::filtered()
            ->paginate()
            ->withQueryString();

        return  view('articles.index', compact('articles'));
    }
}
