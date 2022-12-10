<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div style="width:60vw; margin:0 auto;">
            <h1>Login</h1>
            <hr/>
            <form method="post" action="<?php echo URL_BASE?>autenticar.php">
    <div class="form-group" style="margin:10px">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com seu email" style="width:400px">
        <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
    </div>
    <div class="form-group" style="margin:10px">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Entre com sua senha" style="width:400px">
    </div>
        
        <button type="submit"  name="submit" class="btn btn-primary" style="margin:10px">Enviar</button>
        </form>
    </div>
    
</body>
</html>