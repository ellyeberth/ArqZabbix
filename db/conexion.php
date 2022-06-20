<?php
	define('HOST','localhost');
	define('DB','bd_arqzabbix');
	define('USER','root');
	define('PASS','');

    /*
	O arquivo vai tentar conectar com o banco de dados. Se não conseguir, não vai mostrar os erros nem mostrar a senha.
	Se não conseguir, a mensagem de erro está na variável $erro.
	*/

	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Conectado com sucesso";
	}catch(Exception $erro){
		echo 'Erro ao conectar';
	}


    if (isset($_POST['enviar'])) {
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
    
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H:i:s');
    
        $sql = $pdo->prepare("INSERT INTO `contato` VALUES (null,?,?,?,?)");
        $sql->execute(array($email, $assunto, $mensagem, $data));
    
        echo "
            <script>
            alert('Sua mensagem foi enviada com sucesso. Entraremos em contato em breve Obrigadoo! :)')
            </script>
        ";
    }
	
?>

