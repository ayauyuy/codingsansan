<?php
    $usernameerr="";
    $passworderr="";
    if(isset($_POST['login'])){
        function tes_data($data){
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        if(empty($_POST['usename'])){
            $usernameerr="Username harus diisi blog";
        }
        else{
            $usernameerr=tes_data($_POST['username']);
        }

        if(empty($_POST['username'])){
            $passworderr="Password harus diisi tol";
        }
        else{
            $passworderr=tes_data($_POST['password']);
        }
    }
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <form action="login.php" method="post">
                    <div class="formulir">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="fill username" require>
                        <span class="error">*<?php echo $usernameerr; ?></span>
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" placeholder="fill password" require>
                        <span class="error">* <?php echo $passworderr; ?></span>
                        <button type="submit" name="login">Login</button>
                    </div>
                </form>
            </body>
            </html>