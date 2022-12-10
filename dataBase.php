<?php
    
    $con = mysqli_connect("localhost:3306","root","paçoquinha%","sites_dois");
    
    if (mysqli_connect_errno())
    {
        echo "Falha: ".mysqli_connect_error();
    }