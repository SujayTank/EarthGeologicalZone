{{-- @component('mail::message')

    # Thank you for your message

    Name: {{$data['name']}}
    Email: {{$data['email']}}
    Subject: {{$data['subject']}}
    Message: {{$data['message']}}

@endcomponent --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EGZ</title>
</head>
<body>

   <b> Name: </b> {{$data['name']}} (<b> Email:</b> {{$data['email']}} )<br><br>
   <b> Subject: </b> {{$data['subject']}}  <br><br>
   <b> Message:</b> {{$data['message']}}<br><br>
   <i><b> Thank You </b></i>

</body>
</html>
