<?php

use Http\Api\Controller;

require_once '../../vendor/autoload.php';

Controller::randomStatusCodes()->send();
