<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" method="post" action="formulario01.php">
        <input type="hidden" name="id" value="50">

        Nome <input type='text' name='nome' id='nome' autofocus required size="50"><br>
        E-mail <input type="email" name="email" id="email" required placeholder="seuemail@dominion.com" value="email@hotmail.com" size="20" autocomplete="off"><br>
        Senha <input type="password" name="senha" id="senha" required><br>
        Cidade <input type="text" name="cidade" id="cidade" placeholder="Ipora" ><br>
        Estado
        <Select name="estado" id="estado">
        <option value="">--</option>
        <option value="PR">Paraná</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="SC">Santa Catarina</option>
        </Select>
        <br><br>
        Nascimento: <input type="date" name="nascimento" id="nascimento"><br>
        Hora: <input type="time" name="hora" id="hora"><br> 
        Numero: <input type="number" name="numero" id="numero" size="10" min="0" max="100"><br>
        Cor: <input type="color" name="cor" id="cor"><br>
        Site: <input type="url" name="url" id="url"><br>
        Anexo: <input type="file" name="anexo" id="anexo"><br>
        Botão: <input type="button" value="botao" id="botao"><br>
        Intervalo: <input type="range" name="intervalo" id="intervalo" min="0" max="10"><br>
    Telefone: <input type="tel" name="telefone" id="telefone"><br>

        <br>
        Descrição:
        <br>
        <textarea name="observacao" id="observacao" cols="40" rows="20"></textarea>
        <br>

        Quais dos esportes abaixos você pratica?<br>
        <input type="checkbox" name="esportes" value="futebol" id="futebol" >Futebol
        <input type="checkbox" name="volei" id="volei" value="volei">volei
        <input type="checkbox" name="handebol" id="handebol" value="handebol">handebol
        <input type="checkbox" name="xadrez" id="xadrez" value="xadrez">Xadrez
        <br><br> 

        Qual o seu sexo?<br>
        <input type="radio" name="sexo" id="masculino" value="masculino">masculino
        <input type="radio" name="sexo" id="feminino" value="feminino">feminino    

        <br><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="limpar" value="Limpar">
        </form>
</body>
</html>