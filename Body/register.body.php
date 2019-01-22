<?php
echo "<link rel='stylesheet' type='text/css' href='../CSS/home_css.css' />";
include_once("not_registered_view.php");
include_once("footer.php");


?>


<form method="post">

<div style="text-align: center" class="container">
            <div class="row main">
                <div class="main-login main-center">
                <legend><h2>Регистрирайте се</h2></legend>

                    <form class="" method="post" action="#">
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Потребителско име</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Въведете потребителско име" />
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Парола</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" id="password"  placeholder="Въведете парола"  name="password"/>
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="confirm" class="cols-sm-2 control-label">Потвърдете парола</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" id="confirm"  placeholder="Потвърдете паролата" name="password_2"/>
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Имейл</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" id="email"  placeholder="Въведете имейла си" name="email"/>
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Име</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" id="name"  placeholder="Въведете име" name="first_name"/>
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Фамилия</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" id="name"  placeholder="Въведете фамилия" name="last_name"/>
                                </div>
                            </div>
                        </div>                        
						<br>
                        <div class="fоrm-group">
                        <input type="submit" value="Регистрирайте се!" class="btn float-right login_btn" name="submit" >
                    </div>
                        
                    </form>
                </div>
            </div>
        </div>

</form>
