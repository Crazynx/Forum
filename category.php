<?php
include 'header.php';
?>
<form method="post" action="">
  <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
    <center><tr>
     <td><h1 align='center'>Categorie aanmaken</h1></td>
   </tr><center>
  <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
    <tr>
      <td align='center'>Naam van categorie: </td>
      <td><input type="text" name="cat_name"></td>
    </tr>
    <tr> <td>&nbsp;</td> </tr>
    <tr>
      <td align='center'>Omschrijving: </td>
      <td><textarea name="cat_description" cols="50" rows="10"></textarea></td>
    </tr>
    <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
      <tr>
        <td align='center'><input type='submit' name='submit' value="Categorie maken"></td>
      </tr>
    </table>
  </table>
</form>

<?php
include 'footer.php';
?>
