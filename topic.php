<?php
include 'header.php';
?>

<form method="post" action="">
  <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
    <center><tr>
     <td><h1 align='center'>Topic aanmaken</h1></td>
   </tr><center>
  <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
    <tr>
      <td align='center'>Naam van topic: </td>
      <td><input type="text" name="topic_subject"></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
      <td align='center'>Categorie: </td>
      <td><select name="topic_cat"></select></td>
    </tr>
    <tr>
      <td align='center'>Bericht: </td>
      <td><input type="text" name"post_content"></td>
    </tr>
    <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
      <tr>
        <td align='center'><input type='submit' name='submit' value="Topic maken"></td>
      </tr>
    </table>
  </table>
</form>

<?php
include 'footer.php';
?>
