<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "conexao.php";

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $inserir = "INSERT INTO `ppctable`(`nome`, `email`, `assunto`, `mensagem`) value ('" .$nome. "', '" .$email. "', '" .$assunto. "', '" .$mensagem. "')";
        mysqli_query($conexao, $inserir);
        echo "<script>alert('Olá! " .$nome. " A sua mensagem foi enviada com sucesso... Podes aguardar por uma resposta dentre em breve.')</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="utf-8">
    <title>Pestanna Catumbella</title>
    <link rel="stylesheet" href="MyCSS/style.css">
    <link rel="stylesheet" href="MyCSS/bootstrap.min.css">

    <script type="text/javascript" src="validacao.js"></script>
    <script type="text/javascript" src="MyJS/jquery.js"></script>
    <script type="text/javascript" src="MyJS/popper.js"></script>
    <script type="text/javascript" src="MyJS/bootstrap.js"></script>
</head>
<body>

<div class="div-main bg-dark fixed-top">
    <nav class="container">
        <div class="row">
            <div class="col-lg-12 header">
                <ul class="Menu nav">
                    <li class="nav-item"><a href="#eu" class="nav-link"><b>Eu</b></a></li>
                    <li class="nav-item"><a href="#trabalho" class="nav-link"><b>Trabalho</b></a></li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link"><b>Portfólio</b></a></li>
                    <li class="nav-item"><a href="#contacto" class="nav-link"><b>Contacto</b></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div id="eu">
    <div class="bg-main">
        <div class="container">
            <div class="row text-center mt-5">
                <div id="imagem-principal" class="col-xl-4 col-lg-offset-2">
                    <span class="ip"><img src="imagens/MyPhoto.png" alt="Minha Foto" class="img"/></span>
                </div>

                <div class="col-xl-8 col-lg-offset-2" style="position: relative; margin-top: 7%; margin-bottom: 7%;">
                    <h1 class="text-white"><b>Olá! Eu sou Pestanna Catumbella</b></h1>

                    <p class="mytext my-4">
                        Desenvolvedor <strong class="text">WEB</strong>, e actualmente trabalho como
                        <strong class="text">free-lancer</strong> tendo como linguagem favorita
                        <strong class="text">JavaScript</strong>.
                    </p>
                    <button class="btn btn-light" id="botao" data-toggle="modal" data-target="#modalSite">
                        <b>Mais informações sobre mim...</b>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-offset-2">
                    <h4 class="text-center my-5"><b>Minhas Frases</b></h4>

                    <div class="carousel slide my-5" data-ride="carousel">
                        <div class="carousel-inner" style="position: absolute">
                            <div class="carousel-item active">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        Pessoas perfeitas não existem, mas existem pessoas capazes
                                        de dar tudo para te ver feliz; se sacrificando por você...
                                        O que não está muito longe da perfeição.
                                    </blockquote>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        Dependa de si mesmo e confie nos outros, porque:
                                        Depender é estar sujeito a sircunstância e situações;
                                        já confiar é acreditar na sinceridade e nas boas intenções de alguém.

                                    </blockquote>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        Sabes qual é o fim de um problema? O início de outro.
                                    </blockquote>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        O dia que você mais teme, pode ser o melhor dia da tua vida. Acredita!!!
                                    </blockquote>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        O tempo se torna uma eternidade quando fazemos nada e eperamos anciosamente a vinda de alguma coisa.
                                    </blockquote>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        Não se atrapalha a sentir o que você não tem, apenas trabalhe duro para teres o que sentir.
                                    </blockquote>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        Em Mil(1000) faltas de respeito um(1) pedido de desculpa basta.
                                    </blockquote>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-12">
                                    <blockquote class="blockquote text-center">
                                        Existem Anjos no céu e Sereias no mar, então ecredite que o que tem que
                                        ser será; porquê chorar se podes sorrir! pois o mundo está dentro de ti.
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br>
    </div>
</div>

