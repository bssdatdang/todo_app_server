<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
    </style>
</head>
<body>

<div class="content">

    Click <b><a href="{{env('FRONTEND_URL')}}/forget-pass/change-new/{{$id}}/{{$token}}">here</a></b> to reset your password.<br>
    We will send you the new password. This link will expire in 24 hours after sending this mail.
</div>

</body>
</html>
