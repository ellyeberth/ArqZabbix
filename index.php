<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoramento Zabbix</title>

    <!--ICONE DO TITLE-->
    <link rel="shortcut icon" href="./img/zabbix-icon.ico" type="image/x-icon">

    <!--LINK DE FONTE PADRÃO-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--LINK DA BIBLIOTECA BOOTSTRAP 5.1.1-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <!--LINK DA ESTILIZAÇÃO | CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--BARRA SUPERIOR DE NAVEGAÇÃO-->
    <nav>
        <div class="logo">
            <li><a href="./index.php">Logo | Nome</a></li>
        </div>

        <div class="opcao">
            <li> <a href="#anc-beneficios">Benefícios</a>
            </li>
            <li><a href="#anc-componentes">Componentes</a>
            </li>
            <li><a href="#anc-contato">Contato
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </li>
        </div>
    </nav>
    <!--BARRA SUPERIOR DE NAVEGAÇÃO-->

    <main>
        <!--Secão 1-->
        <section class="one1">
            <h1>Monitoramento Zabbix</h1>
            <p>Zabbix é uma solução de monitoramento de código aberto de classe empresarial madura e sem esforço para
                monitoramento de rede e monitoramento de aplicativos de milhões de métricas.</p>
        </section>
        <!--Secão 1-->

        <!--Secão 2-->
        <section class="two2">
            <!--Divisão 1 - COMPONENTES E DESCRIÇÃO-->
            <div class="componentes">
                <img src="./img/imagem-zabbix.png" alt="Error">
            </div>
            <div class="componentes">
                <img src="./img/imagem-zabbix2.png" alt="Error">
            </div>
            <div class="componentes">
                <img src="./img/imagem-zabbix.png" alt="Error">
            </div>

            <div class="descricao">
                <a href="#anc-componente-1">Componente 1</a>
            </div>
            <div class="descricao">
                <a href="#anc-componente-2">Componente 2</a>
            </div>
            <div class="descricao">
                <a href="#anc-componente-3">Componente 3</a>
            </div>
            <!--Divisão 1 - COMPONENTES E DESCRIÇÃO-->

            <!--Divisão 2 - COMPONENTES E DESCRIÇÃO-->

            <div class="componentes-2">
                <img src="./img/imagem-zabbix2.png" alt="Error">
            </div>
            <div class="componentes-2">
                <img src="./img/imagem-zabbix.png" alt="Error">
            </div>
            <div class="componentes-2">
                <img src="./img/imagem-zabbix2.png" alt="Error">
            </div>
            <a name="anc-beneficios"></a>
            <div class="descricao-2">
                <a href="#anc-componente-4">Componente 4</a>
            </div>
            <div class="descricao-2">
                <a href="#anc-componente-5">Componente 5</a>
            </div>
            <div class="descricao-2">
                <a href="#anc-componente-6">Componente 6</a>
            </div>
            <!--Divisão 2 - COMPONENTES E DESCRIÇÃO-->

            <!--Divisão 3 - BENEFÍCIOS-->
            <hr>
            <div class="flex">

                <div class="beneficios">
                    <img src="./img/information.png" alt="Error">
                    <h3>Título 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentesque quam id blandit.</p>
                </div>

                <div class="beneficios">
                    <img src="./img/information.png" alt="Error">
                    <h3>Título 2</h3>
                    <p>Cras lectus sapien, tempor nec imperdiet luctus, consectetur non nulla.</p>
                </div>

                <div class="beneficios">
                    <img src="./img/information.png" alt="Error">
                    <h3>Título 3</h3>
                    <p>Aliquam dictum pulvinar commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                        dignissim, odio.</p>
                    <a name="anc-contato"></a>
                </div>
            </div>
            <!--Divisão 2 - BENEFÍCIOS-->
        </section>
        <!--Secão 2-->

        <!--Seção 3-->

        <section class="three3">
            <div class="contact">
                <h3>Nam tincidunt mauris a facilisis lobortis. Vestibulum bibendum magna.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                <a name="anc-componente-1"></a>
                <a name="anc-componentes"></a>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Entre em contato</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Envie-nos uma mensagem</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php
                                    include("./db/conexion.php");
                                ?>
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Coloque seu e-mail:</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Assunto:</label>
                                        <textarea class="form-control" name="assunto" rows="1"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Mensagem:</label>
                                        <textarea class="form-control" name="mensagem" rows="5"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn-inmodal-fechar btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <button name="enviar" type="submit" class="btn-inmodal-enviar btn-primary">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Seção 3-->

        <!--Seção 4-->
        <section class="four4">
            <div class="desc-comp">
                <a name="anc-componente-2"></a>
                <h3>Componente 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed interdum ante, vitae mollis
                    orci. Integer ultricies elementum dictum. Proin sagittis nisi ac massa tincidunt maximus.
                    Phasellus vel augue sollicitudin, fringilla quam sed, laoreet tellus. Nullam consequat nibh odio,
                    sed suscipit nulla luctus luctus. Pellentesque interdum pellentesque commodo.</p>
            </div>
            <a name="anc-componente-3"></a>

            <div class="desc-comp">
                <h3>Componente 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed interdum ante, vitae mollis
                    orci. Integer ultricies elementum dictum. Proin sagittis nisi ac massa tincidunt maximus.
                    Phasellus vel augue sollicitudin, fringilla quam sed, laoreet tellus. Nullam consequat nibh odio,
                    sed suscipit nulla luctus luctus. Pellentesque interdum pellentesque commodo.</p>
            </div>

            <div class="desc-comp">
                <h3>Componente 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed interdum ante, vitae mollis
                    orci. Integer ultricies elementum dictum. Proin sagittis nisi ac massa tincidunt maximus.
                    Phasellus vel augue sollicitudin, fringilla quam sed, laoreet tellus. Nullam consequat nibh odio,
                    sed suscipit nulla luctus luctus. Pellentesque interdum pellentesque commodo.</p>
                <a name="anc-componente-4"></a>
            </div>

            <div class="desc-comp">
                <h3>Componente 4</h3>
                <a name="anc-componente-5"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed interdum ante, vitae mollis
                    orci. Integer ultricies elementum dictum. Proin sagittis nisi ac massa tincidunt maximus.
                    Phasellus vel augue sollicitudin, fringilla quam sed, laoreet tellus. Nullam consequat nibh odio,
                    sed suscipit nulla luctus luctus. Pellentesque interdum pellentesque commodo.</p>
            </div>

            <div class="desc-comp">
                <h3>Componente 5</h3>
                <a name="anc-componente-6"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed interdum ante, vitae mollis
                    orci. Integer ultricies elementum dictum. Proin sagittis nisi ac massa tincidunt maximus.
                    Phasellus vel augue sollicitudin, fringilla quam sed, laoreet tellus. Nullam consequat nibh odio,
                    sed suscipit nulla luctus luctus. Pellentesque interdum pellentesque commodo.</p>
            </div>

            <div class="desc-comp">
                <h3>Componente 6</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed interdum ante, vitae mollis
                    orci. Integer ultricies elementum dictum. Proin sagittis nisi ac massa tincidunt maximus.
                    Phasellus vel augue sollicitudin, fringilla quam sed, laoreet tellus. Nullam consequat nibh odio,
                    sed suscipit nulla luctus luctus. Pellentesque interdum pellentesque commodo.</p>
            </div>
        </section>
        <!--Seção 4-->
    </main>


    <footer>
        <h5>Copyright © 2021. Todos os direitos reservados.</h5>
        <h6>By Ellyeberth Leandro</h6>
    </footer>


    <!--LINK DA BIBLIOTECA BOOTSTRAP 5.1.1-->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>