<?PHP
	require "datafile.php";

	$file = new Datafile();

	$arquivo = $_FILES['arquivo']['tmp_name'];
	$file->readContent($arquivo);
	$file->showContent();
?>