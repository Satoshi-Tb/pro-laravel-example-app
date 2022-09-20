<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $requestz
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        //以下の方法でも同じことが可能。上記との違いは、SQLとしてDB側でソートするか、DB取得結果をphpでソートするかという点。
        //一般的にDB側でソートするほうが高パフォーマンスであるため、基本的に上記の手段でソートするのが良いと考える。
//        $tweets = Tweet::all()->sortByDesc('created_at');
        //        dd($tweets);
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
