<?
    session_start();
?>
<html>
 <head>
  <title>Real Madrid C.F vs F.C Barcelona</title>
  <link rel="stylesheet" href="style.css" type="text/css">
 </head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table width="790" align="center" cellspacing="0" cellpadding="0" border="3">
        <tr>
           <td>
    <table width="790" cellspacing="0" cellpadding="0" border="2">
   <!--상단제목그림-->
	<tr>
          <td align="center" colspan="10">
            <a href ="main_init.php" target ="main"><img border="0" align = "center"  src="img/logo.jpg" width="340" height="81"></a></td>
        </tr>

        <tr>
          <td align = "center" height="8" colspan="10">
		                                  Real Madrid C.F vs F.C Barcelona &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img border="0"  src="img/blank.gif" width="1" height="8"></td>
        </tr>

 
 <!--
        <tr>
          <td colspan="10">
            <img border="0" src="img/sub_title.gif" width="776" height="146"></td>
        </tr>

        <tr>
          <td height="8" colspan="10">
            <img border="0" src="img/blank.gif" width="1" height="8"></td>
        </tr>
   
	   -->

   <!--메뉴 시작-->
        <TR>
          <TD>
            <a href="real/intro.html" target="main">
            <img SRC="img/intro_real.png" WIDTH=87 HEIGHT=47 border=0 ALT=""></a></TD>
<!--
<?
    if (!$_SESSION['userid'])
    {
        echo "
          <TD>
            <a href='login/login_form.html'  target='main'>
            <img SRC='img/menu_02.gif' WIDTH=86 HEIGHT=47 border=0 ALT=''></a></TD>
         ";
    }
    else
    {
        echo "
         <TD>
           <a href='login/logoff.php'  target='main'>
		    <img SRC='img/menu_10.gif' WIDTH=86 HEIGHT=47 border=0 ALT=''></a></TD>
         ";
    }
    if (!$_SESSION['userid']) // 회원 가입 
    {
        echo "
	  <TD>
	    <a href='login/member_form.html'  target='main'>
	    <img SRC='img/menu_03.gif' WIDTH=84 HEIGHT=47  border=0 ALT=''></a></TD>
         ";
    }
    else
    {
        echo "
          <TD>
	    <a href='login/modify_memberinfo.php'  target='main'>
            <img SRC='img/menu_11.gif' WIDTH=84 HEIGHT=47  border=0 ALT=''></a></TD>
         ";
    }
?>
-->
<!--
          <TD>
            <a href="real/honour.html"  target="main">
            <img SRC="img/register_real.png" WIDTH=86 HEIGHT=47 border=0 ALT=""></a></TD>
       -->
		  <TD>
	    <a href="real/squad.html"  target="main">
            <img SRC="img/squad_real.png" WIDTH=86 HEIGHT=47 border=0 ALT=""></a></TD>


	<TD>
			 <a href="real/media.html"  target="main">
			 <img SRC="img/media_real.png" WIDTH=86 HEIGHT=47 border=0 ALT=""></TD>

			<TD>
			 <img SRC="img/vs.png" WIDTH=80 HEIGHT=35 border=0 ALT=""></TD>

          <TD>
            <a href="bar/intro.html"  target="main">
            <img SRC="img/intro_bar.png" WIDTH=85 HEIGHT=47 border=0 ALT=""></a></TD>
          <TD>
            <a href="bar/squad.html"  target="main">
            <img SRC="img/squad_bar.png" WIDTH=96 HEIGHT=47 border=0 ALT=""></a></TD>
			<!--
          <TD>
	    <a href="bar/squad.html"  target="main">
	    <img SRC="img/squad_bar.png" WIDTH=86 HEIGHT=47 border=0 ALT=""></a></TD>
          
		  -->
		     <TD>
	    <a href="bar/media.html"  target="main">
	    <img SRC="img/media_bar.png" WIDTH=89 HEIGHT=47 border=0 ALT=""></a></TD>
	</TR>
    </table>
          </td>
        </tr>
    </table>
<!--메뉴끝-->
</body>
</html>
