<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Edit Profile</h1>
    <form action="{{ route('update', $profile->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $profile->name }}" required>
        <input type="email" name="email" value="{{ $profile->email }}" required>
        <textarea name="bio">{{ $profile->bio }}</textarea>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('index') }}">Cancel</a>
</div>
</body>
</html>