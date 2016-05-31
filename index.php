<?php

require ('info.php');



if($_POST && $_POST['submit']) {

    $error="";
    $result="";

    $result='<div class="alert alert-success">Form submitted</div>';
    if(!$_POST['name']){

        $error.="<br/>Please enter Company name";

    }
    if(!$_POST['email']){

        $error.="<br/>Please enter company email";

    }
    if(!$_POST['comment']){

        $error.= "<br/>Please enter your comments";

    }
    if($error){

        $result='<div class="alert alert-danger"><strong>There were error(s) in your form' . $error . '</strong></div>';

    }
}


/*$mailTo="jfluke717@gmail.com";
$subject = "Test form & Email";
$body = "This works!";
$headers = "From: Josh Fluke";

mail($mailTo, $subject, $body, $headers);*/




?>


<html xmlns="http://www.w3.org/1999/html">
<style>
    .email-form{
        border: 1px solid grey;
        border-radius: 10px;
        margin-top: 20px;
    }

    textarea {

       height: 120px;
    }

    .lead
</style>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


</head>

<body>

<div class="container">

<div class="row">
    <div class="col-md-6 col-md-offset-3 email-form">
<h1>Contract Form</h1>

        <?echo $result; ?>
        <?echo $error;?>

        <p class="lead">Please get in touch - I'll get back to you as soon as possible</p>

        <form method="post" >

            <div class="form-group">

                <label for="name">Your Name:</label>

                <input type="text" name="name" class="form-control" placeholder="Name here"/>


            </div>

            <div class="form-group">

                <label for="name">Email:</label>

                <input type="email" name="email" class="form-control" placeholder="Email here"/>



            </div>

            <div class="form-group">

                <label for="comment">Comment:</label>

                <textarea class="form-control" name="comment" ></textarea>

            </div>

            <div class="form-group">

                <label for="states">States</label></ br></br>
                <? foreach ($states as $abbreviation => $name ):?> <!-- This loops through my states -->
                <label for="states"></br><? echo $name . '  <br/>'?></label></ br>
                <input type="checkbox" class="states[]" value=""/>
                <? endforeach;?>

            </div>

            <input type="submit" name="submit" class="btn btn-success btn-lg">
        </form>

    </div>
</div>

</div>
<title>Form</title>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>

