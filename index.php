<?php
$LAST_PAGE = 12;
$page = $_GET['page'];
if (!$page) $page = 1;
$page = max(1, min($page, $LAST_PAGE));
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="stylesheet.css">
  <script src="script.js"></script>
</head>

<body>
  <a <?php
  if ($page <= 1) {
    echo 'style="visibility: hidden"';
  } else {
    printf('href="?page=%d"', $page - 1);
  } ?> >&lt;&lt; Previous</a>
  <a <?php
  if ($page >= $LAST_PAGE) {
    echo 'style="visibility: hidden"';
  } else {
    printf('href="?page=%d"', $page + 1);
  } ?> >Next &gt;&gt;</a>
  <?php include sprintf('pages/page%02d.html', $page); ?>
</body>

</html>
