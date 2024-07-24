<?php
include('../../BackEnd/blog_fetch_BE.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
  <link rel="stylesheet" href="/FrontEnd/css/colors.css">
  <link rel="stylesheet" href="/FrontEnd/css/view_blog.css">
  <link rel="stylesheet" href="/FrontEnd/css/navbar.css">
  <link rel="stylesheet" href="/FrontEnd/css/footer.css">
  <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
  <title>CareSenerity | Blog</title>
</head>

<body>

  <?php include "../components/navbar.php" ?>

  <div class="blog-details-container">
    <div class="IMG">
      <img src="/UserImage/blogpic/<?php echo $post_image ?>" alt="image name here">
    </div>

    <div class="blog-details">
      <h1 class="blog-details-title"><?php echo $post_title ?></h1>
      <h3 class="blog-details-author">By <?php echo $acc_name . ", " . $published ?></h3>
      <p class="blog-details-content">
        <?php echo $post_content ?>
      </p>
    </div>

    <div class="blog-actions">
      <form action="#" method="post">
        <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
        <button type="submit" name="like" onclick="storeScrollPosition('LIKE')" disabled><i class='bx bxs-like'></i></button>
      </form>
      <p class="likes-count"><?php echo $likes ?></p>
    </div>

    <h2><i class='bx bxs-message-dots'></i> Comments:</h2>

    <div class="comments">
      <?php include('../../BackEnd/comment_fetch_BE.php'); ?>
    </div>

    <form id="write-comment" action="#" method="post">
      <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
      <input type="text" name="comment" placeholder="Add a comment" required>
      <button type="submit" name="submit" onclick="storeScrollPosition('COMMENT')" disabled style="background-color: gray;">Comment</button>
    </form>
  </div>

  <?php include "../components/footer.php" ?>

  <button id="scrollTopBtn" title="Go to top">↑</button>

  <script src="/FrontEnd/js/scrollupBTN.js"></script>
  <script src="/FrontEnd/js/react.js"></script>
</body>

</html>