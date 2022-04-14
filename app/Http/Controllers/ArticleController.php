<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function viewArticle(Request $request, $id){
        return view('viewarticle', [
            'article' => ArticleModel::find($id)
        ]);
    }

    public function createArticle(Request $request){
        ArticleModel::create([
            'user_id' => Auth::user()->id,
            'article_title' => $request->article_title,
            'article_body' => $request->article_content
        ]);

        return redirect()->back();
    }

    public function deleteArticle($id){
        ArticleModel::find($id)->delete();
        return redirect()->back();
    }
}
