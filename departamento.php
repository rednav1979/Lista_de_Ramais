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
                                        


   <blockquote>
                                                    <p>
                                                      <b> Pesquisar Ramal...</b>
                                                       <p>



<form name="form1" action="ramal_like.php" method="POST">

<thead>
<td>Pesquisar Por Nome?:
<br>
<input type="text" name="ramal_pesquisa" id="ramal_pesquisa" class="campo"/></td></tr>




<tr>
<td></td>
<td><input type="submit" value="Pesquisar" /><input type="hidden" name="done"  value="" /></td>
</tr>


</tbody>

</table>

</form>
                                                </blockquote>
												
<blockquote>
<p>Ordenar Por?</p>
<ul>
<li><a href=ramal.php>Ramal</a>
<li><a href=colaborador.php>Colaborador</a>
<li><a href=departamento.php>Setor</a>
</ul>
</blockquote>												
												
												<?php 
   include "sql.php";//conexão com o banco de dados
   
   @mysql_select_db($db);//selecione o banco de dados
   




           $sqltudo = mysql_query("SELECT * FROM ramais ORDER BY departamento")  or die(mysql_error());
           $colunas = mysql_num_rows($sqltudo);
	   print'<br>';	
	
	   print'<br>';	
	   	
           print'<table border=1  bordercolor="#00BFFF">';
	   print'<tr>';
	   print'<td><b>RAMAL</td>';
	   print'<td><b>COLABORADOR</td>';
	   print'<td><b>DEPARTAMENTO</td>';
	   print'</tr></b>';




           for($j = 0; $j < $colunas; $j++){/*caso no mesmo dia tenha mais eventos continua imprimindo */
           $ramal = @mysql_result($sqltudo, $j, "ramal");/*pegando os valores do banco referente ao evento*/
           $colaborador = @mysql_result($sqltudo, $j, "colaborador");
           $departamento = @mysql_result($sqltudo, $j, "departamento");






	   /*print '<table border=1>';/*monta a tabela de eventos*/

	   print'<tr>';
	   print '<td>'.$ramal.'	</td>';
	   print '<td>'.$colaborador.'</td>';
	   print '<td>'.$departamento.'</td>';
	   print '</tr>';	
           }
	   print'</table>';

	


?>

 
</body>
</html>
