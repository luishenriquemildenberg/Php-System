<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/test.css">
    <meta charset="utf-8" />
    <title>Estilizando formulários com CSS - DevMedia</title>
</head> 
<body> 
<form name="meuForm" method="post" id="formulario">
    <div class="box"> 
        <h1>Formulario de Contato :</h1>
  
        <label> 
            <span>Nome Completo</span>
            <input type="text" class="input_text" name="nome" id="name"/>
  
        </label>
  
        <label>
            <span>Email</span>
            <input type="text" class="input_text" name="email" id="email"/>
         </label>
  
        <label>
            <span>Assunto</span>
            <input type="text" class="input_text" name="assunto" id="subject"/>
        </label>
  
        <label>
             <span>Mensagem</span>
            <textarea class="message" name="feedback" id="feedback"></textarea>
            <input type="button" class="button" value="Enviar" />
        </label>           
    </div>
</form> 
</body>
</html>