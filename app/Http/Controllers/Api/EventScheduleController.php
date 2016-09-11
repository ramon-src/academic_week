<?php

namespace AcademicDirectory\Http\Controllers\Api;

use AcademicDirectory\Domains\Events\EventsRepository;
use Illuminate\Http\Request;

class EventScheduleController extends Controller
{
    private $eventsRepository;

    public function __construct(EventsRepository $eventsRepository)
    {
        $this->middleware('auth');
        $this->eventsRepository = $eventsRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('api/default_user/events/schedule')
            ->with('event', $this->eventsRepository->findByID($request->id));
    }
}
