<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class ApiController extends Controller
{
    public function getNews()
    {
    	$news = News::all();
    	return response()->json($news);
    }
}
