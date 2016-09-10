<?php

namespace AcademicDirectory\Http\Controllers\Auth;

use AcademicDirectory\Domains\People\PeopleRepository;
use AcademicDirectory\Domains\Users\DefaultUserRepository;
use AcademicDirectory\Domains\Users\InstituitionRepository;
use AcademicDirectory\Domains\Users\User;
use Validator;
use AcademicDirectory\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    protected $defaultUserRepository;
    protected $peopleRepository;
    protected $instituitionRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DefaultUserRepository $defaultUserRepository, PeopleRepository $peopleRepository, InstituitionRepository $instituitionRepository)
    {
        $this->middleware('guest');
        $this->defaultUserRepository = $defaultUserRepository;
        $this->peopleRepository = $peopleRepository;
        $this->instituitionRepository = $instituitionRepository;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'rg' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        try {
            DB::beginTransaction();
            $User = $this->defaultUserRepository->create($data);
            $data['user_id'] = $User['id'];
            $Person = $this->peopleRepository->create($data);

            if ($data['registry_number']) {
                $data['person_id'] = $Person['id'];
                $this->instituitionRepository->addPerson($data);
            }
            DB::commit();
            return $User;
        } catch (Exception $e) {
            DB::rollback();
        }
    }
}
