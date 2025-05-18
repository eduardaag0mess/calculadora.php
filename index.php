<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Simples</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #f4f4f4;
      margin-top: 50px;
    }
    form {
      display: inline-block;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px #aaa;
    }
    input[type="number"] {
      width: 80px;
      padding: 5px;
      margin: 5px;
    }
    select, input[type="submit"] {
      padding: 5px 10px;
      margin: 5px;
    }
    .resultado {
      margin-top: 20px;
      font-size: 20px;
      color: #333;
    }
  </style>
</head>
<body>

<h2>Calculadora PHP</h2>
<form method="post">
  <input type="number" name="num1" step="any" required>
  <select name="operador">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">×</option>
    <option value="/">÷</option>
  </select>
  <input type="number" name="num2" step="any" required>
  <input type="submit" name="calcular" value="Calcular">
</form>

<?php
if (isset($_POST['calcular'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operador = $_POST['operador'];
  $resultado = 0;

  switch ($operador) {
    case '+':
      $resultado = $num1 + $num2;
      break;
    case '-':
      $resultado = $num1 - $num2;
      break;
    case '*':
      $resultado = $num1 * $num2;
      break;
    case '/':
      if ($num2 != 0) {
        $resultado = $num1 / $num2;
      } else {
        $resultado = "Erro: Divisão por zero!";
      }
      break;
    default:
      $resultado = "Operador inválido!";
  }

  echo "<div class='resultado'>Resultado: $resultado</div>";
}
?>

</body>
</html>
