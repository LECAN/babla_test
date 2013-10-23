

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
	$newsDate =  isset($_POST['newsDate']) ? htmlentities($_POST['newsDate']) : '';
  $author =  isset($_POST['author']) ? htmlentities($_POST['author']) : '';
  $text = isset($_POST['text']) ? htmlentities($_POST['text']) : '';

  $date = new DateTime($newsDate);
	
$q = $db->prepare('INSERT INTO News SET header = :header, newsDate = :newsDate, author = :author, text = :text');
 
    $q->bindValue(':header', $header);
	$q->bindValue(':newsDate', $date->format('Y-m-d'));
    $q->bindValue(':author', $author);
    $q->bindValue(':text', $text);
    $q->execute();

	// redirect to the list of news
header('Location: list.phtml');
	
}

