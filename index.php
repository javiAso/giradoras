<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Giradoras Zepelin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script type="text/javascript">



            function change() {

                document.getElementById("form1").style = "display:none;";
                document.getElementById("form2").style = "display:block; width:50%; margin-top:5%;";

            }


        </script>

    </head>
    <body>

        <div class="container" style="width:50%; margin-top:5%;" id="form1">

            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">

                        <p style="font-size:20px;">Sign in <a style="float:right;font-size: 15px;margin-top: 3%;"><?= $_GET["mensaje"] ?></a></p>

                    </div>
                    <div class="panel-body">

                        <form action="giradoras.php" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="text" class="form-control" name="user" placeholder="Email">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <br><br>
                            <!--<label><input type="checkbox"> Remember me</label>
                            <br><br>-->

                            <button type="submit" class="btn btn-success">Login</button>
                            <!--<button type="button" class="btn btn-primary">Login with Facebook</button>-->

                            <hr style="border-top:1px solid #333;">
                        </form>

                       <!-- <p>Don't have an account? <a href="#" onclick="change()">Sign Up Here</a></p>-->

                    </div>
                </div>

            </div>
        </div>

        <div class="container" style="display:none;" id="form2">

            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">

                        <p style="font-size:20px;">Sign Up <a href="#" class="change" style="float:right;font-size: 15px;margin-top: 3%; ">Sign in</a></p>

                    </div>
                    <div class="panel-body">

                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Email adress" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">First Name:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="First Name" name="firstName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Last Name:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Last Name" name="lastNAme">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Invitation Code:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="iCode">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-info">Sign Up</button>&nbsp&nbspor
                                </div>
                            </div>
                            <hr style="border-top:1px solid #333;">

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-primary">Sign up with Facebook</button>
                                </div>
                            </div>


                        </form>



                    </div>
                </div>

            </div>
        </div>

    </body>
</html>



</body>
</html>
