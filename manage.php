

<?php

require 'News.php';

try{
	// connect to database 
	//TODO: check for connect with text file
	$db = new PDO('mysql:host=localhost;dbname=news_form','root','');
}catch(Exception $e){
	die($e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$header =   isset($_POST['header']) ? htmlentities($_POST['header']) : '';
  $author =  isset($_POST['author']) ? htmlentities($_POST['author']) : '';
  $text = isset($_POST['text']) ? htmlentities($_POST['text']) : '';

	
$q = $db->prepare('INSERT INTO News SET header = :header, author = :author, text = :text');
 
    $q->bindValue(':header', $header);
    $q->bindValue(':author', $author);
    $q->bindValue(':text', $text);
    $q->execute();

	// redirect to the list of news
header('Location: list.phtml');
	
}

