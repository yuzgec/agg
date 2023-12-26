<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        return view('frontend.index');
    }

    public function qr(){
        return view('frontend.page.meltem');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function corporatedetail($slug){
        $Detay = Page::where('slug', $slug)->firstOrFail();
        return view('frontend.page.index', compact('Detay'));

    }

    public function service(){
        return view('frontend.service.index');
    }

    public function reference(){
        return view('frontend.page.reference');
    }

    public function servicedetail($slug){
        $Detay = Service::where('category', 1)->where('slug', $slug)->firstOrFail();
        return view('frontend.service.detail', compact('Detay'));
    }

    public function projectdetail($slug){
        $Detay = Page::where('slug', $slug)->firstOrFail();
        return view('frontend.page.index', compact('Detay'));
    }

    public function form(ContactRequest $request){
        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to('info@riobaski.com')->subject($New->name.' - Site Bilgi Formu');
        });

        return redirect()->route('home');
    }

}
