<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <form action="/store" method="get">
        @csrf
        <label for="id">ID</label><input type="number" id="id" name="id">
        <label for="date">Date</label><input type="text" id="date" name="date">
        <label for="status">Status</label><input type="text" id="status" name="status">
        <button type="submit">Add Record</button>
    </form>
</body>

</html>