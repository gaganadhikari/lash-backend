<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    //
    public function index(){
        $images = Gallary::query()
            ->select('id','image','description')
            ->get();
        if (sizeof($images)>=1){
            return response()->json($images,200);
        }else{
            return response()->json(["message"=>'please add gallery images', "data"=>$images, "status"=>200]);
        }
    }
}
