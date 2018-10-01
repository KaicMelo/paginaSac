<?php

//Variaveis responsaveis pelo getValue do formulario
//====================================================
$nome = isset($_POST['nome']) ? $_POST['nome'] : " ";
$email = isset($_POST['email']) ? $_POST['email'] : " ";
$pedido = isset($_POST['pedido']) ? $_POST['pedido'] : " ";
$des = isset($_POST['descricao']) ? $_POST['descricao'] : " ";
$tamanho = 3000000;
//Validção para saber qual categoria do menu foi selecionada
//====================================================
if ($_POST['produto'] == "Produto") {
    if ($_POST['pagamento'] == "Pagamento") {
        if ($_POST['entrega'] == "Entrega") {
            if ($_POST['site'] == "Site") {

            } else {
                $solicitacao = $_POST['site'];
                        $destinatario = 'example@hotmal.com.br';
            }
        } else {
            $solicitacao = $_POST['entrega'];
                    $destinatario = 'example@hotmal.com.br';
        }
    } else {
        $solicitacao = $_POST['pagamento'];
                $destinatario = 'example@hotmal.com.br';
    }
} else {
    $solicitacao = $_POST['produto'];
     $destinatario = 'example@hotmal.com.br';
}
//Variavel responsavel pela quebra de linha da descrição
//====================================================
$descricao = nl2br("$des");

// Inclui o arquivo class.phpmailer.php 
//====================================================
require_once("PHPMailer/class.phpmailer.php");

// Inicia a classe PHPMailer
//====================================================
$mail = new PHPMailer(true);

//Acessando SMTP
$acessSmtp = 'smtp@zonacerealista.com.br';

// Define os dados do servidor e tipo de conexão
//====================================================
$mail->IsSMTP(); // Define que a mensagem será SMTP

// Procedimento de necessario para enviar email
//====================================================
try {

   // if(filter_has_var(INPUT_POST, 'submit') ) {

        $arquivo = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size']; 
        $name = $_FILES['file']['name'];
        if($fileSize < $tamanho){
            $dir = 'img/';
            move_uploaded_file($arquivo, $dir.$name);

            $path_file = $dir.$name;
            $mail = new PHPMailer();
            $mail->IsMail(); 
            $mail->IsHTML(true);
            $mail->AddAttachment($path_file);
        }

        
    //}
    $mail->Host = 'example@hotmal.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br
    $mail->SMTPSecure = "tls";
    $mail->Port = 587; //  Usar 587 porta SMTP
    $mail->Username = $acessSmtp; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = '123456789'; // Senha do servidor SMTP (senha do email usado)
    
    //Define o remetente
    //====================================================   
    $mail->SetFrom($email, "$nome"); //Seu e-mail
    $mail->AddReplyTo($email, "$nome"); //Seu e-mail
    $mail->Subject = $solicitacao; //Assunto do e-mail
    
    //Define os destinatário(s)
    //====================================================   
    //$destinatario = 'webmaster@zonacerealista.com.br';
    
    //Adicionando destinatário e nome
    //====================================================
    $mail->AddAddress($destinatario, "$nome");
    
    //Campos abaixo são opcionais 
    //====================================================
    //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
    //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
         // Adicionar um anexo
    //$Email->IsMail(); // ativa o envio de e-mails em HTML, se false, desativa.
    
    //Corpo do Email
    //====================================================
    $mensagem = "<h1>SAC</h1>";
    $mensagem.="<h3><b>Numero do pedido:</b></h3>$pedido<br><br>";
    $mensagem.="<h3><b>Nome:</b></h3>$nome<br><br>";
    $mensagem .= "<h3><b>Mensagem:</b></h3>";
    $mensagem .= "$descricao";
    
    //Enviando por parametro a mensagem a cima 
    //====================================================
    //$mail->MsgHTML($mensagem);
    $mail->MsgHTML($mensagem);
    //Chamando método de envio
    //====================================================
    $mail->Send();
    
    //Referenciando página de Sucesso após envio
    //====================================================
    header("Location: index.php");
    //echo "<meta http-equiv='refresh' content='0, url=./message-success/'>";
    //echo include('message-success');

    //caso apresente algum erro é apresentado abaixo com essa exceção.
    //====================================================
} catch (phpmailerException $e) {
    echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}


?>