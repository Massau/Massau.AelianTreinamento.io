<?php include("header.php");

$nome = $_GET['nome'];
$idade = $_GET['idade'];

$query = "insert into quiz (nome, idade)";

?>

<p class="alert-sucess">Questionário respondido com sucesso, <?= $nome?>, de <?= $idade ?> anos</p>

<?php include("footer.php"); ?>