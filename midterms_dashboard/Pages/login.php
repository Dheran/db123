<?php
include("../Server/authentication.php");
if (isset($error)) {
    echo "<script>alert('".$error."')</script>";
}
require("doc_header.php");
?> 

<body>
<main id="login-form" class="centered-element text-center border rounded-3 p-5">
    <h1 class="mb-5">Login</h1>
    <form action="" method="post">
        <input class="form-control form-control-lg mb-2" type="text" name="username" placeholder="Username">
        <input class="form-control form-control-lg mb-2" type="password" name="password" placeholder="Password">
        <button class="btn btn-lg btn-primary mt-3" type="submit">Log in</button>
    </form>
</main>
</body>
</html>