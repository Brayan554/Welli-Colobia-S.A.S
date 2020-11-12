<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link href="css/recuperar.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <style >
      #desplazado {
       background-color: white;
      border: black 1px solid;
      position: relative;
      top: 100px;
      }
    </style>
  </head>

  <body>
    <div class="form-gap"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div id="desplazado" class="panel panel-default">
            <div  class="panel-body ">
              <div class="text-center">
                <h3><i class="fa fa-lock fa-4x"></i></h3>
                <h2 class="text-center">Olvidaste Tu Contraseña?</h2>
                <p>Ingresa Tu Email.</p>
                <div id="cont"  class="panel-body">
                  <form
                    id="register-form"
                    action="<php $_SERVER['PHP_SELF']; ?>"
                    role="form"
                    autocomplete="off"
                    class="form"
                    method="post"
                  >
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"
                          ><i
                            class="glyphicon glyphicon-envelope color-blue"
                          ></i
                        ></span>
                        <input
                          id="email"
                          name="email"
                          placeholder="email "
                          class="form-control"
                          type="email"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <button
                        id="btn-login"
                        type="submit"
                        class="btn btn-lg btn-primary btn-block"
                      >
                        Enviar
                      </button>
                    </div>

                    <input
                      type="hidden"
                      class="hide"
                      name="token"
                      id="token"
                      value=""
                    />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
