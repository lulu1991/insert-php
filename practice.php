<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

</head>
<body>
  <?php


  // 存入数据库
  define('DB_HOST','127.0.0.1');
  define('DB_USER','root');
  define('DB_PWD','****');//密码
  define('DB_NAME','ljh');//

  //连接数据库
  $connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
  if(!$connect){
    die('数据库连接失败，错误信息：'.mysqli_connect_error());
  }
  $sqlstr = "insert into user(user_order,user_name,user_description,login_password,
    role_name,organization_name,user_configuration,enable,login_frequency,
    last_login_time,create_date,create_person,update_person,update_date)
    values(1,'Tom','president','***','president','board of directors','high-level','1','8',now(),now(),
    'jin','jin',now());";

  //   $result = $connect ->query($query);

  if($connect->query($sqlstr) === TRUE) {
      echo "新记录插入成功";
  }
  else {
      echo "Error: " . $sqlstr . "<br>" . $connect->error;
  }


?>
</body>
</html>
