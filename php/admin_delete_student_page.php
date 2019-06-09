<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>删除学生</title>
</head>
<link
    rel="stylesheet"
    href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
  />
  <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<form enctype="multipart/form-data" role="form" action="" method="post">
<h4>删除学生信息</h4>
         <!-- 搜索输入框 -->
         <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <!-- 输入框的名字是stu_id用于a_search_student.php中获取输入的学号 -->
                        <input type="text" class="form-control" name="stu_id" placeholder="先输入删除的学生学号核对后再删除..." required>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <!-- 此按钮的功能是删除查找出来的学生信息,按钮的name是delete_btn -->
            <button type="submit" name="delete_btn" class="btn btn-primary">删除</button>
            <?php
            // 响应删除按钮
                if(isset($_POST['delete_btn'])){
                    require_once('admin_delete_student.php');
                }
            ?>
</form>
</body>
</html>