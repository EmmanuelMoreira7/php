<?php

    $logins = file("login.txt");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Todos os Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <hr>
                <h3>Login</h3>
                <table class="table">
                    <thead>
                        <th>Usernameo</th>
                        <th>Password</th>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($logins as $login ){
                              $dado = explode(" - ", $login);

                            
                        ?>
                            <tr>
                                <td><?=$dado[0];?></td>
                                <td><?=$dado[1];?></td>
                                
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                <a href="login.php" class="btn btn-primary"> Cadastra Login</a>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>