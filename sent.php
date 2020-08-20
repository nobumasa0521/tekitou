<html>
<head>
  <meta charset="utf-8">
  <title>問い合わせ</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div>
      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>
      
      <div class="form-item">■ e-mail</div>
      <?php echo $_POST['email']; ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['content']; ?>
  </div>
</body>
</html>