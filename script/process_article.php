<!-- process_article.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $content = $_POST["content"];
  
  // Perform any necessary database insertions or processing here
  
  // Redirect back to the article page or another relevant page
  header("Location: article.php?success=true");
  exit();
}
?>
