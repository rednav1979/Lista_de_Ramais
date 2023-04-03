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
    
     <style type="text/css">
   .tabela{
   background:images/Page-BgTexture.jpg;
   width:500px;
   padding:0px;
   border:1px solid #f0f0f0;
   float:left;
   margin-right:20px;
   }
   .td{
   #ffffff;
   width:50px;
   height:20px;
   text-align:center;
   
   }
   .hj{
   background: #FFFFCC;
   width:50px;
   height:20px;
   text-align:center;
   }
   .dom{
   background: #FFCC99;
   width:50px;
   height:20px;
   text-align:center;
   }
   .evt{
   background: #00cc59;
   width:50px;
   height:20px;
   text-align:center;
   }
   .mes{
   background:orange;
   width:auto;
   height:20px;
   text-align:center;
   }
   .show{
   background:red;
   width:500px;
   height:30px;
   text-align:left;
   font-size:12px;
   font-weight:bold;
   color:#CCFF00;
   padding-left:5px;
   }
   .linha{
   background:0;
   width:500px;
   height:20px;
   text-align:left;
   font-size:11px;
   color:#f0f0f0;
   padding:1px 1px 1px 10px;
   }
   .sem{
   background: images/Page-BgTexture.jpg;
   width:auto;
   height:20px;
   text-align:center;
   font-size:12px;
   font-weight:bold;
   font-family:Verdana;
   }
   body,td,th {
           font-family: Verdana;
           font-size: 11px;
           color: #000000;
   }
   a:link {
           color: #000000;
           text-decoration: none;
   }
   a:visited {
           text-decoration: none;
           color: #000000;
   }
   a:hover {
           text-decoration: underline;
           color: #FF9900;
   }
   a:active {
           text-decoration: none;
   }
   </style>

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
                                        

<?php

include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Olá, " . $_SESSION['usuarioNome']." Seja bem vindo(a) Oque Deseja Fazer Hoje?";
?> 

<br><br>
<blockquote>
<font size=6>
MENU DE ACESSO 
</font>
</blockquote>

<a href="/ti/lista_ramais/cadastra.php"><img src=images/incluir.png>[INCLUIR]</a>	
<a href="/ti/lista_ramais/listaramais.php"><img src=images/alterar.png>[EDITAR ]</a>

   
</body>
</html>
