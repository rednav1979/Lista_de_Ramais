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
                        
                        <div id="slogan-text" class="art-Logo-text">Tecnologia da Informa��o</div>
                        
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
day = " Ter�a - Feira, " 

else if(myday == 3)
day = " Quarta - Feira, " 

else if(myday == 4)
day = " Quinta - Feira, " 

else if(myday == 5)
day = " Sexta - Feira, " 

else if(myday == 6)
day = " S�bado, " 

if(mymonth == 0)
month = "Janeiro " 

else if(mymonth ==1)
month = "Fevereiro " 

else if(mymonth ==2)
month = "Mar�o " 

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
                                        

<br>
<br>
<br>

<?php

include "sql.php";

		

$max = 100;



$pagina = $_GET['pagina'];

if(!$pagina){

	$inicio = 0;

	$pagina = 1;

}else{

$inicio = ($pagina - 1) * $max;

}



$sqln = mysql_query("SELECT * FROM ramais ORDER BY id DESC");

$num = mysql_num_rows($sqln);



if($num == 0){

print "At� o momento n�o temos nenhum Ramal Cadastrado";

}else{



$total_paginas = ceil($num/$max);



print  "Temos ".$num."  Ramais cadastrados no site.<br>";
print '<br>';
print "Listando a p�gina ".$pagina." de ".$total_paginas."!";



$sqln = mysql_query("SELECT * FROM ramais ORDER BY id DESC LIMIT ".$inicio.",".$max."");

$num = mysql_num_rows($sqln);

}

?>

	 </div>

<fieldset style="width:90%; margin:0 auto;">

<legend>Ramais Cadastrados</legend>



  <?php

  print '<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="10%" align="center" bgcolor="#202020" class="fonte">.:: N� ::.</td>

    <td align="left" bgcolor="#202020" class="fonte">.:: Ramais ::.</td>

    <td align="left" bgcolor="#202020" class="fonte">.:: Colaborador ::.</td>


    <td colspan="2" align="center" bgcolor="#202020" class="fonte" width="15%">.:: A��es ::.</td>

  </tr>';

  

  for($i = 0; $i < $num; $i++){

  $ramal = @mysql_result($sqln, $i, "ramal");

  $colaborador = @mysql_result($sqln, $i, "colaborador");


  $id = @mysql_result($sqln, $i, "id");

  $n = $i + 1;

  $d = $i % 2;

  if($d == 0){$cor = "cinza";}else{$cor = "claro"; }

  print '<tr class='.$cor.'>';

  print '<td align="center">'.$id.'</td>';

  print '<td>'.$ramal.'</td>';

  print '<td>'.$colaborador.'</td>';


  print '<td align="center"><a href="atualramais.php?id='.$id.'">Altualizar</a></td>';

  print '<td align="center"><a href="deletaramais.php?id='.$id.'">Excluir</a></td>';

  print '</tr>';

  }

  

  print '</table>';

 print '<div style="text-align:center; margin-top: 30px;">';

if($pagina != 1){

print '<a href="listaramais.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina - 1).'"><< anterior</a>';

}else{

    print '<span style="color: #ccc;"><< anterior </span>';

}

if ($total_paginas > 1){ 

    for ($i=1; $i <= $total_paginas; $i++){ 

       if ($pagina == $i){        

          echo "<span class='al'> [".$pagina."] </span>"; 

       }else{           

          echo "<a href=\"listaramais.php?" . $_SERVER['QUERY_STRING']."&pagina=".$i."\">&nbsp;".$i."&nbsp;</a> "; 

		  }

    } 

} 

if($pagina < $total_paginas){

print '<a href="listaramais.php?'. $_SERVER['QUERY_STRING']. "&pagina=".($pagina + 1).'">próxima >></a>';

}else{

    print '<span style="color: #ccc;"> pr�xima >></span>';

}

print '</div>';

 



        

print '</table>';
  ?>
  
<a href=menu.php><img src=/images/voltar.png></a>
  
 
</body>
</html>
