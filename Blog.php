<html lang="en">
<?php include "head.php" ?>
<body>
<?php include "nav.php" ?>
      
    <section id="allBlogs">

      <h1>ALL BLOGS</h1>
      <div class="filterContainer">
        <label for="filter">Filter by:</label>
        <select id="filter">
          <option value="oldest">Oldest</option>
          <option value="newest">Newest</option>
          <option value="popular">Most Popular</option>
          <option value="az">Alphabetical (A-Z)</option>
          <option value="za">Alphabetical (Z-A)</option>
        </select>
      </div>

 
      <?php
// Fetch data from the blogs table
$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);

// Display the fetched data on the blog page
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
      $blogID = $row['blogNumber'];
      $blogTitle = $row['title'];
      $blogImage = $row['blogThumbnail'];
      $subtitle = $row['subtitle'];
      $content = $row['content'];

      // Display the blogs dynamically
      echo '<div id="blog-' . $blogID . '" class="blogs">';
      echo '<div class="part-1">';
      echo '<img src="images/' . $blogImage . '" class="blogImage">';
      echo '</div>';
      echo '<div class="blogInfo">';
      echo '<h3 class="blogTitle">' . $blogTitle . '</h3>';
      echo '<p>' . $subtitle . ' <a href="fullBlog.php?blogID=' . $blogID . '">Read more...</a></p>';
      echo '</div>';
      echo '</div>';
  }
} else {
  echo "No blogs found.";
}

// Close the database connection
?>

        </section>
        <?php include "footer.php" ?>



</body>
</html>