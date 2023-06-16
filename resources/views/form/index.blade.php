<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hi</p>

    @foreach ($es as $e)
        {{$e->first_name}}
    @endforeach

    <form action="" method="">

        @csrf
        <input type="text" name="first_name">
       

        </label>
        
       
        <button type="submit">Submit</button>
    </form>
</body>
</html>