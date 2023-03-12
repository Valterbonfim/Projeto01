<!DOCTYPE html>
<html lang="en">
<head>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
<div class="container">
    <form method="POST" action="enviar.php">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label><br />
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira seu Nome" name="nome">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label><br />
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label><br />
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>