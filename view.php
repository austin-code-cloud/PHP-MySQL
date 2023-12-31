<?php
session_start();

include('./config/db_connect.php');

$users = '';

if (isset($_POST['view'])) {

    $sql = 'SELECT name, email, password, id FROM users';

    //make query & get result

    $result = mysqli_query($dbConnect, $sql);

    //fetch the resulting rows as an array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    // close connection
    mysqli_close($dbConnect);
    // print_r($users[0]);
}
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bulma.min.css">

<table id="example" class="table is-striped" style="width:50%">

    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th><?php if ($_SESSION['role'] === '1' || $_SESSION['role'] === '0') {
                    echo 'Edit';
                } ?></th>
            <th><?php if ($_SESSION['role'] === '1' || $_SESSION['role'] === '0') {
                    echo 'Delete';
                } ?></th>
           


        </tr>
    </thead>
    <tbody>
        <?php if (!empty($users)) { ?>

            <?php $id = 1; ?>

            <?php for ($i = 0; $i < count($users); $i++) { ?>
                <tr>
                    <td><?php echo $id++ ?></td>
                    <td><?php echo $users[$i]['name']; ?></td>
                    <td><?php echo $users[$i]['email']; ?></td>
                    <td><?php if ($_SESSION['role'] === '1') {
                            echo '<form action = " " method = " "> <button type = "submit" name = "edit"> Edit </button> </form> ';
                        } else if ($_SESSION['username'] === $users[$i]['email']) {
                            echo '<form action = " " method = " "> <button type = "submit" name = "edit"> Edit </button> </form> ';
                        } ?></td>
                    <td><?php if ($_SESSION['role'] === '1') {
                            echo '<form action = " " method = " "> <button type = "submit" name = "delete"> Delete </button> </form> ';
                        }else if ($_SESSION['username'] === $users[$i]['email']) {
                            echo '<form action = " " method = " "> <button type = "submit" name = "edit"> Delete </button> </form> ';
                        } ?></td>
                </tr>


            <?php } ?>

        <?php } ?>

    </tbody>
</table>

<form action="./auth/logout.php" method="POST">

    <button type="submit" name="logout">Logout</button>
</form>



<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bulma.min.js"></script>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>