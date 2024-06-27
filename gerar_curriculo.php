<script src="script.js"></script>

<?php

 echo '<style>
        body {
            background-color: #212121;
        }
    </style>';

    echo '<style>
    @media print {
    .buttonprint {
        display: none !important;
        }
    }
        </style>';

    
    echo '<style>
            h1,h3,p, ul {
                color: #FFFFFF;
                margin-left: 10%;
                font-family: Arial;
            }
        </style>';

        echo '<style>
            .buttonprint {
                background-color: aqua;
                border: none;
                border-radius: 20px;
                padding-left: 50px; 
                padding-right: 50px;
                padding-top: 20px;
                padding-bottom: 20px;
                display: block;
                margin: auto;
                cursor: pointer;
            }
        
        </style>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['tel'];
    $formacao = $_POST['formacao'];
    $objetivo = $_POST['objetivo'];

    $dataEscolhida = new DateTime($data);
    $dataHoje = new DateTime();
    $idade = $dataHoje->diff($dataEscolhida)->y;


    echo "<h1>Currículo de $nome</h1>";
    echo "<p>Idade: $idade anos</p>";
    echo "<p>E-mail: $email </p>";
    echo "<p> Endereço: $endereco </p>";
    echo "<p> Telefone: $telefone </p>";
    echo "<p> Formação: $formacao </p>";
    echo "<p>Objetivo: $objetivo </p>";
    echo "<h3>Experiências:</h3>";



    if (isset($_POST['experiencias']) && is_array($_POST['experiencias'])) {
        echo "<ul>";
        foreach ($_POST['experiencias'] as $experiencia) {
            echo "<li>$experiencia</li>";
        }
        echo "</ul>";
    }
    echo '<button onclick="imprimir()" class="buttonprint"> Imprimir Currículo </button>';

}
