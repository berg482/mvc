<?php
namespace src\models;
use \core\Model;

class usuario extends Model {
    public $id;
    public $nome;
    public $email;
    public $cpf;
    public $permissao;
}