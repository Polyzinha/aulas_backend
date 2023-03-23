<?php
if(isset ($_GET['valor1']) && isset($_GET['valor2'])){
$r=$_GET['valor1']+$_GET['valor2'];
echo $r;
}else{
    //echo "Você precisa informar os valores para somar";
    //faz um redirecionamento
    header("Location:form.html");
}
?>