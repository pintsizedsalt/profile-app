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
    <h1>All Profiles</h1>

    @if($profiles->isEmpty())
        <p>No profiles available.</p>
    @else
        @foreach($profiles as $profile)
            <div class="profile-card">
                <h2>{{ $profile->name }}</h2>
                <p>{{ $profile->email }}</p>
                <p>{{ $profile->bio }}</p>
            </div>
        @endforeach
    @endif

    <a href="{{ route('create') }}" class="btn">Create New Profile</a>
</div>

</body>
</html>
