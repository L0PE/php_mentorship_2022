<?php

use Http\Api\Controller;

require_once '../../vendor/autoload.php';

$fileContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt'.
    ' ut labore et dolore magna aliqua. Sit amet justo donec enim diam vulputate ut pharetra sit.'.
    ' Purus faucibus ornare suspendisse sed nisi. Auctor augue mauris augue neque gravida in fermentum.'.
    ' Nisi porta lorem mollis aliquam ut porttitor leo a diam. Cras fermentum odio eu feugiat pretium.'.
    ' Sem nulla pharetra diam sit amet. Turpis tincidunt id aliquet risus.'.
    ' Tempor orci dapibus ultrices in iaculis nunc. Bibendum est ultricies integer quis auctor.';


Controller::export($fileContent)->send();