<div class="trabalho" id="trabalho">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-offset-2">
                <h4 class="text-center text-white my-5"><b>Esperiências de Trabalho</b></h4>

                <div class="row">
                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-5">
                            <div class="my-5">
                                <div class="text-center mb-2">
                                    <img src="Imagens/Icon-trabalho.png">
                                </div>
                                <h5 class="text-center"><b>Bumba Builder</b></h5>
                                <br>

                                <p class="text-center text-black-50">
                                    Tabalhei na Empresa Bumba Builder como Desenvolvedor Web,
                                    FullStack. Foi a minha maior experiência como programador.
                                </p>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-3">
                            <div class="my-5">
                                <div class="text-center mb-2">
                                    <img src="Imagens/Icon-trabalho.png">
                                </div>
                                <h5 class="text-center"><b>Oh Grupo</b></h5>
                                <br>

                                <p class="text-center text-black-50">
                                    Pertenci a uma organização de programadores que tinha
                                    como finalidade, organizar eventos relacionados as TIC's.
                                    Foi uma esperiência única.
                                </p>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-5">
                            <div class="my-5">
                                <div class="text-center mb-2">
                                    <img src="Imagens/Icon-trabalho.png">
                                </div>
                                <h5 class="text-center"><b>Scorpion Company</b></h5>
                                <br>

                                <p class="text-center text-black-50">
                                    Pertenci na organização Scorpion Company desenvolvendo
                                    projectos Web para outras empresas deixando um legado
                                    no mercado Angolano.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="collapse" id="mais-trabalhos">
                    <div class="row">
                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-5">
                                <div class="my-5">
                                    <div class="text-center mb-2">
                                        <img src="Imagens/Icon-trabalho.png">
                                    </div>
                                    <h5 class="text-center"><b>Timóteo Ulika</b></h5>
                                    <br>

                                    <p class="text-center text-black-50">
                                        Prestei inúmeros servíços nesta instituição
                                        relacionado a programação. Fazendo os Sites de
                                        Publicidades, sistemas de gestão etc.
                                    </p>
                                </div>
                            </section>
                        </div>

                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-3">
                                <div class="my-5">
                                    <div class="text-center mb-2">
                                        <img src="Imagens/Icon-trabalho.png">
                                    </div>
                                    <h5 class="text-center"><b>PPC</b></h5>
                                    <br>

                                    <p class="text-center text-black-50">
                                        Pertenci a esta grande organização de programadores
                                        desenvolvendo sistemas para pequenas médias e
                                        grandes empresas.
                                    </p>
                                </div>
                            </section>
                        </div>

                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-5">
                                <div class="my-5">
                                    <div class="text-center mb-2">
                                        <img src="Imagens/Icon-trabalho.png">
                                    </div>
                                    <h5 class="text-center"><b>Konica Company</b></h5>
                                    <br>

                                    <p class="text-center text-black-50">
                                        Trabalhei como Técnico de Informática numa Kónica
                                        prestando servíços de qualidade para a sociedade
                                        no geral.
                                    </p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <script>
                    function mudarBotao(btn){
                        if(btn == "Ver Mais Trabalhos"){
                            document.getElementById("botao1").value = "Minimizar Trabalhos";
                        }

                        if(btn == "Minimizar Trabalhos"){
                            document.getElementById("botao1").value = "Ver Mais Trabalhos";
                        }
                    }
                </script>

                <div class="text-center my-4">
                    <p class="text-white"><b>Essas são as minhas esperiências de trabalho.</b></p>
                    <input class="btn btn-light" type="button" id="botao1" data-toggle="collapse"
                           data-target="#mais-trabalhos" aria-expended="false" aria-controls="mais-trabalhos"
                           value="Ver Mais Trabalhos" onclick="mudarBotao(document.getElementById('botao1').value.toString())"
                    >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-offset-2 my-2">
                <h4 class="text-center mt-5"><b>Minhas Obras Primas</b></h4>
                <div class="row mt-5">

                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-3" id="card-cor">
                            <div class="my-3">
                                <p class="text-white text-center">
                                    <img src="Imagens/Icon-Portfolio.png" width="40">
                                    Aplicação de Pautas OnLine.
                                </p>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-3" id="card-cor">
                            <div class="my-3">
                                <p class="text-white text-center">
                                    <img src="Imagens/Icon-Portfolio.png" width="40">
                                    Site Oficial da Empresa Bumba Builder.
                                </p>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-3" id="card-cor">
                            <div class="my-3">
                                <p class="text-white text-center">
                                    <img src="Imagens/Icon-Portfolio.png" width="40">
                                    Site da Aplicação Aqui.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-3" id="card-cor">
                            <div class="my-3">
                                <p class="text-white text-center">
                                    <img src="Imagens/Icon-Portfolio.png" width="40">
                                    Site Oficial da Empresa ProMédia.
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-3" id="card-cor">
                            <div class="my-3">
                                <p class="text-white text-center">
                                    <img src="Imagens/Icon-Portfolio.png" width="40">
                                    Loja Virtual Chamada Encontre.
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-offset-2">
                        <section class="card my-3" id="card-cor">
                            <div class="my-3">
                                <p class="text-white text-center">
                                    <img src="Imagens/Icon-Portfolio.png" width="40">
                                    Site Escolar para Publicidade.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="mais-portfolios">
            <div class="row">
                <div class="col-lg-12 col-md-offset-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-3" id="card-cor">
                                <div class="my-3">
                                    <p class="text-white text-center">
                                        <img src="Imagens/Icon-Portfolio.png" width="40">
                                        Aplicação de Pautas OnLine.
                                    </p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-3" id="card-cor">
                                <div class="my-3">
                                    <p class="text-white text-center">
                                        <img src="Imagens/Icon-Portfolio.png" width="40">
                                        Site Oficial da Empresa Bumba Builder.
                                    </p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-3" id="card-cor">
                                <div class="my-3">
                                    <p class="text-white text-center">
                                        <img src="Imagens/Icon-Portfolio.png" width="40">
                                        Site da Aplicação Aqui.
                                    </p>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-3" id="card-cor">
                                <div class="my-3">
                                    <p class="text-white text-center">
                                        <img src="Imagens/Icon-Portfolio.png" width="40">
                                        Site Oficial da Empresa ProMédia.
                                    </p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-3" id="card-cor">
                                <div class="my-3">
                                    <p class="text-white text-center">
                                        <img src="Imagens/Icon-Portfolio.png" width="40">
                                        Loja Virtual Chamada Encontre.
                                    </p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4 col-md-offset-2">
                            <section class="card my-3" id="card-cor">
                                <div class="my-3">
                                    <p class="text-white text-center">
                                        <img src="Imagens/Icon-Portfolio.png" width="40">
                                        Site Escolar para Publicidade.
                                    </p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function trocarBotao(btn){
                if(btn == "Ver Mais Portfólios"){
                    document.getElementById("botao2").value = "Minimizar Portfólios";
                }

                if(btn == "Minimizar Portfólios"){
                    document.getElementById("botao2").value = "Ver Mais Portfólios";
                }
            }
        </script>

        <div class="text-center mt-5">
            <p style="color: #000000"><b>Esses são os meus portfólios.</b></p>
            <input class="btn btn-light" type="button" id="botao2" data-toggle="collapse"
                   data-target="#mais-portfolios" aria-expended="false" aria-controls="mais-porfolios"
                   value="Ver Mais Portfólios" onclick="trocarBotao(document.getElementById('botao2').value.toString())"
            >
            <br><br><br>
        </div>
    </div>
