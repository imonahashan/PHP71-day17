<?php
$res=' ';
if(isset($_POST['btn'])){
    require_once 'Calculation.php';
    $result1 = new Calculation();
    $res = $result1->myCalculator($_POST);
}


?>



<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number" value="<?php echo $_POST['first_number'] ?>"/></td>
        </tr>
        <tr>
            <th>Last Number</th>
            <td><input type="text" name="last_number"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="+"/></td>
            <td><input type="submit" name="btn" value="-"/></td>
            <td><input type="submit" name="btn" value="*"/></td>
            <td><input type="submit" name="btn" value="/"/></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="result" value="<?php echo $res; ?>" id="fullName"/></td>
        </tr>
    </table>
</form>