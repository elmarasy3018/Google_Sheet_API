<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>date</th>
            <th>status</th>
        </tr>
        @foreach ($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->date}}</td>
            <td>{{$row->status}}</td>
            <td>
                <form action="/delete" method="get">
                    @csrf<input type="number" id="id" name="id" value="{{$row->id}}" hidden>
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{url('/create')}}">
        <button>Add Record</button>
    </a>
</body>

</html>