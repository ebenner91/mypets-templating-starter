<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
      <h1><?= $title ?></h1>
      <p>User logged in as <?= $username ?> using <?= $password ?></p>
      <h3>Temperature</h3>
      <p>Fahrenheit: <?= $temp ?> degrees</p>
      <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
      <p>I like <?= $color ?></p>
      <p>Circumfrence: <?= 2 * 3.14 * $radius ?></p>
      
      <h3>Bookmarks</h3>
      <p>My first bookmark is: <a href="<?= $bookmarks[0] ?>"><?= $bookmarks[0] ?></a></p>
      <ul>
        <?php foreach (($bookmarks?:[]) as $bookmark): ?>
            <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', '', $bookmark) ; ?></a></li>
        <?php endforeach; ?>
      </ul>
      
      <h3>Addresses</h3>
      <?php foreach (($addresses?:[]) as $key=>$value): ?>
        <p><?= $key ?> - <?= $value ?></p>
      <?php endforeach; ?>
      
      <h3>Desserts</h3>
      <?php foreach (($desserts?:[]) as $key=>$value): ?>
        <input type="checkbox" value="<?= $key ?>"><?= $value ?> <br>
      <?php endforeach; ?>

      <h3>Message</h3>
      <?php if ($preferredCustomer): ?>
        <strong>Thank you for being a preferred customer!</strong><br>
      <?php endif; ?>
      
      <?php if ($lastLogin > strtotime('-1 month')): ?>
        Welcome Back!
        <?php else: ?>It's been a while!
      <?php endif; ?>
        
    </body>
</html>