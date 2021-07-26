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
    
    <div class="container p-5">
        <div class="card">
            <div class="card-header p-3">
                <h2>Cadastrar novo pedido:</h2>
            </div>
            <div class="card-body mt-3">
                <form action="register_order.php" method="POST" class="p-3">

                    <label for="product_name">Pedido:</label>
                    <div id="order" class="form-group"></div>

                    <button type="button" onclick="addOrder('order')" class="btn btn-primary mt-3">+</button>     
                    
                    <label for="obs" class="mt-4">Observações:</label>
                    <textarea name="obs" id="obs" class="form-control mt-3" cols="30" rows="4"></textarea>
                    
                    <hr>

                    <button type="submit" class="btn btn-success mt-2 p-3">PRÓXIMO</button>
                </form>
            </div>
        </div>
    </div>
        


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>