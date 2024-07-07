
<!DOCTYPE html>
<html>
<head>
    <title>New Appointment</title>
</head>
<body>
    <h5>New TIRAZCLINIC Appointment for {{ $data['name'] }}</h5>
    <h5>name : {{$data['name']}}</h5>
    <h5>Email : {{$data['email']}}</h5>
    <h5>Number : {{$data['number']}}</h5>
    <h5>Date : {{$data['date']}}</h5>
    <p>msg : {{$data['msg']}}</p>
</body>
</html>
