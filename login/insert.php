<?
   
   	include "../extract.php";
	include "../dbconn.php";       // dconn.php ������ �ҷ���

     
   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('�ش� ���̵� �����մϴ�.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����
   $ip = $REMOTE_ADDR;         // �湮���� IP �ּҸ� ����
   
   if ($phone1 && $phone2 && $phone3)
       $tel = $phone1."-".$phone2."-".$phone3;
   else
       $tel = "";

   $sql = "insert into member(id, passwd, name, sex, tel, address) ";
   $sql .= "values('$id', '$passwd', '$name', '$sex', '$tel', '$address')";

   // ���ڵ� ���� ���
   mysql_query($sql, $connect);  // $sql �� ����� ��� ����

   mysql_close();                // DB ���� ����
   
   Header("Location:login_form.html");  // login_form.html �� �̵�
?>

   
