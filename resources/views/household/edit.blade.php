<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household</title>
</head>
<body>
    <h1>Update a household</h1>
    <form method="post" action="{{route('household.update', ['household' => $household])}}">
        @csrf
        @method('put')
    	<div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" value="{{$household->name}}">
            <br>
            
            <label for="name">Description</label>
            <input type="text" name="description" placeholder="description" value="{{$household->description}}">
            <br>
            
            <label for="size">Size</label>
            <input type="text" name="size" placeholder="size" value="{{$household->size}}">
            <br>

            <input type="submit" value="Save">

        </div>
    </form>
</body>
</html>