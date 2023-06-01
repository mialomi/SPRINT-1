<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1_form</title>
</head>
<body>
    <form action="datos.php" method="POST"> 
<!-- action es la pagina donde irá la información del form -->
    <label for="name">
        Name:
        <input type="text" name="name">
     </label>
     <br>
     <br>
    <label for="email">
        Email:
        <input type="text" name="email">
    </label>
    <br>
    <br>
    <label for="age">
        Age:
        <input type="number" name="age">
    </label>
    </label>
    <br>
    <br>
    <button type="submit">Login</button>





    </form>
</body>
</html>