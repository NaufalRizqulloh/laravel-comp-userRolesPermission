<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Users</title>
</head>
<body>
    Create Users
    <form action="{{ route('userNew.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" minlength="8" required>

        <label for="roles">Roles</label>
        <select name="roles" id="roles" required>
            <option value="" disabled selected>Select Role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->role }}</option>
            @endforeach
        </select>

        <button type="submit">submit</button>
    </form>
    <a href="{{ route('roles.index') }}">back</a>
</body>
</html>