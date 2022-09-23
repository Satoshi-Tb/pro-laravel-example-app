<?php
namespace App\Services;

use App\Models\Tweet;


class TweetService
{
    public function getTweets()
    {
        //ソートは以下の方法でも同じことが可能。違いは、SQLとしてDB側でソートするか、DB取得結果をphpでソートするかという点。
        //Tweet::all()->sortByDesc('created_at');
        //一般的にDB側でソートするほうが高パフォーマンスであるため、基本的にorderByメソッドでソートするのが良いと考える。
        
        return Tweet::orderBy('created_at', 'DESC')->get();
    }
}