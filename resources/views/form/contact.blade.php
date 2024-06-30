<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h2>contact Form</h2>
    
    <form action="{{route('form.post')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name:
            <input type="text" name="name" placeholder="Enter your name">
        </label>
        <label for="">Email:
            <input type="email" name="email" placeholder="Enter your email">
        </label>
        <label for="">File</label>
        <input type="file" name="profile_picture">
        <button type="submit">Submit</button>

        <p>{{session('Success')}}</p>
    </form>
</body>
</html>