<?php
class  agenda
{
    private $url =  "https://v3nj-7ddb5-default-rtdb.firebaseio.com/";
    private $jsonDados;

    public function getJsonDados()
    {
        return $this->jsonDados;
    }

    public function setJsonDados($JsonDados): void
    {
        $this->jsonDados = $JsonDados;
    }
    public function salvar()
    {
        $caminho = curl_init($this->url . 'agenda.json');

        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($caminho, CURLOPT_POSTFIELDS, $this->jsonDados);
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $resposta;
    }
    public function listar()
    {
        $caminho = curl_init($this->url.'agenda.json');

        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $dados = json_decode($resposta, true);
    }
    public function excluir($id)
    {
        $node = "agenda/" . $id;
        $caminho = curl_init($this->url . $node . '.json');
        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "DELETE");
        

       
        curl_close($caminho);
        $resposta = curl_exec($caminho);
        return $resposta;
    }
    public function editar($id){
        $node ="agenda/". $id;
        $caminho = curl_init($this ->url . $node . '.json' );
curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, 'NODE');
curl_setopt($caminho , CURLOPT_POSTFIELDS, $this ->jsonDados);
curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);
 $resposta = curl_exec($caminho);
 if ($resposta === FALSE){
    die('Erro na requisição: ' . curl_error ($caminho));
 } 
 curl_close($caminho);

 echo $resposta;
    }
}
