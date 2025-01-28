<?php

use app\controllers\CursoController;

return [
    ["GET",'/',[CursoController::class,'index']],
    ["GET",'/get_cursos',[CursoController::class,'select']],
    ["POST",'/create_curso',[CursoController::class,'store']],
    ["POST",'/update_curso',[CursoController::class,'update']],
    //["DELETE",'/cursos/{$id}',[CursoController::class,'destroy']]
];