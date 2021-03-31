<?php
  $Nome		= $_POST["nome"];	// Pega o valor do campo Nome
  $Fone		= $_POST["telefone"];	// Pega o valor do campo Telefone
  $Email		= $_POST["email"];	// Pega o valor do campo Email
  $Mensagem	= $_POST["mensagem"];	// Pega os valores do campo Mensagem
  
  // Variável que junta os valores acima e monta o corpo do email
  if(empty($Nome) or empty($Fone) or empty($Email) or empty($Mensagem)) {
    echo'<script>
      swal({
        title: "Ops!!",
        text: "Todos os campos do formulário são obrigatórios, preencha por favor!",
        type: "warning",
        confirmButtonColor: "#ff871c",
        showCancelButton: false,
        confirmButtonText: "Ok!",
        closeOnConfirm: false,
        cancelButtonText: "Não",
        closeOnCancel: false
        },
        function(isConfirm){
        if (isConfirm) {
          swal.close();
        } else {
            swal.close();
        }
        });
    </script>';
  }else {
    $Vai = '
                
      <table cellpadding="0" cellspacing="0" align="center" style="border:thin solid #e5e5e5;padding:4px;" >     
        <thead>
          <tr style="border:thin solid #e5e5e5;padding:4px;">
            <td style="border:thin solid #e5e5e5;padding:4px;">Nome</td>
            <td style="border:thin solid #e5e5e5;padding:4px;">Email</td>
            <td style="border:thin solid #e5e5e5;padding:4px;">Telefone</td>
            <td style="border:thin solid #e5e5e5;padding:4px;">Mensagem</td>
          </tr>
        </thead>
        <tbody>
          <tr style="border:thin solid #e5e5e5;padding:4px;">
            <td style="border:thin solid #e5e5e5;padding:4px;">'.utf8_decode($Nome).'</td>
            <td style="border:thin solid #e5e5e5;padding:4px;">'.$Email.'</td>
            <td style="border:thin solid #e5e5e5;padding:4px;">'.$Fone.'</td>
            <td style="border:thin solid #e5e5e5;padding:4px;">'.utf8_decode($Mensagem).'</td>
          </tr>
        </tbody>
      </table> 
    ';
    require_once("./phpMailer/class.phpmailer.php");
    
    define('GUSER', 'smtp@tredieselbh.com.br');	// <-- Insira aqui o seu GMail
    define('GPWD', '2Zd7?(u;[3c!');		// <-- Insira aqui a senha do seu GMail
    
    function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
      global $error;
      $mail = new PHPMailer();
      $mail->IsSMTP();		// Ativar SMTP
      $mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
      $mail->SMTPAuth = true;		// Autenticação ativada
      $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
      $mail->Host = 'vps-3961951.mastersistemas.tech';	// SMTP utilizado
      $mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
      $mail->Username = "smtp@tredieselbh.com.br";
      $mail->Password = "2Zd7?(u;[3c!";
      $mail->SetFrom($de, $de_nome);
      $mail->Subject = $assunto;
      $mail->Body = $corpo;
      $mail->AddAddress($para);
      $mail->IsHTML(true); 
      if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
      } else {
        $error = 'Mensagem enviada!';
        return true;
      }
    }
    
    // Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
    //o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.
    if (smtpmailer('departamentoseminovos@gmail.com', $Email, utf8_decode($Nome), 'Novo contato do site', utf8_decode($Vai))) {
      echo'<script>
        swal({
          title: "Muito Bom!!",
          text: "Recebemos sua mensagem, dentro de até 24 horas alguém da nossa equipe entrará em contato com você!",
          type: "success",
          confirmButtonColor: "#ff871c",
          showCancelButton: false,
          confirmButtonText: "Ok!",
          closeOnConfirm: false,
          cancelButtonText: "Não",
          closeOnCancel: false
          },
          function(isConfirm){
          if (isConfirm) {
            swal.close();
          } else {
              swal.close();
          }
          });
      </script>';
    
    }
    if (!empty($error)) echo $error;
}
  ?>
