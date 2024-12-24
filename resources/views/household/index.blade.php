<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Household</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Size</th>
            </tr>
            @foreach ($households as $household )
            <tr>
                <td>{{$household->id}}</td>
                <td>{{$household->name}}</td>
                <td>{{$household->description}}</td>
                <td>{{$household->size}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>