</div>

<div class="modal fade my-5" id="modalSite" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-dark"><b>Tudo Sobre Mim</b></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span style="color: #000000">X</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row justify-content-center my-2">
                        <div class="form-row">
                            <p class="modal-text">
                                Eu comecei a minha vida como Desenvolvedor aos 17 anos graças à alguns insentivos,
                                quando ainda fazia o meu ensino médio.
                                No início era tudo básico, <a href="#"><b class="txt">HTML</b></a> e <a href="#"><b>CSS</b></a>;
                                nada mais do que isso.<br><br>
                                Depois surgiu a necessidade de disparar algumas acções na minha página
                                <a href="#"><b>HTML</b></a>, originando assim o <a href="#"><b>JavaScript</b></a>.
                                Com o <a href="#"><b>JavaScript</b></a> as coisas começaram a ficar mais interessantes.
                                Só depois senti a necessidade de aprender uma linguagem
                                de programação server-side; aí tudo mudou.<br><br>
                                Com o <a href="#"><b>PHP</b></a> a coisa ficou mais séria do que já era antes,
                                conexões com os Bancos de Dados, Permições, CRUD's e muito mais.
                                Comecei então a desenvolver programas completos,
                                e preparados para o mercado Angolano.<br><br>
                                Mas só que o design com o <a href="#"><b>CSS</b></a> não me imprencionava muito,
                                então decidi procurar Frameworks Web para dar uma visão mais
                                agradável no meu programa; e aí conheci e me apaixonei com o
                                <a href="#"><b>Booststrap</b></a>.
                                Com tudo isso eu acabei aprendendo que o <a href="#"><b>PHP</b></a> é uma linguagem
                                server-side e o <a href="#"><b>JavaScript</b></a> uma linguagem client-side, só
                                que tem um porém: O <a href="#"><b>JavaScript</b></a> também é uma linguagem
                                server-side mais quando é utilizado com a fantástica tecnologia. O
                                <a href="#"><b>Nodejs</b></a>,
                                mais uma das minhas paixões.<br><br>
                                Actualmente eu trabalho com tudo citado acima e com o <a href="#"><b>Nodejs</b></a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a><b class="email">pestannapedrocatumbella@gmail.com</b></a>
            </div>
        </div>
    </div>
