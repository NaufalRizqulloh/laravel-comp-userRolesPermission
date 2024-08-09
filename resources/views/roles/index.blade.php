<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roles Index</title>
</head>
<body>
    Roles Index
    <a href="{{ route('users.create') }}">Create Users</a>
    <a href="{{ route('roles.create') }}">Create Roles</a>
    <a href="{{ route('roles.assign') }}">Assign Roles</a>
    <ul>
        <li>USERS</li>
        @foreach ($users as $user)
            <li>{{ $user->name }}, id : ({{ $user->id }})</li>
        @endforeach
    </ul>
    <ul>
        <li>ROLES</li>
        @foreach ($roles as $role)
            <li>{{ $role->role }}, id : ({{ $role->id }})</li>
        @endforeach
    </ul>
    <ul>
        <li>USER HAS ROLES</li>
        @foreach ($userHasRoles as $uhr)
            <li>User ({{ $uhr->user_id }}) has Role ({{ $uhr->roles_id }})</li>
        @endforeach
    </ul>
</body>
</html>