<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a household</h1>
    <form method="post" action="{{route('household.update')}}">
        @csrf
        @method('post')
    	<div>
            <label for="name">Name</label>
            <input type="tet" name="name" placeholder="name">
            <br>
            
            <label for="name">Description</label>
            <input type="text" name="description" placeholder="description">
            <br>
            
            <label for="size">Size</label>
            <input type="text" name="size" placeholder="size">
            <br>

            <input type="submit" value="Save">

        </div>
    </form>
</body>
</html>