<?php

/*No começo do nosso código, vamos ver algumas declarações variáveis e valores atribuídos a essas variáveis. Normalmente, precisamos de quatro deles para estabelecer uma conexão de banco de dados apropriada: $servername, $database, $username, e $password.*/

$servername = "localhost";
$database = "CEmp";
$username = "root";
$password = "";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Checar conexão
//if (!$conn) {
    /*Se a conexão não foi bem-sucedida, então a função die() é executada. Isso basicamente mata o nosso script e nos apresenta o erro de mensagem de conexão que definimos. Por padrão, o erro de conexão MySQL vai dizer Conexão falhou seguido de uma mensagem de erro exata descrevendo o problema.*/
//    die("Conexão falhou: " . mysqli_connect_error());
//}

/*Por outro lado, se a conexão MySQL foi bem-sucedida, o código vai imprimir Conectado com sucesso ao invés disso.*/
//echo "Conexão realizada com sucesso";

/*A última parte do código é mysqli_close, que simplesmente vai fechar a conexão com o banco de dados de modo manual. Se isso não for especificado, as conexões MySQL vão fechar por conta própria quando o script for encerrado.*/
//mysqli_close($conn);
?>