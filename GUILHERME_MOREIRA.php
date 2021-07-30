<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <form name="form" method="post" action="GUILHERME_MOREIRA.php">
        <input type="hidden" name="id" value="50">

        Nome <input type="text" name="nome" id="nome" autofocus required size="40"><br>

        Email <input type="email" name="email" id="email" required placeholder="guilherme.ads@hotmail.com" size="30" autocomplete="off" required> <br>

        Senha <input type="password" name="senha" id="senha" required><br>

        Endereço <input type="text" name="endereco" id="endereco" placeholder="Rua 9 de Julho" size="35" required><br>

        Número <input type="number" name="numero" id="numero" min="0" max="9999" placeholder="1072" required><br>

        Cidade <input type="text" name="cidade" id="cidade" placeholder="New York" required><br>

        Estado
        <select name="estado" id="estado" required>
        <option value="">--</option>
        <option value="PR">Paraná</option>
        <option value="SP">São Paulo</option>
        <option value="MG">Minas Gerais</option>
        <option value="SC">Santa Catarina</option>
        </select>
        <br>

        Site <input type="url" name="url" id="url"><br>

        Telefone <input type="tel" name="tel" id="tel" required><br>

        Sexo
        <input type="radio" name="sexo" id="masculino" value="masculino">masculino
        <input type="radio" name="sexo" id="feminino" value="feminino">feminino
        <br><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="limpar "value="Limpar">

    </form>
    
</body>
</html>