<?php
session_start();
require 'phpmailer/sendMail.php';
require 'config/connection.php'
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mateus Ferreira Dias | Desenvolvedor de sistemas</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" rel="stylesheet"></link>
</head>

<body>
    
    <header class="hero" id="header">

        <div class="d-flex justify-content-center align-items-center vh-100 overflow-hidden">

            <img src="assets/img/background.webp" class="w-100 h-100 z-n1 object-fit-cover" alt="Imagem de fundo da página inicial" loading="lazy">
            <div class="overlay w-100 h-100 position-absolute z-0" aria-hidden="true"></div>

            <div class="text-center z-1 position-absolute">
                <h1>Mateus Ferreira Dias</h1>
                <p>Criador de sistemas Web, Mobile e Redes</p>
                <a aria-label="Conheça mais o meu trabalho." href="#main">
                    <button class="btn btn-dark">
                        Saiba mais do meu trabalho
                    </button>
                </a>

                <a href="assets/cv/curriculo.pdf" download="curriculo-mateusfdias.pdf">
                    <button class="btn btn-dark">
                        Baixar Currículo
                    </button>
                </a>

            </div>

        </div>

    </header>

    <main id="main" class="d-flex flex-column w-100">



        <section class="my-5" id="quemsou">

                <div class="container text-justify">

                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Quem sou eu</h2>
                            <p>Apresentação formal sobre meu objetivo na área da tecnologia.</p>
                        </div>

                        <div class="col-lg-6">
                            <p class="texto">
                                Sou um desenvolvedor com Foco na criação de 
                                sistemas que buscam resolver problemas ou 
                                facilitar processos, estou sempre buscando 
                                me desenvolver e buscar novos meios de
                                encontrar soluções para os desafios e demandas
                                presentes no mundo digital.
                                </br>
                                Atualmente moro no Litoral Norte de SP,
                                mas aceito projetos de
                                todo o território brasileiro.
                            </p>
                        </div>

                    </div>

                </div>
        </section>

        <section class="my-5" id="oqueproduzo">
            <div class="container text-justify">

                <div class="row flex-row-reverse text-end">
                    <div class="col-lg-6">
                        <h2>O que desenvolvo</h2>
                        <p>Quais aplicações desenvolvo e de que forma posso te ajudar.</p>
                    </div>

                    <div  class="col-lg-6">
                        <p class="texto">
                            Desde pequenas depurações visuais ou lógicas até a criação de um sistema completo e pronto para o seu negócio!
                            </br>
                            Desenvolvo aplicações Web com foco em soluções funcionais,
                            elegantes e intuitivas, buscando proporcionar uma experiência rápida,
                            acessível e agradável para quem utiliza cada sistema.</br>
                            Também tenho conhecimento na área de programação voltada 
                            à comunicação entre dispositivos.
                        </p>
                    </div>

                </div>

            </div>
        </section>

        <section id="knowledge">
            <div class="container">

                <div class="row text-center">
                    <h2>
                        Conhecimentos
                    </h2>
                </div>

                <div class="row my-5 g-0">
                    <div class="col-lg-3 text-center">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa-brands fa-html5"></i>
                                <h3 class="card-title">HTML5</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 text-center">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa-brands fa-css"></i>
                                <h3 class="card-title">CSS3</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 text-center">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa-brands fa-php"></i>
                                <h3 class="card-title">PHP</h3>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-3 text-center">
                        <div class="card">
                            <div class="card-body text-center">
                               <i class="fa-solid fa-database"></i>
                                <h3 class="card-title">MySQL</h3>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 text-center">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa-brands fa-git-alt"></i>
                                <h3 class="card-title">Git e Github</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 text-center">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa-brands fa-square-js"></i>
                                <h3 class="card-title">JavaScript</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="fa-solid fa-microchip"></i>
                                <h3 class="card-title">Sistemas embarcados</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                     <div class="card">
                            <div class="card-body text-center">
                                <i class="fa-brands fa-bootstrap"></i>
                                <h3 class="card-title">Bootstrap 5</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </article>

        <article>
        <div class="container">

            <div class="row text-center my-5">
                <h2>
                    Meus Projetos
                </h2>
            </div>


            <div class="row">
                <?php
                    $query = "SELECT * FROM projetos";
                    $puxa = $mysqli->query($query);
                
                    while($mostra = $puxa->fetch_object()){
                        echo"
                            <div class='col-lg-4 my-5'>
                                <div class='card cardProject' onclick='knowMore(this)' data-description='$mostra->projetos_descricao'>
                                    <img src='assets/img/$mostra->projetos_imagem' class='img-project'alt='Imagem de prévia do projeto' loading='lazy'>
                                        <div class='card-body'>
                                            <h3 class='card-title'>$mostra->projetos_titulo</h3>
                                            <p class='card-text'>$mostra->projetos_resumo</p>
                                        </div>
                                </div>
                            </div>
                        ";
                    };
                ?>
            </div>
        </div>
        </section>

        <section id="talktome" class="d-flex align-items-center vh-100">
            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-md-10">
                        <h2 class="text-center">Me envie uma mensagem</h2>
                        <form class="my-5" action="" class="text-center" method="post">
                            <div class="mb-3">
                                <label for="nome" class="text-justify">Insira seu Nome</label><br>
                                <input type="text" class="w-100 border-bottom border-info border-3" name="nome" id="nome">
                            </div> 
                            <div class="mb-3">
                                <label for="email">Insira seu Email</label><br>
                                <input type="email" class="w-100 border-bottom border-info border-3" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="mensagem">Sua mensagem</label><br>
                                <textarea name="mensagem" class="w-100 border-bottom border-info border-3" title="Insira sua mensagem" id="mensagem"></textarea>
                            </div>
                            <input type="submit" class="btn btn-dark" value="enviar" name="enviar">
                        </form>
                    </div>
                    <div class="text-center mt-5">
                        <h2 class="mb-5">Redes Sociais</h2>
                        <a class="contact-button" href="https://github.com/Mat3us-coder" aria-label="Link para meu perfil no GitHub." target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a class="contact-button" href="https://www.linkedin.com/in/mateus-ferreira-dias-5a839739b" aria-label="Link para meu perfil no LinkedIn." target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="bg-dark">
        <div class="container-fluid" style="color: white;">
            <div class="row py-5">
                <div class="col-lg-12 d-flex flex-column text-center">
                    <p>
                       <strong>
                        © 2026 Mateus Ferreira Dias. Todos os direitos reservados.
                       </strong>  
                    </p>
                    <a href="mailto:mateusferreiradias08@gmail.com">
                        <p>
                            mateusferreiradias08@gmail.com
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <dialog id='knowMore' class="border rounded-5">
        <button class='btn btn-dark' id='CloseKnowMore' onclick='CloseKnowMore()'>Fechar</button>
        <h2 class='pb-4 pt-1' id='TitleKnowMore'></h2>
        <img src="" id='ImgKnowMore' alt="imagem expandida do projeto">
        <p id='DescriptionKnowMore'></p>
    </dialog>

    <script>
        const dialog = document.getElementById("knowMore");
        const title = document.getElementById("TitleKnowMore");
        const description = document.getElementById("DescriptionKnowMore");
        const image = document.getElementById("ImgKnowMore");
        const close = documente.getElementById("CloseKnowMore")

        function knowMore(cardProject){
            title.textContent = cardProject.querySelector(".card-title").textContent;
            description.textContent = cardProject.dataset.description;
            image.src = cardProject.querySelector("img").src;
            dialog.showModal();
        }
        function CloseKnowMore(){
            dialog.close();
        }

    </script>

</body>
</html>

