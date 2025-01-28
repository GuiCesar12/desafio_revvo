<?php

use app\controllers\CursoController;

return [
    ["GET",'/',[CursoController::class,'index']],
    ["GET",'/get_cursos/{$id}',[CursoController::class,'select']],
    ["POST",'/cursos',[CursoController::class,'store']],
    ["PUT",'/cursos/{$id}',[CursoController::class,'update']],
    ["DELETE",'/cursos/{$id}',[CursoController::class,'destroy']]
];