$(document).ready(function(){
    $("#enviar").click(function(){
        var nick = $("#nick").val();
        var mensagem = $("#mensagem").val();
        $.post("processar_mensagens.php", {nome: nick, mensagem: mensagem}, function(data){
            console.log(data);
        });
        return false;
    });    
    setInterval(function(){
        $(".historico").load("processar_mensagens.php");
    },1800);
});
