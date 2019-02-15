<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class ViewController extends Controller
{
    //
    // public function index()
    // {
        
    // }

    public function store(Request $request)
    {
        if ($request->has('id')) {
            // dd($request);
            $id = $request->input('id');

            $query = 
            '   SELECT *
                FROM `songs`
                WHERE `id` = ?
                LIMIT 1
                ';

            $song = DB::selectOne($query, [$id]);

        } else {
            // dd($request);
            $song = (object) [
                'name' => null,
                'code' => null
            ];
        }



        if ($request->method() == 'POST') {
            // dd($request);

            // $this->validate($request, [
            //     'code' => 'unique:songs,code'
            //     // ...
            // ]);

            $song->name = $request->input('name');
            $song->code = $request->input('code');

            if ($request->has('id')) {
                // dd($request);
                $query = 
                    'UPDATE `songs`
                    SET 
                        `name` = ?,
                        `code` = ? 
                    WHERE `id` = ?
                    LIMIT 1
                    ';

                DB::update($query, [
                    $song->name,
                    $song->code,
                    $song->id
                ]);
            } else {
                $query = 
                '   INSERT 
                    INTO `songs`
                    (`name`, `code`)
                    VALUES
                    (?, ?)
                    ';
        
                DB::insert($query, [
                    $song->name,
                    $song->code
                ]);

                $song->id = DB::getPdo()->lastInsertId();

            }
            return redirect('/?id='.$song->id);
        }

        
        
        
        $html = view('index', [
            'song' => $song
        ]);

        return $html;
        // var_dump($song);

        
    }
}


