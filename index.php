<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Pedidos</title>
</head>

<body>
    
    <div class="container">
        <div class="wrapper">
            <div class="login-form">
                <form id="form_login" action="login.php" method="POST">
                    <h2 class="text-center">Autenticação</h2>
                    
                    <?php if(isset($result) && $result['cod'] == 0){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $result['msg']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php } ?>
                        
                        <div class="form-group">
                            <input name="email" id="email" type="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="form-group mt-3">
                            <input name="password" id="password" type="password" class="form-control" placeholder="Senha" required="required">
                        </div>
                        <div class="form-group mt-3">
                            <input value="Entrar" id="submit" type="submit" class="btn btn-primary btn-block"></button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
        



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>