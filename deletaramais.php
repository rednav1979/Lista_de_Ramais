<?phpinclude("seguranca.php"); // Inclui o arquivo com o sistema de segurançaprotegePagina(); // Chama a função que protege a páginaecho "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a) Oque Deseja Fazer Hoje?";?><?php
include "sql.php";
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM ramais WHERE id = '$id'");
$linha = mysql_num_rows($sql);

$sql = mysql_query("DELETE FROM ramais WHERE id = '$id'");


if($sql){
    header("location:listaramais.php");
}else{
    print "Não foi possivel deletar o recado. Tente mais tarde!";
}


?>
