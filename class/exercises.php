<?php
class  exercises
{
    private $url = "https://v3nj-7ddb5-default-rtdb.firebaseio.com/";
    private $jsonDados;
    private $jsonNovosDados;

    public function getJsonDados()
    {
        return $this->jsonDados;
    }

    public function setJsonDados($JsonDados): void
    {
        $this->jsonDados = $JsonDados;
    }

    public function getJsonNovosDados()
    {
        return $this->jsonNovosDados;
    }

    public function setJsonNovosDados($JsonNovosDados): void
    {
        $this->jsonNovosDados = $JsonNovosDados;
    }

    public function salvar()
    {
        $caminho = curl_init($this->url . 'exercises.json');

        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($caminho, CURLOPT_POSTFIELDS, $this->jsonDados);
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $resposta;
    }
    public function listar()
    {
        $caminho = curl_init($this->url . 'exercises.json');

        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $dados = json_decode($resposta, true);
    }
    public function excluir($id)
    {
        $node = "exercises/" . $id;
        $caminho = curl_init($this->url . $node . '.json');
        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($caminho);
        curl_close($caminho);

        return $resposta;
    }
    
    public function editar($id)
    {
        $node = "exercises/" . $id;
        $caminho = curl_init($this->url . $node . '.json');
        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);
        curl_close($caminho);

        $resposta = curl_exec($caminho);

        if ($resposta) {
            $node = "exercises/" . $id;
            $caminho = curl_init($this->url . $node . '.json');

            curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($caminho, CURLOPT_POSTFIELDS, $this->jsonNovosDados);
            curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);

            $resposta = curl_exec($caminho);
            curl_close($caminho);

            return $resposta;
        } else {
            echo "Felix qui potuit rerum cognoscere causas";
        }
    }
}
