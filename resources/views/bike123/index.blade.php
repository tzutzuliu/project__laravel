<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    hello index.blade.php<br>

    <button style="background-color: pink;">
        <a href="{{route('bikes.create')}}">
            creat btn
        </a>
    </button>

    <br>

    <button style="background-color: pink;">
        <a href="{{route('bikes.edit',['bike' => 1])}}">
            edit btn
        </a>
    </button>

    <br>

    <button style="background-color: pink;">
        <a href="{{route('student123')}}">
            student btn
        </a>
    </button>


    @php



    @endphp



    @foreach($data['myArr'] as $key => $value) 
        
        <a href="http://">{{$value}}</a>
        
    @endforeach


    {{--方法一--}}
    {{------<a href="/bike123/create">create btn</a>----}}
    {{--方法二--}}
    {{--<a href="{{route('bikes.create')}}">create btn</a>--}}
    {{--<a href="{{route('bikess.edit',['bike' => 1])}}">edit btn</a>--}}

</body>
</html>