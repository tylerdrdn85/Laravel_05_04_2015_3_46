<?php
/**
 * Created by PhpStorm.
 * User: Durden
 * Date: 10/4/2015
 * Time: 3:11 πμ
 */

namespace App\Http\Controllers;


class PageController  extends Controller{



    public function index()
    {
        return 'index function';
    }


    public function about()
    {
        $test = 'test variable';
        //return 'about page...';
        return view('about')->with('test',$test);
    }





} 