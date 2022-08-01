<?php

use Http\Api\Controller;
use Symfony\Component\HttpFoundation\Request;

require_once '../../vendor/autoload.php';

$request = Request::createFromGlobals();

Controller::hello($request)->send();