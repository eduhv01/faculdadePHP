<?php
    include_once 'templates/topo.php';
    include_once 'templates/menu.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="/templates/estilos.css">
    <style>
        .sobre-section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .sobre-section h2 {
            text-align: center;
        }

        .sobre-section ul {
            list-style-type: none;
            padding: 0;
        }

        .sobre-section ul li {
            margin-bottom: 10px;
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
        }

        .sobre-section p {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
<section class="sobre-section">
    <h2>Sobre Nós</h2>
    <p>
        Somos uma empresa dedicada a oferecer soluções inovadoras em tecnologia da informação, com o compromisso de transformar a experiência do cliente e otimizar processos.
    </p>
    <p>
        Fundada em [ano de fundação], nossa equipe é composta por profissionais apaixonados e experientes que trabalham incansavelmente para garantir a satisfação de nossos clientes.
    </p>

    <h2>Nossos Objetivos</h2>
    <ul>
        <li><strong>Excelência no Atendimento:</strong> Oferecer um atendimento de qualidade, entendendo e atendendo às necessidades de nossos clientes.</li>
        <li><strong>Inovação Contínua:</strong> Manter-nos na vanguarda das tendências e tecnologias para proporcionar soluções eficazes e atualizadas.</li>
        <li><strong>Sustentabilidade:</strong> Promover práticas que respeitem o meio ambiente e contribuam para um futuro sustentável.</li>
        <li><strong>Crescimento Conjunto:</strong> Fomentar parcerias duradouras, onde o sucesso dos nossos clientes é também o nosso sucesso.</li>
    </ul>

</section>

<?php
    include_once 'templates/rodape.php';
?>
</body>
</html>
