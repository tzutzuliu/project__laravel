<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  {{-- 方法一 --}}  
  {{-- <link rel="stylesheet" href="/css/style.css"> --}}
  {{-- 方法二 --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  

  {{-- <style>
    h2{
        color:red;
    }
  </style> --}}
</head>
<body>
  @php
    // dd($data)   ;
  @endphp

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>chinese</th>
        <th>english</th>
        <th>math</th>
      </tr>
    </thead>

    <form action="{{route('students.store')}}" method="psot">
        <table>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>

                    <td>
                        <input type="number" name="chinese" id="chinese">
                    </td>

                    <td>
                        <input type="text" name="english" id="english">
                    </td>

                    <td>
                        <input type="text" name="math" id="math">
                    </td>

                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="4">
                        <input type="submit" value="add submit">
                    </td>
                </tr>
                
            </tbody>
        </table>
    </form>

</div>

</body>
</html>