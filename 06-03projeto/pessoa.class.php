<?php
 
class Pessoa{
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Metodo get
    public function getNome(){
        return $this->nome;
    }
    //Metodo set
    public function setNome($nome){
        $this->nome = $nome;
    }


    //Metodo get
    public function getEndereco(){
        return $this->endereco;
    }
    //Metodo set
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }


    //Metodo get
    public function getBairro(){
        return $this->bairro;
    }
    //Metodo set
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }


    //Metodo get
    public function getCep(){
        return $this->cep;
    }
    //Metodo set
    public function setCep($cep){
        $this->cep = $cep;
    }


    //Metodo get
    public function getCidade(){
        return $this->cidade;
    }
    //Metodo set
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }


    //Metodo get
    public function getEstado(){
        return $this->estado;
    }
    //Metodo set
    public function setEstado($estado){
        $this->estado = $estado;
    }


}

?>