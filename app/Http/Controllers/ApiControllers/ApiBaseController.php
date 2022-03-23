<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;

abstract class ApiBaseController extends Controller
{
    abstract protected function getAllData();
    abstract protected function getDataById($id);
}
