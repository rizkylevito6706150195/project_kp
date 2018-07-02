

<center><h2>Penginputan Data Mentoring</h2></center>
<br><br>

<?php
include ("connection.php");
?>

<center>
	<form action="inputdata_mengisidata.php" method="post">
nomor form
<select name="nomor_form" id="nomor_form" maxlength="30" onchange="this.form.submit();">
    <option value=""></option>
    <?php
    $val = $_POST['nomor_form']?:'';

    $sql = "SELECT DISTINCT nomor_form FROM data_form_pertanyaan";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$selected = ($val == $row['nomor_form'] ? 'selected="selected"' : '');
        echo '<option value ="' . $row['nomor_form'] . '" '. $selected .'>' . $row['nomor_form'] . '</option>';
    }
	}
    ?>
</select><br><br>
<input type="submit">
	</form>
</center>