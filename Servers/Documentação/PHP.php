<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>calculadora php</title>
   <meta charset = "UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style> 
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
         }
        .clock {
            font-size: 2em;
            padding: 20px;
            border: 1px solid #ccc;
            display: inline-block;
        }
             </style> 
</head> 
<body>
   <center>
    <img src="https://avatars.githubusercontent.com/u/21218780?v=4" alt="vava" height="200" width="200">
</center>
  <div>
    <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> </div> 
   <div class="clock" id="clock"></div>
<?php
   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
         $c = $a/$b;

      echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   } 
   // Define o fuso horário (ajuste conforme necessário)
  date_default_timezone_set('America/Sao_Paulo');
            
  // Obtém a hora atual
  echo date('H:i:s');
   ?>
   <script>
   function atualizarRelogio() {
       const clockElement = document.getElementById('clock');
       
       // Cria um objeto Date para obter a hora atual
       const agora = new Date();
       
       // Formata a hora, minutos e segundos
       const horas = String(agora.getHours()).padStart(2, '0');
       const minutos = String(agora.getMinutes()).padStart(2, '0');
       const segundos = String(agora.getSeconds()).padStart(2, '0');
       
       // Atualiza o conteúdo do elemento com a hora atual
       clockElement.textContent = `${horas}:${minutos}:${segundos}`; 
   }
   
   // Atualiza o relógio a cada segundo
   setInterval(atualizarRelogio, 1000);
   
   // Atualiza imediatamente ao carregar a página
   atualizarRelogio();
</script>
</body>
</html>