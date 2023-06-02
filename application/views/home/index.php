<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href=" <?= base_url(uri:"css/bootstrap.css") ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>

    <!-- Estilizando -->
    <style>
      body{
        height: 500px;
        background-color:#2b2929d3;
      }
      .container {
        margin-top: 2%;
        padding-top: 0%;
        width: 40%;
        height: 650px;
        background-color: #1a19196b;
      }
      #btn{
        margin-top: 6px;
        color: #fff;
        background-color: #2b29299f;
      }
      #btn:hover{
        background-color: #e02da5d3;
      }
      #nmEmail{
        color: #fff;
      }
      #senha{
        color: #e02da5d3 ;
      }
      #email{
        color: #e02da5d3 ;
      }
      #nome{
        color: #e02da5d3 ;
      }
      .container h1{
        color: #e02da5d3 
      }
      .containerButtom .banner{
        color: #e02da5d3;
        font-size: 15px;
      
      }
      label{
        color: #fff;
      }
      form{
        padding-top: 10px;
      }
    </style>
   
</head>
<body>


  
  <div class="container">

        <!-- se a sessão de login existir, apresentará a msg: -->
    <?php if($this->session->flashdata("success")) : ?>
      <p class="alert alert-success"><?= $this->session->flashdata("success")?></p>
    <?php endif ?>

    <!-- senão: -->
    <?php if($this->session->flashdata("danger")) : ?>
      <p class="alert alert-danger"><?= $this->session->flashdata("danger")?></p>
    <?php endif ?>


    <!-- Se o usuário estiver logado no sistema:  -->
    <?php if($this->session->userdata("usuario logado")) : ?>
      <div class="containerButtom">
        <div class="banner">
          <h1>Bem-vindo ao sistema avaliativo dev PHP!</h1>
        </div>
      <?php echo form_open("login/logout");
        echo form_button(array(
        "uri" => "login/logout",
        "class" => "btn btn-primary",
        "type" => "submit",
        "content" => "Sair"
        ));
      ?>
      </div>
      <!-- Button logout -->

     







    <!-- se o usuario nao estiver logado -->
    <?php else : ?> 

    <h1>Login</h1>
        <?php echo form_open(action:"Login/autenticar");
              echo form_label("Email", "email");
              echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255"
              ));

              echo form_label("Senha", "senha");
              echo form_password(array(
                "name" => "senha",
                "id" => "senha",
                "class" => "form-control",
                "maxlength" => "255"
              ));

              echo form_button(array(
                "class" => "btn btn-primary",
                "type" => "submit",
                "id" => "btn",
                "content" => "Login"

              ));

            echo form_close();
        ?>



        <h1>Cadastro de usuários</h1>
        <?php echo form_open(action:"usuarios/novo");

              echo form_label("Nome", "nome");
              echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255"
              ));

              echo form_label("Email", "email");
              echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255"
              ));

              echo form_label("Senha", "senha");
              echo form_password(array(
                "name" => "senha",
                "id" => "senha",
                "class" => "form-control",
                "maxlength" => "255"
              ));

              echo form_button(array(
                "class" => "btn btn-primary",
                "id" => "btn",
                "type" => "submit",
                "content" => "Cadastrar"
              ));

            echo form_close();
        ?>
  </div>
  <?php endif ?>

  <?php include 'rodape.html' ?>

</body>
</html>