<?php 

class Usuario {
    
    private $conn;
    private $headerJwt = [
        'alg' => 'HS256',
        'typ' => 'JWT'
    ];
    private $keyToken = '@fjFG#';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function cadastrar($nome, $email, $senha) {

        $nome = $this->notInjection($nome);
        $email = $this->notInjection($email);
        $senha = $this->notInjection($senha);

        try {

            $token = $this->geraToken([
                'nome' => $nome,
                'email' => $email,
            ]);
            
            $sqlCadUsuario = "INSERT INTO usuario (nome,email,senha,token) VALUES "
            ."('$nome', '$email', MD5('$senha'), '$token');";

            $stmt = $this->conn->prepare($sqlCadUsuario);
            $stmt->execute();
            return true;

        } catch (\Throwable $th) {
            return false;
        }

    }

    public function geraToken($dadosUsuario) {

        $payload = json_encode($dadosUsuario);
        $payload = base64_encode($payload);

        $header = json_encode($this->headerJwt);
        $header = base64_encode($header);

        $signature = hash_hmac('sha256', "$header.$payload", $this->keyToken, true);
        $signature = base64_encode($signature);


        return "$header.$payload.$signature";
    }

    public function checkLogin($email, $senha){

        $email = $this->notInjection($email);

        try {

            $sqlCheckExistUser = "SELECT id, nome, email, token FROM usuario WHERE email = '$email' and senha = MD5('$senha')";

            $result = $this->conn->prepare($sqlCheckExistUser);

            $result->execute();

            if($result->rowCount()>0){
            
                session_start();
                $_SESSION['dadosUsuario'] = $result->fetchAll()[0];

                return true;
            }else{
                echo "nenhum registro.";
                die();
                return false;
            }
            
        } catch (\Throwable $th) {
            return false;
        }

    }

    private function notInjection ($verificado){
    
        $verificado = str_replace('"',"",$verificado);
        $verificado = str_replace("'","",$verificado);
        $verificado = str_replace('=',"",$verificado);
        $verificado = str_replace(';',"",$verificado);
        
        return $verificado;
    }
    
}

?>