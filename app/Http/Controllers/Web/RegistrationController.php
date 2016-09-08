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
use AcademicDirectory\Domains\Users\InstituitionRepository;
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
    function create(Request $request, DefaultUserRepository $defaultUserRepository, PeopleRepository $peopleRepository, InstituitionRepository $instituitionRepository)
    {
        try {
            DB::beginTransaction();
            $User = $defaultUserRepository->create($request->all());
            $data = $request->all();
            $data['user_id'] = $User['id'];
            $Person = $peopleRepository->create($data);
            
            if ($request->registry_number) {
                $data['registry_number'] = $request->registry_number;
                $data['person_id'] = $Person['id'];
                $instituitionRepository->addPerson($data);
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }

}