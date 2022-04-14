<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DraftModel;
use App\Models\DraftImageModel;
use Illuminate\Support\Facades\Auth;

class DraftController extends Controller
{
    public function index(){
        $flash_id = DraftModel::create([
            'user_id' => Auth::user()->id
        ])->id;

        return view('add-article',[
            'draft_id' => $flash_id
        ]);
    }

    public function uploadImage(Request $data, $id){
        $instance = DraftImageModel::create([
            'draft_id' => $id,
            'link' => $data->file('file')->store('draftimg')
        ]);
        $link = json_encode(['link' => $instance->link]);
        return $link;
    }
}
