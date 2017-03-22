<?php include("header.php"); ?>


<div class="page">

    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 login">
            <h2 class="text-center"> Kayıt ol</h2>

            <?php
            if (isset($_SESSION['email-error'])) {
                echo "<div class=\"alert alert-danger\">" . $_SESSION['email-error'] . "</div>";
                unset($_SESSION['email-error']);
            }
            ?>


            <form action="includes/sign_up.php" method="POST" >
                <label for="name"/> 
                <input type="text" name="name" class="form-control" placeholder="Name:" >
                    <label for="surname"/>
                    <input type="text" name="surname" class="form-control"placeholder="Surname:" >
                        <label for="username"/>
                        <input type="text" name="username" class="form-control"placeholder="Username:" >
                            <label for="email"/>
                            <input type="text" name="email" class="form-control"placeholder="e-mail:" >
                                <label for="password"/>
                                <input type="password" name="password"  class="form-control" placeholder="Password:" maxlength="8" >
                                    <label for="agn_pdw"/>
                                    <input type="password"  name="agn_pdw" class="form-control" placeholder="Password again:" maxlength="8" >
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Remember me</label>
                                        </div>
                                        <button type="submit" name="signup" class="btn  navbar-btn2"> Sign up </button>

                                        </form>
                                        </div>
                                        </div>
                                        </div>
