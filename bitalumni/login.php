<?php
//--login.php
if($username=="admin") {
    echo"ยินดีต้อนรับ".$_POST['USERNAME']."คุณคือผู้ดูแลระบบ";
    echo"<BR><a href='admin/index.php'>ลิ้งไปหน้า  Backend </a>";
  }
  elseif($username=="nisachon") {
	 echo"ยินดีต้อนรับ".$_POST['PASSWORD']."คุณคือสมาชิกระบบ </a>";
	 echo"<BR><a href='admin/index.php'>ลิ้งไปหน้า  Frontend </a>";
  }
  else 
  {
	 echo"ยินดีต้อนรับ".$_POST['USERNAME']."คุณคือผู้ใช้งานทั่วไป</a>"; 
	 echo"<BR><a href='admin/login.php'> ลิ้งไปหน้า user (myproject)</a>";
  }


?>