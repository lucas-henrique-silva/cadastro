<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/php/_css/estilo.css">
    <title>Bem-vindo!!</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de Usuários</h1>
            <hr>
            <br>
            <br>

            <form action="processa.php" method="post">
                <input type="submit" value="Salva" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br>
                <br>

                Nome<br>
                <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                Email<br>
                <input type="email" name="email" class="campo" maxlength="50" required><br>
                Profissão<br>
                <input type="text" name="profissao" class="campo" maxlength="40" required><br>

            </form>
        </section>
    </div>
</body>
</html>