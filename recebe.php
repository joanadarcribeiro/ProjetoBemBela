<!DOCTYPE html>
<htm lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title> Salão de beleza</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div class="Topo">
        <p> <img src="img/alongamento topo.jpg" alt="topo" height="300" width="350" alt="Topo"></p>
</div>
<br><br><br><br>
<h1> Saiba mais  </h1><hr><br>
<div class="pesquisa">
    <h6> Serviços<h/6>
</div>

    <div class= "conteudo">
        <?php
        $pesquisa = $_GET["pesquisa"];
        switch ($pesquisa) {
            case 'Microlink':
                echo " <h1> Alongamento Microlink</h1><br>
                <img src='img/Microlink .jpeg'<br><br>
   
                Alongamento fio a fio <br>
                Micro link 
                Nesta técnica, as mechas de cabelo são presas nos fios naturais através de anéis metálicos. Por não necessitar de 
                nenhum tipo de química na colocação, o micro link é uma técnica que também não causa danos aos fios naturais.
                 Nesta técnica, as mechas de cabelo são presas nos fios naturais através de anéis metálicos. 
                Por não necessitar de nenhum tipo de química na colocação, o micro link é uma técnica que também 
                não causa danos aos fios naturais.<br><br>
                ";
                break;

                case 'Queratina':
                    echo " <h1> Alongamento Queratina</h1><br>
                    <img src=img/Mega Hair Queratina(2).jpeg'<br><br>
       
                    Alongamento fio a fio <br>
                    Queratina
                    O alongamento é feito com cola de queratina com tufos de cabelos colados às mechas naturais<br>
                    mais ou menos com a mesma espessura do aplique.<br> As mulheres que optarem por essa técnica devem <br>
                    evitar o uso do secador, chapinha e babyliss  nas em mendas por conta do calor e por isso os cabelos <br>
                    precisam ser secados  a baixo da emendas após cada lavagem.<br>
                    A desvantagem desta técnica é que ela diminui o comprimento do cabelo a cada manutenção.<br>
                     Isso porque a cada troca, uma nova queratina deve ser reaplicada e a antiga é cortada, o que faz <br>
                    com que cerca de 1 a 1,5 centímetros de comprimento dos fios sejam cortados.<br>  
                    ";
                    break;
                    case '':
                        echo " <h1> Alongamento Tela</h1><br>
                        <img src=img/Mega Hair Queratina(2).jpeg'<br><br>
           
                        Alongamento em Tela <br>
                        Tela
                        A técnica liga os fios do alongamento aos naturais através de uma tela que é costurada rente ao 
                        couro cabeludo, de forma que ela fica quase que imperceptível. Não possui problemas com temperaturas 
                        quentes como o calor do secador, chapinha e babyliss, e para os cuidados em casa, a cliente deve sempre 
                        secar os cabelos após lavá-los. Para as mulheres que gostam de prender os cabelos e fazer penteados, 
                        essa é uma ótima opção. Mulheres com pouco cabelo, podem optar por uma tela bem fina..<br>  
                        ";
                        break;
            default:
                # code...
                break;
            }