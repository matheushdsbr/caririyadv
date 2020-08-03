<?php

    // ADICIONA OS TITULOS DOS BANNER
    function titlePageBanner() {
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

            case 'contato':
                echo "<h2>Contato</h2>";
            break;
    
            default:
                echo "<span>Seja bem-vindo!</span>
                      <h2>Advocacia e Consultoria</h2>";
            break;
        }
    }

    // ADICIONA A CLASSE CSS PARA DEFINIR A ALTURA DO BANNER
    function bannerHeight() {
        if($_GET['url'] == '' || $_GET['url'] == 'home') {
            echo "home";
        } else {
            echo "pages";
        }
    }

?>