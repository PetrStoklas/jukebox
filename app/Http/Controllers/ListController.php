<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ListController extends Controller
{
    //
    public function list()
    {
        $query = 
        '   SELECT *
            FROM `songs`
            WHERE 1
            ';

        $all_songs = DB::select($query);

        // var_dump($all_songs);

        $list_view = view('songs/list', [
            'all_songs' => $all_songs
        ]);
        
        return $list_view;
    }
}
