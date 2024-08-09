<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Roles</title>
</head>
<body>
    Assign Roles
    <form action="{{ route('roles.storeAssign') }}" method="POST">
        @csrf
        <label for="username">username</label>
        <select name="username" id="username" required>
            <option value="" disabled selected>Select User</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <label for="roles">roles</label>
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