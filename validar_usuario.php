<?php
require_once('./conexao.php');

$txtLogin = $_POST['txtLogin'];
$txtSenha = $_POST['txtSenha'];

echo "<br />";
echo "Login: $txtLogin, Senha: $txtSenha";

if ($txtLogin && $txtSenha !== '' ) {
    echo "Usuário encontrado!.";
} else {
    echo "Erro";
}

?>
