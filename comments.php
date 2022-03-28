

<div class="block">
  <h3>CHAT FEED</h3>
  <div class="block__content">
    <div class="articles articles__vertical">

      <?php
       $comments = mysqli_query($connection, "SELECT * FROM `comments`  ORDER BY `id` DESC");
        while($comment = mysqli_fetch_assoc($comments)){  
      ?>
      <article class="article">
        <div class="article__info">
          <a href="/user.php?id=<?php echo $comment['user_id']; ?>">
            <?php echo $comment['author']; ?></a>
            <div class="article__info__meta"></div>
          <div class="article__info__preview"><?php echo mb_substr(strip_tags($comment['text']), 0, 100, 'utf-8') . ' ...'; ?>
          </div>
        </div>
      </article>
      <?php
        }
      ?>
       
    </div>
  </div>
</div>