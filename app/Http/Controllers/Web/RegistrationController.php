<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 05/09/16
 * Time: 21:35
 */

namespace AcademicDirectory\Http\Controllers\Web;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('web/registration/index');
    }

    public function create(Request $request)
    {
        
    }

}