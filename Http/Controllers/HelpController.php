<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Help;

class HelpController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function getGrid($grid){
        return Help::where([['grid','=',$grid]])->get();
    }

    public function add($lat, $lng, $user, $grid){
        /* $user = User::where('id', $user)->get();
        if ($user[0]["help"]==-1){
            $help = Help::create(['lat'=>$lat,'lng'=>$lng, 'user'=>$user, 'grid'=>$grid]);
            User::where('id', $user)->update(["help"=>$help['id']]);
        }
        else{
            return;
        }
        */
        Help::create(['lat'=>$lat,'lng'=>$lng, 'user'=>$user, 'grid'=>$grid]);
    }

    public function remove($id, $user){
        /* $user = User::where('id', $user)->get();
        if ($user[0]["help"]==-1){
            return;
        }
        else{
            Help::where('id', $id)->delete();
            User::where('id', $user)->update(["help"=>-1]);
        }
        */
        Help::where('id',$id)->delete();
    }

}