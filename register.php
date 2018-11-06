<?php
include 'header.php';
?>
<form method="post" action="">

<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
  <center><tr>
   <td><h1 align='center'>Registreer je account</h1></td>
 </tr><center>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
  <tr>
    <td align='center'>Gebruikersnaam:</td>
    <td><input type="text" name="user_name"></td>
  </tr>
  <tr> <td>&nbsp;</td> </tr>
  <tr>
    <td align='center'>Wachtwoord: </td>
    <td><input type="password" name="user_pass"></td>
  </tr>
  <tr> <td>&nbsp;</td> </tr>
  <tr>
    <td align='center'>Wachtwoord nogmaals: </td>
    <td><input type="password" name="user_pass_check"></td>
  </tr>
  <tr> <td>&nbsp;</td> </tr>
  <tr>
    <td align='center'>E-mail: </td>
    <td><input type="text" name="user_email"></td>
  </tr>
    <tr> <td>&nbsp;</td> </tr>
      <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
        <tr>
          <td align='center'><input type='submit' name='submit' value="Registreren"></td>
        </tr>
      </table>
    </table>
  </table>
</form>

<?php
include 'footer.php';
?>
