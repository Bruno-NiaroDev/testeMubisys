<?php 

class Usuario {
    
    private $conn;
    private $headerJwt = base64_encode(json_encode([
        'typ'=> 'JWT',
        'alg' => 'HS256'
    ]));
    private $keyToken = '@fjFG#';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function cadastrar($nome, $email, $senha) {

        try {

            $token = $this->geraToken([
                'nome' => $nome,
                'email' => $email,
                'senha' => md5($senha)
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

    private function geraToken($dadosUsuario) {

        $payload = base64_encode(json_encode($dadosUsuario));

        $sign = base64_encode(hash_hmac(
            'sha256', 
            $this->headerJwt, 
            $payload, 
            $this->keyToken, 
            true
        ));

        return $this->headerJwt.'.'.$payload.'.'.$sign;
    }
    
}

?>