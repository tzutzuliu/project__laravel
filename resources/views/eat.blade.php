<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>餐廳訂位</h3>

    <p>
        {!! $data['str'] !!}
    </p>

    <!-- blade 語法 -->
    <p>{{ $data['name'] }}</p>
    <p>{{ $data['num'] }}</p>
    <p>{{ $data['str'] }}</p>


    

    <!-- blade 語法 -->
    @php
    // dd($data);
        echo $data['name'];
        echo $data['num'];
        echo $data['str'];
    @endphp

    <!-- 原生php 語法 -->
    <?php 
        echo $data['name'];
        echo $data['num'];
        echo $data['str'];
    ?>

    
</body>
</html>