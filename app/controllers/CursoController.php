<?php
namespace app\controllers;
use app\models\Curso;
use Exception;
use MessageFormatter;

class CursoController extends Controller
{
    public function index()
    {
        $cursoModel = new Curso();
        $cursos = $cursoModel->all();
        return $this->view('index', ['cursos'=>$cursos]);
    }

    public function store()
    {
        try {
            
            $curso = new Curso();
            $curso->create($_POST);
            return json_encode(['success' => 'Curso criado com sucesso!','status_code'=>200]);
        } catch (Exception $e) {
            return json_encode(['error' => $e->getMessage()]);
        }
    }

    public function select($id)
    {   
        $curso = new Curso();
        $curso = $curso->find($id);
        return json_encode(['success' => 'Curso criado com sucesso!','status_code'=>200,'curso'=>$curso]);

    }

    // public function edit($id)
    // {
    //     $curso = Curso::find($id);
    //     return $this->view('cursos/edit', compact('curso'));
    // }

    // public function update($id)
    // {
    //     try {
    //         Curso::update($id, $_POST);
    //         return $this->redirect('/cursos');
    //     } catch (Exception $e) {
    //         return $this->view('cursos/edit', ['error' => $e->getMessage()]);
    //     }
    // }

    // public function destroy($id)
    // {
    //     Curso::destroy($id);
    //     return $this->redirect('/cursos');
    // }
}