<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;
use App\Repositories\Slideshow\SlideshowRepository;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected SlideshowRepository $slideshowRepository,
    )
    {}
    public function index(){ 
        $slideshows = $this->slideshowRepository->getAll();
        return view('frontend.home.index')
            ->with('slideshows', $slideshows);
    }
    public function about(){
        return view('frontend.about.about');
    }
    public function contacts(){
        return view('frontend.contacts.contacts');
    }
    public function event(){
        return view('frontend.event.event');
    }
    public function gallery(){
        return view('frontend.gallery.gallery');
    } 
    public function team(){
        return view('frontend.team.team');
    }
}