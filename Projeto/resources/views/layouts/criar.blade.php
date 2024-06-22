<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <form action='{{route("cliente.store")}}' method='POST'>
    @csrf
    <label>Nome</label>
    <input type="text" name='Name' id='nome'>
    <label for="">Telefone</label>
    <input type="text" name="Telefone" id="telefone">
    <label for="">Cidade</label>
    <input type="text" name="Cidade" id="cidade">
    <label for="">Produto</label>
    <input type="text" name="Produto" id="produto">
    <label for="">Tipo de compra</label>
    <input type="text" name="Tipo de compra" id="tipo de compra">
    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>