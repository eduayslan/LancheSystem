<?php

namespace App\Livewire;

use App\Models\Admin;
use Livewire\Component;

class CadastroCliente extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;

    public $errorMessages = [];

    protected $rules = [
        'nome' => 'required|max:100',
        'cpf' => 'required|max:15|min:11|unique:clientes,cpf',
        'email' => 'required|max:80',
        'password' => 'required|min:6',

    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'nome.max' => 'O maxímo de de caracteres foi alcançado',
        'cpf.required' => 'O campo é obrigatório',
        'cpf.max' => 'O maxímo de de caracteres foi alcançado',
        'cpf.min' => 'O minímo de de caracteres foi alcançado',
        'cpf.unique' => 'Este CPF já está cadastrado',
        'cpf.required' => 'O campo é obrigatório',
        'cpf.min' => 'O minímo de de caracteres foi alcançado',
        'email.required' => 'O campo é obrigatório',
        'email.max' => 'O maxímo de de caracteres foi alcançado',
        'password.required' => 'A senha obrigatória',
        'password.min' => 'A senha precisa ter mais de 6 caracteres',
    ];

    public function render()
    {
        return view('livewire.cadastro-cliente');
    }

    public function store(){
        $this->validate();
        Admin::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'password'=> $this->password,
        ]);
        session()->flash('message', 'Cliente cadastrado com sucesso!');

        $this->reset();
    }
}

