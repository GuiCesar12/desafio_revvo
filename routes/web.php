<?php

use app\controllers\CursoController;

return [
    ["GET",'/',[CursoController::class,'index']],
    ["GET",'/get_cursos',[CursoController::class,'select']],

];