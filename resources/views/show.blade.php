<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>{{ $profile->name }}</h1>
    <p>Email: {{ $profile->email }}</p>
    <p>Bio: {{ $profile->bio }}</p>
    <a href="{{ route('index') }}">Back to Profiles</a>
    <a href="{{ route('edit', $profile->id) }}">Edit</a>
    <form action="{{ route('destroy', $profile->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
</body>
</html>