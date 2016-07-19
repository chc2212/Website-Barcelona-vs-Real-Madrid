<html>
 <head>
  <title>Real Madrid C.F vs F.C Barcelona</title>
  <link rel="stylesheet" href="style.css" type="text/css">
 </head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="780" align="center" border = "3" cellspacing="0" cellpadding="0">




<tr align="center" >
<td width = "200" valign=top rowspan="2" >

<!-- 로그인 폼 배경화면을 로그인, 비밀번호로 하여 글씨가 써지면 가려지게 (네이버 로그인처럼)-->

<style type='text/css'>
  .id_blur { background: transparent url("img/login_bg.gif") top left}
  .id_focus { background: #ffffe0 ; color: #003300 }
  .pw_blur { background: transparent url("img/login_bg.gif") bottom left}
  .pw_focus { background: #ffffe0 ; color: #003300 }
 </style>
 
 
   <link rel="stylesheet" href="../style.css" type="text/css">

      <form method=post action=login.php>
    <table align=center>
        <tr><td><img src="login/img/login.gif"></td></tr>
        <tr height=1 bgcolor=#5AB2C8><td></td></tr>
        <tr><td></td></tr>
        <tr><td>
        <input type="text"  name="id" size="10" maxlength="10" onFocus="this.className='id_focus'" onBlur="if( this.value == '' ) { this.className='id_blur' }" class='id_blur' />
		 </td><br />


        </tr>
        <tr>
          <td>
          <input type="password" name="passwd" size="10" maxlength="10" onFocus="this.className='pw_focus'" onBlur="if ( this.value == '' ) { this.className='pw_blur' }" class='pw_blur' />
 
          </td>
        </tr>
        <tr height=1 bgcolor=#5AB2C8><td></td> </tr>
        <tr><td></td></tr>
        <tr>
          <td align=right>
          <input type=image src="login/img/login_on.gif" border=0>
          </a> &nbsp;
          <a href="login/modify_memberinfo.php"><img src="login/img/member.gif" border=0></a>
          </td>
        </tr>
    </table>
      </form>


   <?
    if (!$_SESSION['userid'])  // 레알 팬 회원가입
    {
        echo "
          <TD>
            <a href='login/member_form.html'  target='main'>
            <img SRC='img/real_fan.png' WIDTH=120 HEIGHT=80 border=0 ALT=''></a></TD>
         ";
    }
	/*
    else
    {
        echo "
         <TD>
           <a href='login/logoff.php'  target='main'>
		    <img SRC='img/real_fan.png' WIDTH=120 HEIGHT=80 border=0 ALT=''></a></TD>
         ";
    }
	*/
    if (!$_SESSION['userid']) // 바르샤 팬 회원 가입 
    {
        echo "
	  <TD>
	    <a href='login/member_form.html'  target='main'>
	    <img SRC='img/bar_fan.png' WIDTH=120 HEIGHT=80  border=0 ALT=''></a></TD>
         ";
    }
	/*
    else
    {
        echo "
          <TD>
	    <a href='login/modify_memberinfo.php'  target='main'>
            <img SRC='img/bar_fan.png' WIDTH=120 HEIGHT=80  border=0 ALT=''></a></TD>
         ";
    }
	*/
?>


</td>

</tr>

<tr>
<td align = "center" rowspan="2" colspan = "2">
 <img SRC='img/el.png' WIDTH=567 HEIGHT=400  border=0 align = "center"></a>
<td>
</tr>

</table>
</body>
</html>


