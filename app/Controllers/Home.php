<?php

namespace App\Controllers;

use App\Models\usuarioModel;
use App\Models\epiModel;


class Home extends BaseController
{
    // Essa método abre a primeira página do Sistema
    public function index(): string
    {
        return view('equipamentopis');
    }

    // Abre a página de autenticação
    public function autenticar() 
    {
        $model = new usuarioModel();

        // recupera os dados do formulário
        $usuario = $this->request->getPost('usuario');
        $senha = $this->request->getPost('senha');

        // chama o método simplificado que criamos no Model
        $usuario = $model->autenticar($usuario, $senha);

        if ($usuario) {
            // redirecionar para a tela principal (CRUD de Equipamentos)
            return redirect()->to(base_url('home/principal'));
        } else {
            // se falhar, volta para o login com uma mensagem de erro
            return redirect()->to(base_url('home/erro'));
        }
    }

    public function principal()
    {
        return view('principal');
    }

    public function erro_auth()
    {
        return view('auto_auth');
    }

    public function listarepi()
    {
        $model = new epiModel();
        $dados['epi'] = $model->buscarTodosepi();

        return view('lista_epi', $dados);
    }

    public function epis()
    {
        return view('EPIs');
    }

    public function entregas()
    {
        return view('entregas');
    }

    public function editar($id)
    {
        $model = new usuarioModel();
        $dados['usuario'] = $model->buscarusuarioPorId($id);

        return view('colaborador_form', $dados);
    }

    public function atualizar()
    {
        $model = new usuarioModel();

        $id = $this->request->getPost('id'); // ID escondido no formulário
        $nome = $this->request->getPost('nome');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        $data_criacao = $this->request->getPost('data_criacao');
        $hora_criacao = $this->request->getPost('hora_criacao');

        $model->atualizarUsuario($id, $nome, $email, $senha, $data_criacao, $hora_criacao);
        return redirect()->to(base_url('colaboradores'));
    }

    public function novoColaborador()
    {
        return view('colaborador_form');
    }

    public function salvarColaborador()
    {
        $model = new usuarioModel();

        $nome = $this->request->getPost('nome');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        $data_criacao = $this->request->getPost('data_criacao');
        $hora_criacao = $this->request->getPost('hora_criacao');

        $model->inserirUsuario($nome, $email, $senha, $data_criacao, $hora_criacao);
        return redirect()->to(base_url('colaboradores'));
    }

    public function excluir($id)
    {
        $model = new usuarioModel();
        $model->excluirUsuario($id);

        return redirect()->to(base_url('colaboradores'));
    }

    public function equipamentopis()
    {
        return view('equipamentopis');
    }

    public function colaboradores()
    {
        $model = new usuarioModel();
        $dados['colaboradores'] = $model->buscarTodosusuario();

        return view('colaboradores', $dados);
    }

}
