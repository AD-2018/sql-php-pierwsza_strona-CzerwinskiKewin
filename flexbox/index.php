<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Static Template</title>
    <link rel="stylesheet" href="/flexbox/style.css" />
  </head>
  <body>
    <h1>FLEXBOX</h1>
    <?php
    include_once("../menu.php");
    ?>
    <ul class="menu">
      <li class="header">
        <a class="item_link" href="http://">header</a>
      </li>
      <li class="sidebar">
        <a class="item.link" href="http://">sidebar</a>
      </li>
      <li class="menu_item m">
        <a class="item.link" href="http://">menu_item</a>
      </li>
      <li class="footer">
        <a class="item.link" href="http://">footer</a>
      </li>
    </ul>

    <a class="menu2" href="">asdasdasdasd</a>
    <a class="menu2" href="">asdasdasdasd</a>
    <a class="menu2" href="">asdasdasdasd</a>
  </body>
</html>