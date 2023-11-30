<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{$url}}" method="post">
        @csrf
        <h1>Register</h1>
<label for="">enter your name</label>
<input type="text" name="name"  value="{{$customer->name}}"/>
<label for="">enter your email</label>
<input type="email" name="email"  value="{{$customer->email}}"/>
<label for="">enter your password</label>
<input type="password" name="password"  value="{{$customer->password}}"/>
<label for="">enter your city</label>
<input type="text" name="city"  value="{{$customer->city}}"/>
<label for="">enter your state</label>
<input type="text" name="state"  value="{{$customer->state}}"/>
<label for="">enter your address</label>
<input type="text" name="address"  value="{{$customer->address}}"/>
<label for="">your date of birth</label>
        <input type="date" name="dob" value="{{$customer->dob}}" />
        <button>submit</button>
    </form>
</body>
</html>