<?php 

    switch($_GET['url']) {
        case '':
            echo "<span>Seja bem-vindo!</span>
                  <h2>Advocacia e Consultoria</h2>";
        break;

        case 'home':
            echo "<span>Seja bem-vindo!</span>
                  <h2>Advocacia e Consultoria</h2>";
        break;

        case 'sobre':
            echo "<h2>Sobre</h2>";
        break;

        case 'areas-de-atuacao':
            echo "<h2>Áreas de Atuação</h2>";
        break;

        default:
            echo "<span>Seja bem-vindo!</span>
                  <h2>Advocacia e Consultoria</h2>";
        break;
    }

?>