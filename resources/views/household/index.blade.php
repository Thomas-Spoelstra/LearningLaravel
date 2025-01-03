<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household</title>
</head>
<body>
    <h1>Household</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Size</th>
                <th>Edit</th>
            </tr>
            @foreach ($households as $household )
            <tr>
                <td>{{$household->name}}</td>
                <td>{{$household->description}}</td>
                <td>{{$household->size}}</td>
                <td><a href="{{route('household.edit', ['household' => $household])}}">Edit</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>