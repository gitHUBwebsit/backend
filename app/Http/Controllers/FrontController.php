<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    //
    function index()
    {
        $news_list = DB::table('news')->orderBy('id','desc')->take(3)->get();

        return view('front/index',compact('news_list'));


        // return view('front/index');
    }

    function contact_us()
    {
        return view('front/contact_us');
    }

    function news()
    {
        $news_list = DB::table('news')->orderBy('id','desc')->paginate(6);
        return view('front/news', ['news_list' => $news_list]);
        // return view('front/news');
    }

    function news_info($news_id)
    {
        $news = DB::table('news')->where('id','=',$news_id)->first();

        return view('front/news_info',compact('news'));

    }

    function template()
    {
        return view('front/template');
    }
    function store_contact(Request $request)
    {
        // dd($request->all());
       DB::table('place')->insert(
            [
            'email' =>$request->email,
            'Taiwan' =>$request->Taiwan,
            'image' =>'',
            'place_name'=>$request->place_name,
            'content' =>$request->content
            ]

        );

    }

}
