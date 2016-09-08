<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 05/09/16
 * Time: 21:35
 */

namespace AcademicDirectory\Http\Controllers\Web;

use AcademicDirectory\Domains\Users\DefaultUserRepository;
use AcademicDirectory\Domains\People\PeopleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\CountValidator\Exception;

class RegistrationController extends Controller
{

    public
    function index()
    {
        return view('web/registration/index');
    }

    public
    function create(Request $request, DefaultUserRepository $defaultUserRepository, PeopleRepository $peopleRepository)
    {
        try {
            DB::beginTransaction();
            $User = $defaultUserRepository->create($request->all());
            $data = $request->all();
            $data['user_id'] = $User['id'];
            $peopleRepository->create($data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

}