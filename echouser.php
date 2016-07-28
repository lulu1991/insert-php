


<?php
// 存入数据库
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PWD','****');//密码
define('DB_NAME','ljh');//


$connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
if(!$connect){
  die('数据库连接失败，错误信息：'.mysqli_connect_error());
}

$sql = "select * from user";
// $result = $sql->query($query);
$res=$connect->query($sql);      // 执行sql语句,将结果放到$res
// 在循环前 先输出表格,做好表头, 因为在后期循环中表头是不会变的
echo "<table><tr>
<th>user_code</th>
<th>user_order</th>
<th>user_name</th>
<th>user_description</th>
<th>login_password</th>
<th>role_name</th>
<th>organization_name</th>
<th>user_configuration</th>
<th>enable</th>
<th>login_frequency</th>
<th>last_login_time</th>
<th>create_date</th>
<th>create_person</th>
<th>update_person</th>
<th>update_date</th>

</tr>
";

while($row = $res->fetch_assoc()){       // 每次取出值放在$row集合中,
  // echo $row['user_code'];
  // echo $row['user_order'];
 echo  "<tr><td>".$row["user_code"]."</td>";
 echo  "<td>".$row["user_order"]."</td>";
 echo  "<td>".$row["user_name"]."</td>";
 echo  "<td>".$row["user_description"]."</td>";
 echo  "<td>".$row["login_password"]."</td>";
 echo  "<td>".$row["role_name"]."</td>";
 echo  "<td>".$row["organization_name"]."</td>";
 echo  "<td>".$row["user_configuration"]."</td>";
 echo  "<td>".$row["enable"]."</td>";
 echo  "<td>".$row["login_frequency"]."</td>";
 echo  "<td>".$row["last_login_time"]."</td>";
 echo  "<td>".$row["create_date"]."</td>";
 echo  "<td>".$row["create_person"]."</td>";
 echo  "<td>".$row["update_person"]."</td>";
 echo  "<td>".$row["update_date"]."</td> </tr>";

}
 ?>
