<?php

    if(isset($_POST['submit'])){

        include('config.php');

        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_reserva = $_POST['data_reserva'];
        $curso = $_POST['curso'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,ra,email,telefone,data_reserva,curso) 
        VALUES ('$nome','$ra','$email','$telefone','$data_reserva','$curso')");

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevenção COVID-19 - FMU</title>
    <style>
        body{
            font-family: Arial, Arial, Helvetica, sans-serif;
            background-color: Silver;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-image: linear-gradient(to right, rgb(250,128,114),rgb(255,99,71));
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid white;
        }
        legend{
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            color: black;
        }
        .inputBox{
            position: absolute;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: red;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: white;
            width: 100%;
            border: none;
            padding: 15px;
            color: black;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(128,0,0),rgb(165,42,42));
        }
        ::-webkit-input-placeholder  { color: white; }
        input:-moz-placeholder { color: white; }
        textarea:-moz-placeholder { color: white; }
        
    </style>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Alunos</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome completo">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="ra" id="ra" class="inputUser" required placeholder="RA">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required placeholder="Email de contato">
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required placeholder="Telefone de contato">
                </div>
                <br><br>
                <label for="data_reserva"><b>Data para reserva:</b></label>
                <input type="date" name="data_reserva" id="data_reserva" required>
                <br><br><br>
                <div class="inputbox">
                    <input type="text" name="curso" id="curso" class="inputUser" required placeholder="Curso">
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>