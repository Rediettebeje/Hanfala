
<!-- news page -->

<div class="container">
<h2><?= $title; ?></h2>

<?php foreach ($news as $news_item): ?>
    <h3><?= $news_item['title']; ?></h3>
    <div class="main">
        <?= $news_item['text']; ?>
    </div>
    <p><a href="<?= '/news/' . $news_item['slug']; ?>"class="btn learn-more-btn">View article</a></p>
<?php endforeach; ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
