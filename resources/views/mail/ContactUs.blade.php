<!DOCTYPE html>
<html>
<head>
    <title>New Contact</title>
</head>
<body>
    <p>New TIRAZCLINIC Contact for {{ $data['name'] }}</p>
    <h5>name : {{$data['name']}}</h5>
    <h5>subject : {{$data['subject']}}</h5>
    <h5>phone : {{$data['phone']}}</h5>
    <h5>email : {{$data['email']}}</h5>
    <p>msg : {{$data['msg']}}</p>
</body>
</html>
