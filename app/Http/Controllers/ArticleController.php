<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    static public function createImg($binaryStr){
        // $path = public_path()."/article_image/image.png";
        // $files = fopen($path, "w");
        // fwrite($files, $binaryStr);
        Storage::disk('public')->put("images/representative/image",  $binaryStr);
    }
}
