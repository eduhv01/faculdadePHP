<?php
    include_once 'templates/topo.php';
    include_once 'templates/menu.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <style>
        section {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
<section>
    <h2>Fale Conosco</h2>
    <form action="faleconosco.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>
</section>
<?php
    include_once 'templates/rodape.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $mensagem = htmlspecialchars($_POST['mensagem']);

        echo "<p>Obrigado, $nome! Sua mensagem foi recebida.</p>";
    }
?>
</body>
</html>
