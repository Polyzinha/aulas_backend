<?php
session_start();

if(!isset($_SESSION['disciplina'])){
   header("Location: ../disciplina/inserir.php");
}

