<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['nome']) && !empty($_POST['num_quarto']) && !empty($_POST['nacionalidade']) && !empty($_POST['email'])){
        $nome = $_POST['nome'];
        $num_quarto = $_POST['num_quarto'];
        $nacionalidade = $_POST['nacionalidade'];
        $email = $_POST['email'];

        //echo "Nome:".$nome." <br>Numero Quarto: ".$num_quarto."<br>Nacionalidade: ".$nacionalidade."<br>Email:".$email;
        //'Nome:'.$nome.'<br>Numero Quarto: '.$num_quarto.'<br>Nacionalidade: '.$nacionalidade.'<br>Email:'.$email
        echo "<script type='text/javascript'>
                alert("Nome:'.$nome.' <br>Numero Quarto: '.$num_quarto.'<br>Nacionalidade: '.$nacionalidade.'<br>Email:'.$email'");
                window.location.href='satisfacao.html';
          </script>";

    }else{
        echo "<script type='text/javascript'>
                alert('Preencha os campos!');
                window.location.href='satisfacao.html';
          </script>";
    }
}else{
    echo "<script type='text/javascript'>
                alert('Não Enviado!');
                window.location.href='satisfacao.html';
          </script>";
}



//header("Location: satisfacao.html");
?>
