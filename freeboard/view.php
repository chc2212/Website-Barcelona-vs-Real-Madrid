<?
    session_start();
?>

<html>
 <head>
  <title>:: PHP 프로그래밍 입문에 오신것을 환영합니다~~ :: </title>
  <link rel="stylesheet" href="../style.css" type="text/css">
 </head>
 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

    <table width=776 border=0 cellspacing=0 cellpadding=0 align=center>

        <tr><td colspan="6" height=25>
             <img src="img/freeboard_title.gif"></td></tr>
        <tr><td background="img/bbs_bg.gif">
             <img border="0" src="img/blank.gif" 
                   width="1" height="3"></td></tr>
        <tr><td height=10></td></tr>

        <tr><td height=10></td></tr>


        <tr height=1 bgcolor=#5AB2C8><td></td>
        </tr>

<?
   include "../dbconn.php";

   $sql = "select * from freeboard where num=$num";
   $result = mysql_query($sql, $connect);
   $row = mysql_fetch_array($result);
   
   $content = str_replace("\n", "<br>", $row[content]);
   $content = str_replace(" ", "&nbsp;", $content);
   $subject = str_replace(" ", "&nbsp;", $row[subject]);
?>

        <tr bgcolor="#D2EAF0" height=30>
          <td>&nbsp;&nbsp;<b><? echo $subject ?></td>
        </tr>
        <tr height=1 bgcolor=#5AB2C8>
          <td></td>
        </tr>
        <tr> 
          <td>
    <table width=100% border=0 cellspacing=10 cellpadding=0 class=txt>
        <tr>
          <td><b>글쓴이 : <? echo $row[name] ?></b>&nbsp;&nbsp;
                          <? echo $row[regist_day] ?> 
          </td>
        <tr height=1 bgcolor=#5AB2C8> <td></td></tr>
        <tr>
          <td><br> <? echo $content ?></td>
        </tr>
    </table>
          </td>
        </tr>
        <tr height=20>
           <td align=right>&nbsp;<font size=-2>IP : 
                          <? echo $row[ip]; ?></font></td>
        </tr>
                  
        <tr height=1 bgcolor=#5AB2C8>
          <td></td>
        </tr>
        <tr>
          <td>

    <table border=0 cellspacing=0 cellpadding=0 width='100%'>
        <tr height=10>
          <td></td>
        </tr>

<?
   if ($userid == "admin")
   {
      echo "
        <tr>
          <td align=center>
          <a href='modify_form.php?num=$num&page=$page'>
                           <img src='img/i_edit.gif' border=0>&nbsp</a>
          <a href='delete.php?num=$num&page=$page'>
                           <img src='img/i_del.gif' border=0>&nbsp</a>
          <a href='list.php?page=$page'>
                           <img src='img/i_list.gif' border=0></a>
          </td>
        </tr>
           ";
   }
   else
   {
      echo "
        <tr>
          <td align=center>
          <a href='passwd_form.php?case=modify&num=$num&page=$page'>
                           <img src='img/i_edit.gif' border=0>&nbsp</a>
          <a href='passwd_form.php?case=delete&num=$num&page=$page'>
                           <img src='img/i_del.gif' border=0>&nbsp</a>
          <a href='list.php?page=$page'>
                           <img src='img/i_list.gif' border=0></a>
          </td>
        </tr>
           ";
   }
?>

          </td>
    </table>
 </body>
</html>
<? 
    $hit = $row[hit];

    $hit++;

    $sql = "update freeboard set hit=$hit where num=$row[num]";
    mysql_query($sql, $connect);
    mysql_close();
?>