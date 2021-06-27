<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if (isset($_GET['query'])){
            $search_text = $_GET['query'];
            $countries = DB::table('countries')->where('name', 'LIKE', '%'.$search_text.'%');
            return view('search', ['countries' => $countries]);
        } else {
            return view('search');
        }
    }
}
