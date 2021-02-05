<!DOCTYPE html>

<html lang ="pt-Br">
    <head>
        <meta charset ="UTF-8" />
        <title> Home </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
        <link rel="stylesheet" type="text/css" href="estilos/style.css">
        <script src='js/jquery-3.5.1.min.js'></script>
        <script>
            $('modal').on('shown.bs.modal', function () {
            $('#meuInput').trigger('focus')
            });

            $(document).ready(function(){
              $("#cadastra").click(function(){
                sessionStorage.setItem("nome", $("#inputNome").val());
                sessionStorage.setItem("email", $("#Email").val());
                sessionStorage.setItem("endereco", $("#inputAddress").val());
                sessionStorage.setItem("numero", $("#numero").val());
                sessionStorage.setItem("cidade", $("#inputCity").val());
                sessionStorage.setItem("estado", $("#inputEstado").val());
                sessionStorage.setItem("cep", $("#inputCEP").val());
                $("#modalExemplo").fadeOut();
              });
            });
        </script>
    </head>
    <div class="container-fluid">
        <body>
            <header>
                <nav>
                    <figure>
                        <img src="imagens/logo.png" alt="Logo" name = "logo" width="100px" height="60px">
                    </figure>
                </nav>
            </header>
            <div class="container-body">
                <main>
                  <div id="teste"></div>
                    <h1>Bem-Vindo (a)!</h1>
                    <h3><a>Cadastre-se</a> ou faça seu <a>Login</a>!</h3>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">
                            Cadastro
                        </button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalLogin">
                          logar
                      </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nome</label>
                                            <input type="text" class="form-control" id="inputNome" required="required" placeholder="Insira seu nome aqui!!">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="Email" required="required" placeholder="Email">
                                          </div>
                                          <div class="form-group col-md-6">
                                            <label for="inputPassword4">Senha</label>
                                            <input type="password" class="form-control" id="inputPassword" required="required" placeholder="Senha">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress">Endereço</label>
                                          <input type="text" class="form-control" id="inputAddress" required="required" placeholder="Rua dos Bobos">
                                        </div>
                                        <div class="form-group">
                                          <label for="inputAddress">Numero do local</label>
                                          <input type="text" class="form-control" id="numero" required="required">
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-6">
                                            <label for="inputCity">Cidade</label>
                                            <input type="text" class="form-control" required="required" id="inputCity">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="inputEstado">Estado</label>
                                            <input type="text" id="inputEstado" required="required" placeholder="Estado" class="form-control"/>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <label for="inputCEP">CEP</label>
                                            <input type="number" required="required" placeholder="CEP" class="form-control" id="inputCEP">
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Limpar</button>
                                          <button type="button" id="cadastra" class="btn btn-success">Cadastrar</button>
                                      </div>
                                      </form>
                                </div>
                            </div>
                            </div>
                        </div>


                        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                  <form method="POST" action="index_vendedor.html">
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Email</label>
                                          <input type="email" class="form-control" required="required" id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Senha</label>
                                          <input type="password" class="form-control" required="required" id="inputPassword" placeholder="Senha">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Limpar</button>
                                        <button type="submit" class="btn btn-success">Logar</button>
                                    </div>
                                    </form>
                              </div>
                          </div>
                          </div>
                      </div>
                </main>
            </div>

        </body>
        <footer align = "center">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
           
            <a href = "suporte.html">Suporte</a> | <a href="ajuda">Ajuda</a> | <a href="contato.html">Contato</a> <br/>
            Desenvolvido &copy ...
        </footer>
    </div>
</html>