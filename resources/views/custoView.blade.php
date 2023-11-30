<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="search" name="search" placeholder="Search" value="{{$search}}">
        <button>Search</button>
    </form>
    <a href="{{route('customer.trash')}}">
        <button>Trash</button>
    </a>
    @foreach ($customer as $custo)
    <div>name: {{$custo->name}}</div>
    <div>email: {{$custo->email}}</div>
    <div>gender: {{$custo->gender}}</div>
    <div>dob: {{$custo->dob}}</div>
    <div>state: {{$custo->state}}</div>
    <div>city: {{$custo->city}}</div>
    <div>address: {{$custo->address}}</div>
    <div>status: {{$custo->status}}</div>
    <a href="{{route('customer.delete',['id'=>$custo->id])}}"><button>Move to trash</button></a>
    <a href="{{route('customer.edit',['id'=>$custo->id])}}"><button>update</button></a>
    @endforeach
    <div style="height: 3rem; width:3rem;">
        {{$customer->links()}}
    </div>
</body>
</html>