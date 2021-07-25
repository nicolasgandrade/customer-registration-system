<?php

    if(count($_POST) > 0){

        // Get form values
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Connect the database
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $db_name = "sistema_pedidos";

        try {

            $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password_db);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";

            $stmt = $conn->prepare("SELECT * FROM user WHERE email=:email and password=md5(:password)");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetchAll();
            $qty_users = count($result);

            if($qty_users == 1){
                $result['msg'] = 'Entrando...';
                $result['cod'] = 1;
            } else{
                $result['msg'] = 'Email e/ou senha incorreto(s)';
                $result['cod'] = 0;
            }

        } catch(PDOException $e) {
            
            echo "Connection failed: " . $e->getMessage();
        
        }
        $conn = null;
    }


    include('index.php');


?>