<?php
namespace app\controllers;
use app\models\Curso;
use Exception;

class CursoController extends Controller
{
    public function index()
    {
        #$cursos = Curso::all();
        $data = [
            'title' => 'Minha Página',
            'message' => 'Bem-vindo ao Plates!'
        ];
        return $this->view('index', $data);
    }

    // public function create()
    // {
    //     return $this->view('cursos/create');
    // }

    // public function store()
    // {
    //     try {
    //         Curso::create($_POST);
    //         return $this->redirect('/cursos');
    //     } catch (Exception $e) {
    //         return $this->view('cursos/create', ['error' => $e->getMessage()]);
    //     }
    // }

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