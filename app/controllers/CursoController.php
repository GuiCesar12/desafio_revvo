<?php
namespace app\controllers;
use app\models\Curso;
use Exception;
use MessageFormatter;

class CursoController extends Controller
{
    public function index()
    {
        try {
            $cursoModel = new Curso();
            $cursos = $cursoModel->all();
            return $this->view('index', ['cursos' => $cursos]);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function store()
    {
        try {
            
            $curso = new Curso();
            $curso->create($_POST);
            echo json_encode(['success' => 'Curso criado com sucesso!','status_code'=>200]);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function select()
    {
        try {
            $curso = new Curso();
            $curso = $curso->find($_GET['id']);
            echo json_encode(['success' => 'Curso selecionado com sucesso!', 'status_code' => 200, 'curso' => $curso]);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function update()
    {
        try {

            $curso = new Curso();
            $curso = $curso->update($_POST);
            echo json_encode(['success' => 'Curso atualizado com sucesso!', 'status_code' => 200]);
        } catch (Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    // public function destroy($id)
    // {
    //     Curso::destroy($id);
    //     return $this->redirect('/cursos');
    // }
}