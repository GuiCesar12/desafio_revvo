<?php

use app\controllers\RamalController;

return [
    ["GET",'/',[RamalController::class,'index']],
    ["GET",'/cursos',[RamalController::class,'select']],

];