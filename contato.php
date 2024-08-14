<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contato PHP</title>
    </head>
        <body>
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

  
    echo "<h2>Dados recebidos:</h2>";
    echo "<p><strong>Nome da Pessoa:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Assunto:</strong> $assunto</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
} 
?>
            </section>
        </main>
        </body>
        </html>