</div>

<div class="footer" id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-offset-2 mt-5">
                <h4 class="text-center text-white"><b>Entre em contacto comigo.</b></h4>

                <p class="text-center text-white">
                    <b>Aqui você pode dar a sua opinião, questão ou ainda me contratar pra um servíço.</b>
                </p>


                <form method="post" name="frm" onsubmit="return validacao(this);" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-offset-2">
                            <b class="text-white">Nome</b>
                            <input type="text" name="nome" placeholder="Digite o seu nome aqui..." class="form-control">
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <b class="text-white">E-Mail</b>
                            <input type="text" name="email" placeholder="Digite o seu email aqui..." class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12 col-md-offset-2">
                            <b class="text-white">Assunto</b>
                            <input type="text" name="assunto" placeholder="Digite o seu assunto aqui..." class="form-control">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12 col-md-offset-2">
                            <b class="text-white">Mensagem</b>
                            <textarea rows="10" name="mensagem" placeholder="Digite a sua mensagem aqui..." class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="text-center my-4 text-monospace">
                        <button class="btn btn-success" type="submit" id="botao3">Enviar Mensagem</button>
                        <button class="btn btn-danger" type="reset" id="botao4">Limpar Formulário</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-12 col-md-offset-2 text-center">
                <hr>
                <a href="https://www.facebook.com/pestana.catumbela/" class="zoom"><img src="Imagens/Icon-Facebook.png" width="38"></a>
                <a href="https://github.com/pestana-catumbela/" class="zoom"><img src="Imagens/Icon-GitHub.png" width="43"></a>
                <a href="https://www.instagram.com/pestana.catumbela/" class="zoom"><img src="Imagens/Icon-Instagram.png" width="44"></a>
                <hr>
            </div>

            <div class="col-lg-12 col-md-offset-2">
                <p class="text-center text-white my-4">
                    © Copyright. 2020 Todos direitos reservado |
                    Desenvolvido por: <a href="#eu" class="top is-visible"><b>Pestana Catumbela</b></a>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>