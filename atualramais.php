<?php
 ini_set('default_charset','ISO-8859-1');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    

    <script type="text/javascript" src="script.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body onLoad="abrePop()">
    <div id="art-page-background-gradient"></div>
    <div id="art-main">
        <div class="art-Sheet">
                
        
                                       
                        <h1 id="name-text" class="art-Logo-name"><a href="#">LISTA DE RAMAIS - COSTASUL</a></h1>
                        
                        <div id="slogan-text" class="art-Logo-text">Tecnologia da Informação</div>
                        
                    </div>
                </div>
                <div class="art-contentLayout">                    
                                              
                        
                                                                              
                                         
                                        </h2>
                                     Hoje, 
                                        

<script language=javascript>
function janelaSecundaria (URL){
   window.open(URL,"janela1","width=1000,height=600,scrollbars=YES")
}


</script> 
                                        
                                        <script Language="JavaScript">
<!--
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday; 

if(myday == 0)
day = " Domingo, " 

else if(myday == 1)
day = " Segunda - Feira, " 

else if(myday == 2)
day = " Terça - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " Sábado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Março " 

else if(mymonth ==3)
month = "Abril " 

else if(mymonth ==4)
month = "Maio " 

else if(mymonth ==5)
month = "Junho " 

else if(mymonth ==6)
month = "Julho " 

else if(mymonth ==7)
month = "Agosto " 

else if(mymonth ==8)
month = "Setembro " 

else if(mymonth ==9)
month = "Outubro " 

else if(mymonth ==10)
month = "Novembro " 

else if(mymonth ==11)
month = "Dezembro " 

document.write("<font face=arial, size=2>"+ day);
document.write(myweekday+" de "+month+ "</font>");
// -->


                </script>
                                        
de 2015.   

<?php

include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a) Oque Deseja Fazer Hoje?";
?>

<?php



include "sql.php";

if(isset($_POST['done'])){



    $id = $_POST['id']; 

    $ramal = $_POST['ramal'];
    $colaborador = $_POST['colaborador'];

    $departamento = $_POST['departamento'];



    

    if(empty($ramal) || empty($colaborador) || empty($departamento)){

        $erro = "Opa, vocÃª deve preencher todos os campos";

    }else{

        

       $sql = mysql_query("UPDATE ramais SET ramal='$ramal', colaborador='$colaborador', departamento='$departamento' WHERE id='$id'")or die(mysql_error());

	   $linha = mysql_affected_rows();

            if($linha == 1){

                $erro = "Dados alterados com sucesso!";

              } else{

                  $erro = "Não foi possivel alterar os dados";

              }

    }

}

$id = $_GET['id'];

$sql = mysql_query("SELECT * FROM ramais  WHERE id = '$id'");

$ramal = @mysql_result($sql, 0, "ramal");

$colaborador = @mysql_result($sql, 0, "colaborador");

$departamento = @mysql_result($sql, 0, "departamento");

$id = @mysql_result($sql, 0, "id");



?>





<form name="form1" action="atualramais.php" method="POST" style="padding-top:40px;">

<?php

if(isset($erro)){

    print '<div style="width:80%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';

}

?>
<blockquote>
<table border="0" >

<thead>

<tr>

<th colspan="2">.:: Atualizar Ramais ::.</th>

</tr>

</thead>

<tbody>

<tr>

<td width="14%">Ramal:</td>

<td width="86%"><input type="text" name="ramal" id="ramal" value="<?php echo $ramal; ?>" class="campo" /></td>

</tr>
<tr>

<td>Colaborador:</td>

<td><input type="text" name="colaborador" id="colaborador" value="<?php echo $colaborador; ?>"  class="campo"/>

</td>

</tr>

<tr>

<td>Departamento:</td>

<td>

   <input type="text" name="departamento"  id="departamento" value="<?php echo $departamento; ?>"  class="campo"/>

</td>

</tr>

<tr>

<td></td>

<td><input type="submit" value="Atualizar" />

  <input type="button" name="button" id="button" onclick="javascript:location.href='listaramais.php';" value="Cancelar" />

  <input type="hidden" name="done" value="" /><input name="id" type="hidden" value="<?php echo $id; ?>" /></td>

</tr>

</tbody>

</table>

</form>
</blockquote>
<a href=menu.php><img src=/images/voltar.png></a>
</body>
</html>
