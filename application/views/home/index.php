<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>

    <div class="container">

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
                "type" => "submit",
                "content" => "Cadastrar"
                
              ));
        
            echo form_close();
        ?>
    </div>
    
</body>
</html>