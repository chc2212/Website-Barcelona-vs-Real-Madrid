<?
   // 이전화면에서 이름이 입력되지 않았으면 "이름을 입력하세요"
   // 메시지 출력
   	include "../extract.php";
	
	if(!$id) {
     echo("
           <script>
             window.alert('아이디를 입력하세요.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   if(!$passwd) {
     echo("
           <script>
             window.alert('비밀번호를 입력하세요.')
             history.go(-1)
           </script>
         ");
         exit;
   }

   include "dbconn.php";

   
   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);

   $num_match = mysql_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다.')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysql_fetch_array($result);

        $db_passwd = $row[passwd];

        if($passwd != $db_passwd)
        {
           echo("
              <script>
                window.alert('비밀번호가 틀립니다.')
                history.go(-1)
              </script>
           ");

           exit;
        }
        else
        {
         //  $userid = $row[id];
       //    $username = $row[name];

           session_start();

		   //$_SESSION[$userid];
           //$_SESSION[$username];

		   $_SESSION['userid']=$row[id];
           $_SESSION['username']=$row[name];

           echo("
              <script>
                top.location.href = '../index.php';
              </script>
           ");
        }
   }        
      
?>
