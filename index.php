<?php
session_start();
    if(!isset($_SESSION['user'])){
    header("Location: login.php");
    }
    include "config.php";
    include "./template/header.php";

?>



<main>
    
    <div class="form-row" style="padding:5px width:100%">
                
        <form method="POST" enctype="multipart/form-data">
            <div id="formulario">
                <h4 class="card-title" style="margin:10px">Cadastre-se agora:</h4>
                <div class="col-sm-4" style="margin:5px;  width: 400px">
                    <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="nome">
                </div>
                <div class="col-sm-4" style="margin:5px;  width: 400px">
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email">
                </div>
                <div class="col-sm-4" style="margin:5px; width: 400px">
                    <input type="file" name="foto" class="form-control" >
                </div>
                <div style="margin:10px">
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
                </div>
            </div>
        </form>
    
    </div>
    <hr/>

    <?php
        if(isset($_POST['enviar'])){
            $arquivo="./imagens/".$_FILES["foto"]["name"];
            if(move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo)){
                require_once "dataBase.php";
            $sql = "INSERT INTO pessoa (nome, email, foto)VALUES('{$_POST['nome']}','{$_POST['email']}','{$arquivo}')";
                echo $sql;

                if(!$con->query($sql)){
                    echo "Falha ao salvar registro!";
                }

            }
        }

        include "listaPessoas.php";
    ?>
    </main>

</body>

<?php
      include "./template/footer.php";
  ?>


</html>