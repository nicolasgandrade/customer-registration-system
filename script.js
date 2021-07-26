var i = 1

function addOrder(divName){
    var newDiv = document.createElement('div');

    newDiv.innerHTML += '<div class="row"><div class="col-8"><input name="product[]" type="text" class="form-control mt-2" placeholder="Nome do produto"></div><div class="col-4"><input name="qty[]" type="number" class="form-control mt-2" min="1" placeholder="Qtd."></div></div>'
    document.getElementById(divName).appendChild(newDiv); 
    i++;  
}

addOrder("order")
