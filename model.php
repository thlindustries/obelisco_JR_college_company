<?php

    //header('Access-Control-Allow-Origin: http://localhost:4200');  
    header('Access-Control-Allow-Origin: *');  
    class Info
    {//date('l jS \of F Y h:i:s A');
        private $nome;
        private $email;
        private $idade;
        private $curso;
        private $telefone;
        private $cep;
        private $logradouro;
        private $bairro;
        private $localidade;
        private $numero;

        ##CONSTRUTOR
        function __construct($nome,$email,$idade,$curso,$telefone,$cep,$logradouro,$bairro,$localidade,$numero)
        {
            $this->nome=$nome;
            $this->email=$email;
            $this->idade=$idade;   
            $this->curso=$curso; 
            $this->telefone=$telefone; 
            $this->cep=$cep; 
            $this->logradouro=$logradouro; 
            $this->bairro=$bairro;
            $this->localidade=$localidade;
            $this->numero=$numero;

        }

        ##GETTERS
        function getNome()
        {
            return $this->nome;
        }
        function getEmail()
        {
            return $this->email;        
        }
        function getIdade()
        {
            return $this->idade;        
        }
        function getCurso()
        {
            return $this->curso;        
        }
        function getTelefone()
        {
            return $this->telefone;        
        }
        function getCep()
        {
            return $this->cep;        
        }
        function getLogradouro()
        {
            return $this->logradouro;        
        }
        function getBairro()
        {
            return $this->bairro;        
        }
        function getLocalidade()
        {
            return $this->localidade;        
        }
        function getNumero()
        {
            return $this->numero;        
        }

        ##SETTERS
        function setNome()
        {
            $this->nome = $nome;
        }
        function setEmail()
        {
            $this->email = $email;        
        }
        function setIdade()
        {
            $this->idade = $idade;        
        }
        function setCurso()
        {
            $this->curso = $curso;        
        }
        function setTelefone()
        {
            $this->telefone = $telefone;        
        }
        function setCep()
        {
            $this->cep = $cep;        
        }
        function setLogradouro()
        {
            $this->logradouro = $logradouro;        
        }
        function setBairro()
        {
            $this->bairro = $bairro;        
        }
        function setLocalidade()
        {
            $this->localidade = $localidade;        
        }
        function setNumero()
        {
            $this->numero = $numero;        
        }
    }

    #PARAMETROS DE CONEXAO COM O BANCO
    $host='';
    $dbuser='obelisco';
    $dbpwd='Google2#';
    //$dbuser='obelisco';
    //$dbpwd='Gmail2#';
    $database='info_cliente';

    $conexao= mysqli_connect($host,$dbuser,$dbpwd,$database);
    $conectado="ZERADO";
    #PARAMETROS DE CONEXAO COM O BANCO


    //var dados= {no:nome,em:email,id:idade,cu:curso,tel:telefone,ce:cep,lo:logradouro,ba:bairro,loc:localidade,nu:numero};
    $objeto=$_REQUEST['model'];
    
    
    #PUXANDO DADOS DO HTML-->JS
    $cep=$objeto['cep'];
    $logradouro=$objeto['logradouro'];
    $bairro=$objeto['bairro'];
    $localidade=$objeto['localidade'];
    // $nome=$objeto['no'];
    // $email=$objeto['em'];
    // $idade=$objeto['id'];
    // $curso=$objeto['cu'];
    // $telefone=$objeto['tel'];
    // $numero=$objeto['nu'];
    #PUXANDO DADOS DO HTML-->JS

    // $pessoa = new Info($nome,$email,$idade,$curso,$telefone,$cep,$logradouro,$bairro,$localidade,$numero);

    //var_dump($pessoa);
    //echo $criança;

    // if(mysqli_connect_error())
    // {
    //     $erro = $conexao->error;
    //     $conectado="Não conectou    ".$conexao->error;
    // }
    // else
    // {
    //     $conectado="Conectou ao banco!";

    //     $query='insert into info (nome,email,idade,curso,telefone,cep,logradouro,bairro,localidade,numero) values ("'.$pessoa->getNome().'","'.$pessoa->getEmail().'","'.$pessoa->getIdade().'","'.$pessoa->getCurso().'","'.$pessoa->getTelefone().'","'.$pessoa->getCep().'","'.$pessoa->getLogradouro().'","'.$pessoa->getBairro().'","'.$pessoa->getLocalidade().'","'.$pessoa->getNumero().'");';
    //     #Tratando Query
    //     if(mysqli_query($conexao,$query))
    //     {
    //         $sucesso = "Cadastro efetuado com sucesso";
    //     }
    //     else
    //     {
    //         $sucesso = $conexao->error;
    //     }
    //     #Tratando Query
    // }
    //echo $sucesso;
    $teste = array($cep,$logradouro,$bairro,$localidade);
    //$teste = var_dump($objeto);
    echo json_encode($teste);
    
    //print_r(var_dump($objeto));
    //echo $teste;
?>