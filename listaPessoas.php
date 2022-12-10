
<div  id="pessoas"> 
    <?php
        require_once "dataBase.php";
        $sql="SELECT * FROM pessoa";
        $resultado=$con->query($sql);
        
        while($pessoa=$resultado->fetch_array()){
            echo 
            '<div class="card">
            <img class="card-img-top" src="'.$pessoa['foto'].'" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">'.$pessoa['nome'].'</p>
                <p class="card-text">'.$pessoa['email'].'</p>
                <a href="#" class="card-link">Editar</a>
                <a href="#" class="card-link">Excluir</a>
            </div>     
            </div>';
        }
    ?>   
</div>
