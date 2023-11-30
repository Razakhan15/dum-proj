<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trash</title>
</head>
<body>
    <a href="{{route('customer.view')}}">
    <button>View</button></a>
    @foreach ($customer as $custo)
    <div>name: {{$custo->name}}</div>
    <div>email: {{$custo->email}}</div>
    <div>gender: {{$custo->gender}}</div>
    <div>dob: {{$custo->dob}}</div>
    <div>state: {{$custo->state}}</div>
    <div>city: {{$custo->city}}</div>
    <div>address: {{$custo->address}}</div>
    <div>status: {{$custo->status}}</div>
    <a href="{{route('customer.forceDelete',['id'=>$custo->id])}}"><button>Delete</button></a>
    <a href="{{route('customer.restore',['id'=>$custo->id])}}"><button>restore</button></a>
    @endforeach
</body>
</html>