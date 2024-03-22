<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h2 class="text-center">Novo Produto</h2>
            <form action="../helpers/validateProduct.php" method="POST">
                <div class="form-group">
                    <label for="sku">SKU:</label>
                    <input type="text" class="form-control" id="sku" name="sku" required>
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="preco">Valor:</label>
                    <input type="text" class="form-control" id="preco" name="preco" required>
                </div>
                <div class="form-group">
                    <label for="estoque">Estoque:</label>
                    <input type="number" class="form-control" id="estoque" name="estoque" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <select class="form-control" id="tipo" name="tipo" required>
                        <option value="1">Eletrônicos</option>
                        <option value="2">Livros</option>
                        <option value="3">Roupas</option>
                        <option value="4">Alimentos</option>
                        <option value="5">Móveis</option>
                        <option value="6">Brinquedos</option>
                        <option value="7">Esportes</option>
                        <option value="8">Ferramentas</option>
                        <option value="9">Decoração para Casa</option>
                        <option value="10">Jogos e Brinquedos</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="urlImagem">URL da Imagem:</label>
                    <input type="text" class="form-control" id="urlImagem" name="urlImagem" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Criar Produto</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
