<?php
//    echo '<pre>';
//    print_r($_POST);
//
//
//    echo isset($x);


    $result=' ';
    if(isset($_POST['btn'])){
       require_once 'FullName.php';
       $fullName = new FullName();
       $result = $fullName->makeFullName($_POST['first_name'], $_POST['last_name']);
    }




?>


<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name" id="firstName"/></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name" id="lastName"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit" id="firstName"/></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="fullName" value="<?php echo $result; ?>" id="fullName"/></td>
        </tr>
    </table>
</form>





