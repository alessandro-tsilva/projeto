<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Formulário de Contato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <main class="container mx-auto bg-light mt-1 w-90">
        <header class="row">
            <div class="d-none" id="barra_acessibilidade">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                    <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
                </ul>   
            </div>  
            <div class="col-sm-3">   
                <img src="images/logo.png" alt="Logotipo da empresa com dois triângulos sobrepostos.">
            </div>
            <div class="col-sm-9">
                <h1>Empresa XPTO</h1>
            </div>
        </header>
        <section class="row">
            <div class="col-sm-4">
                <h2 class="d-none" id="menu">Menu</h2>
            </div>
            <div class="col-sm-4">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav mr-auto" >
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-4"></div>
            <article class="col-12">  
                <h2 id="formulario">Formulário de Contato</h2>
            <form>
                <div class="form-group row">
                    <label for="inputNome" class="col-sm-2 col-form-label">Nome*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome" onblur="validar_nome()">
                        <div id="nomeid"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">E-mail*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Digite seu e-mail" onblur="validar_email()">
                        <div id="emailid"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Textarea" class="col-sm-2 col-form-label">Mensagem*</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="Textarea" rows="2" onblur="validar_texto()"></textarea>
                        <div id="atextid"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2 col-form-label"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" id="botao">Enviar</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <label>* Campos obrigatórios</label>
                    </div>
                </div>

            </form>
            </article>
        </section>
        <footer class="row">
            <div class="col-12">
                <p>Copyright © 2021</p>
            </div>
        </footer>
    </main>
    <script type="text/javascript" src="validar.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>
</body>
</html>