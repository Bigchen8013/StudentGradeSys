<html lang="zh-CN">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>维护教师信息</title>
  </head>
  <link
    rel="stylesheet"
    href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
  />
  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <body>
    <form enctype="multipart/form-data" role="form" action="" method="post">
    <button type="submit" class="btn btn-default" type="button" name="insert_teacher">添加教师</button>
    <button type="submit" class="btn btn-default" type="button" name="delete_teacher">删除教师</button>
    <?php
        if(isset($_POST['insert_teacher'])){
            $home_url='http://'. $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/admin_insert_teacher_page.php';
            header('Location:'.$home_url); 
        }
        if(isset($_POST['delete_teacher'])){
            $home_url='http://'. $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/admin_delete_teacher_page.php';
            header('Location:'.$home_url); 
        }
    ?>
    </form>
  </body>
</html>
