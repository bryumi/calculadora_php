<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calculadora PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Calculadora</h2>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
      <label for="op1">Op1:</label>
      <input type="number" class="form-control" id="op1" placeholder="Digite um numero" name="op1">
    </div>
    <div class="form-group">
      <label for="op2">Op2:</label>
      <input type="number" class="form-control" id="op2" placeholder="Digite um numero" name="op2">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="operacao" value="soma">Soma</label>
      <label><input type="checkbox" name="operacao" value="subtracao">Subtração</label>
      <label><input type="checkbox" name="operacao" value="divisao">Divisão</label>
      <label><input type="checkbox" name="operacao" value="multiplicacao">Multiplicação</label>
      <label><input type="checkbox" name="operacao" value="maior">Maior</label>
      <label><input type="checkbox" name="operacao" value="menor">Menor</label>
      <label><input type="checkbox" name="operacao" value="exponenciacao">Exponenciação</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


<div style="padding: 4rem;">
   <?php
   if(isset($_POST['op1']) && isset($_POST['op2']) && isset($_POST['operacao'])){
        $op1 = $_POST['op1'];
        $op2 = $_POST['op2'];
        $operacao = $_POST['operacao'];
        $resultado;
       Calcular();
   }


    function Soma(){
        global $op1, $op2, $resultado;
        $resultado = $op1+$op2;
        return "O resultado de $op1 mais $op2 é igual a $resultado";
    }

    function Subtracao(){
        global $op1, $op2, $operacao, $resultado;
        $resultado = $op1-$op2;
        return $resultado;
    }

    function Multiplicacao(){
        global $op1, $op2, $resultado;
        $resultado = $op1*$op2;
        return $resultado;
    }
    function Divisao(){
        global $op1, $op2, $resultado;
        $resultado = $op1/$op2;
        return $resultado;
    }
    function Maior(){
        global $op1, $op2;
        if($op1>$op2){
            return $op1;
        } else if ($op1<$op2){
            return $op2;
        } else{
            return " Não há.<br> Os valores são iguais";
        }
    }
        function Menor(){
        global $op1, $op2;
        if($op1<$op2){
            return $op1;
        } else if ($op1>$op2){
            return $op2;
        } else{
            return " Não há.<br> Os valores são iguais";
        }
    }
    
        function Exponenciacao(){
        global $op1, $op2, $resultado;
        $resultado = pow($op1, $op2);
        return $resultado;
    }
    function Calcular(){
        global $operacao, $op1, $op2, $resultado;
        switch($operacao){
        case 'soma';
           Soma();
           echo"O resultado da operação de $operacao entre $op1 e $op2 é $resultado<br>";
            break;
        case 'subtracao';
            Subtracao();
             echo"O resultado da operação de $operacao entre $op1 e $op2 é $resultado<br>";
            break;
        case 'multiplicacao';
            Multiplicacao();
             echo"O resultado da operação de $operacao entre $op1 e $op2 é $resultado<br>";
            break;
        case 'divisao';
            Divisao();
             echo"O resultado da operação de $operacao entre $op1 e $op2 é $resultado<br>";
            break;
        case 'maior';
             echo"O maior numero é: ". Maior();
            break;
        case 'menor';
            echo"O menor numero é: ". Menor();
            break;
        case 'exponenciacao';
            Exponenciacao();
             echo"O resultado da operação de $operacao entre $op1 e $op2 é $resultado<br>";
        break;
            
        }  
        
    }

       
?> 
    
</div>

</body>
</html>