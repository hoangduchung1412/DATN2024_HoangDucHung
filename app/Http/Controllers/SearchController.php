<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getSearch(Request $request)
    {
        return view('home');
    }

    public function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('posts')
            ->where('title', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul>';
            foreach($data as $row)
            {
               $output .= '
               <li><a href="post/'. $row->id .'">'.$row->title.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
        }
    }
}

