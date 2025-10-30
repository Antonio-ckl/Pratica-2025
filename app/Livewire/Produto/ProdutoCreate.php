<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $descricao;
    public $precos;
    public $quantidade;
    public $quantidade_minima;


    protected $rules=[
        'nome'=> 'required|min:3|max:30',
        'descricao'=>'required|max:40',
        'preco'=>'required|decimal',
        'quantidade'=> 'required|integer',
        'quantidade_minima'=>'required|integer'
    ];

    protected $messages = [
        'nome.required'=> 'O nome do produto é obrigatorio',
        'nome.min'=>'O minimo de caracteres são 3',
        'nome.max'=> 'O maximo de caracteres são 30',
        'descricao.required'=>'A descicao é obrigatoria',
        'descricao.max'=> 'O maximo de caracteres são 40',
        'preco.decimal'=> 'Formato de campo incorreto',
        'quantidade.required'=> 'A quantidade é obrigtoria',
        'quantidade.integer'=> 'Formato do campo incorreto',
        'quantidade_minima.required'=>'O campo é obrigatorio',
        'quantidade_minima.integer'=> 'Formato de campo incorreto'

    ];
    public function store()
    {
        $this->validate();
        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
            'quantidade_minima' => $this->quantidade_minima
        ]);
    }
    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
