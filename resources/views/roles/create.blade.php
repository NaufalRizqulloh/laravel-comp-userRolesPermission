<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roles Create</title>
</head>
<body>
    Roles Create
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="roles">Roles</label>
        <input type="text" name="roles" id="roles" placeholder="roles" required>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('roles.index') }}">back</a>
</body>
</html>