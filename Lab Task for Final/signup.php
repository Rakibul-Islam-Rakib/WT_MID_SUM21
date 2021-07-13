<?php include 'main_header.php'; ?>
<?php

include 'controllers/temp.php';


?>
<html>

<head></head>

<body>
    <form method="post" action="">
        <fieldset>
            <table>
                <td>
                    <center> <b> Sign Up
                </td>
                <h5> <?php echo $err_db; ?></h5>
                <tr>
                    <td>Enter Name</td>
                    <td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="your name"> </td>
                    <td><span> <?php echo $err_name; ?> </span></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td>: <input type="text" name="username" value="<?php echo $username; ?>" placeholder="your username"> </td>
                    <td><span> <?php echo $err_username; ?> </span></td>
                </tr>

                <tr>
                    <td>Enter Password</td>
                    <td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="password"> </td>
                    <td><span> <?php echo $err_password; ?> </span></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="text" name="email" value="<?php echo $email; ?>" placeholder="enter your email"> </td>
                    <td><span> <?php echo $err_email; ?> </span></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"> <input type="submit" name="Sign_up" value="Sign Up"><input type="reset" value="Reset"> </td>

                </tr>
            </table>



        </fieldset>
    </form>
</body>

</html>