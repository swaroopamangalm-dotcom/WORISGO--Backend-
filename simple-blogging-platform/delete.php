<?php

include 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];

$conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");

header("Location: index.php");

?>
