<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 26/09/16
 * Time: 01:54
 */

namespace AcademicDirectory\Http\Controllers\Api;


use File;

class ImageController extends Controller
{

    public function show($slug)
    {
        $image = File::get('imgs/' . $slug . '.png');
        return response()->make($image, 200, ['content-type' => 'image/png']);
    }
}
