<!DOCTYPE html>
<html>
<head>
    <title>New Contact</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
    </style>
</head>
<body>

<div class="content">

    <b>A new contact:</b> <br><br>
    <b>To: {{env('MAIL_CONTACT')}} </b><br>
    <b>From: </b>{{$email}}<br>
    <b>Name: </b>{{$name}}<br>
    <b>Comment: </b>{{$comment}}<br>


</div>

</body>
</html>
