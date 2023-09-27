<html lang="en">
<?php include "head.php" ?>
<body>
<?php include "nav.php" ?>
      
<?php


// Check if the blog ID is provided in the URL
if (isset($_GET['blogID'])) {
    $blogID = $_GET['blogID'];
  
// Fetch data for the specified blog ID from the database
    $sql = "SELECT * FROM blogs WHERE blogNumber = $blogID";
    $result = $conn->query($sql);
  
// Display the blog content
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $blogTitle = $row['title'];
      $blogImage = $row['blogThumbnail'];
      $subtitle = $row['subtitle'];
      $content = $row['content'];
  
// Apply nl2br() to preserve paragraph spacing
      $contentWithBreaks = nl2br($content);
  
// Display the full blog content with styling
      echo '<section id="fullBlog">';
      echo '<h1 class="blogTitle">' . $blogTitle . '</h1>';
      echo '<img src="images/' . $blogImage . '" class="blogImage">';
      echo '<h2 class="blogSubtitle">' . $subtitle . '</h2>';
      echo '<p class="blogContent">' . $contentWithBreaks . '</p>';
      echo '</section>';
    } else {
      echo "Blog not found.";
    }
  } else {
    echo "Invalid blog ID.";
  }
?>
        <?php include "footer.php" ?>
</body>
</html>