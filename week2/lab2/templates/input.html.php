<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Input</title>
</head>

<body>
   <form action="index.php" method="post">
      Value 1: <input type="text" name="val1" id="" size="5" required>
      <br><br>
      Value 2: <input type="text" name="val2" id="" size="5" required>
      <hr>
      Calculation:
      <br>
      <input type="radio" name="calc" value="add"> Add
      <input type="radio" name="calc" value="sub"> Subtract
      <input type="radio" name="calc" value="mul"> Multiply
      <input type="radio" name="calc" value="div"> Divide
      <br><br>
      <input type="submit" value="Calculate">
      <input type="reset" value="Clear">
   </form>
</body>

</html>