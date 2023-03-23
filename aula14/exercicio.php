<?php
if(isset ($_POST['valor1']) && isset($_POST['valor2'])){
$r=$_POST['valor1']+$_POST['valor2'];
echo $r;
}else{
    //echo "Você precisa informar os valores para somar";
    //faz um redirecionamento
    header("Location:form.html");
}
?>