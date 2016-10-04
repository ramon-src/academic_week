<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 25/09/16
 * Time: 18:49
 */

namespace AcademicDirectory\Http\Controllers\Api\Users\Admin;

use AcademicDirectory\Domains\Events\EventsRepository;
use AcademicDirectory\Domains\Events\EventSubscribersRepository;
use AcademicDirectory\Domains\Users\UserRepository;
use AcademicDirectory\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function index()
    {
        return view('api/admin/users/index')->with('users', [])->with('events', []);
    }

    public function searchByRg(Request $request, UserRepository $userRepository, EventsRepository $eventsRepository)
    {
        $users = $userRepository->getAllByRg($request->rg);
        $events = $eventsRepository->getAllActiveEvents();
        return view('api/admin/users/index')->with('users', $users)->with('events', $events);
    }

    public function activeUserInEvent(Request $request, EventSubscribersRepository $eventSubscribersRepository)
    {
        DB::beginTransaction();
        try {
            $user_id = $request->user_id;
            $event_id = $request->event_id;
            $eventSubscribersRepository->activeUserInEvent($user_id, $event_id);
            DB::commit();
            return redirect()->route('users.index');
        } catch (Exception $e) {
            DB::rollback();
        }
    }
}