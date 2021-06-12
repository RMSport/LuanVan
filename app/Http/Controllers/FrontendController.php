<?php
namespace App\Http\Controllers;
class FrontendController extends Controller{
    public function index(){
        return view('frontend.index');
    }
    public function club(){
        return view('frontend.club');
    }
    public function nation(){
        return view('frontend.nation');
    }
    public function accessories(){
        return view('frontend.accessories');
    }
}
