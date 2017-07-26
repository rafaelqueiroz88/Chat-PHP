<?php
    include_once 'database.php';
    if(isset($_POST["nome"], $_POST["mensagem"]))
    {
        $nome = $_POST["nome"];
        $mensagem = $_POST["mensagem"];
        $sql = "INSERT INTO mensagens (msg_nome, msg_mensagem) VALUES ('$nome', '$mensagem')";
        if ($conn->query($sql) === TRUE) {
            echo "Armazenado com sucesso!";
        }
        else
        {
            echo "Erro detectado: ".$sql."<br/>".$conn->error;
        }
        $conn->close();
    }
    $sql = "SELECT * FROM mensagens ORDER BY msg_id DESC";
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            echo $row["msg_nome"]." disse: ".$row["msg_mensagem"]." (em: ".$row["msg_data"].")<br/>";
        }
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
?>