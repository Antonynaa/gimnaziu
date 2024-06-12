<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;
use App\Models\Event;
use App\Models\EventCategory;
use App\Repositories\Slideshow\SlideshowRepository;
use App\Repositories\Event\EventRepository;
use App\Repositories\Team\TeamRepository;
use App\Repositories\Section\SectionRepository;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected SlideshowRepository $slideshowRepository,
        protected EventRepository $eventRepository,
        protected TeamRepository $teamRepository,
        protected SectionRepository $sectionRepository,
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
    public function law(){
        $sections = $this->sectionRepository->getAll();
        return view('frontend.law.law')
            ->with('sections', $sections);
    }
    public function contacts(){
        return view('frontend.contacts.contacts');
    }
    public function event(){
        $events = $this->eventRepository->getAll();
        return view('frontend.event.event')
        ->with('events', $events);
    }
    public function category($category){
        $slug = explode("-", $category);
        $nr = end($slug);
        $events = $this->eventRepository->getEventByCategory($nr);
        return view('frontend.event.event')
        ->with('events', $events);
    }
    public function more($title){
        $slug = explode("-", $title);
        $id= end($slug);
        $lastEvents = $this->eventRepository->getLast( Event::LAST );
        $event = $this->eventRepository->find($id);
        $categories = EventCategory::all();
        return view('frontend.event.more')
        ->with('lastEvents', $lastEvents)
        ->with('categories', $categories)
        ->with('event', $event);
    }  
    public function team(){
        $members = resolve(TeamRepository::class)->getAll();
        return view('frontend.team.team')
            ->with('members', $members);
    }
}