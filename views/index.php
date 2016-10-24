<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>HTML5</title>
    <link href='/temp/css/style.css' rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php foreach ($array_list as $single_new):?>
      <?php echo "<a href=/news/".$single_new['id'].">".$single_new['login']."</a>";?>
    <?php endforeach; ?>
  </body>
</html>
