<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateArticleController extends Controller
{
    public function index(){
        return view('experimental');
    }

    public function createArticle(Request $data){
        $binaryStr = $data['article-image'];
        // dd($binaryStr);
        ArticleController::createImg($binaryStr);
    }
}
