<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contact Us at anytime</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your name">
        <input type="email" name="email" placeholder="email">
        <textarea name="message" cols="30" rows="10">

        </textarea>
        <button type="submit">submit</button>
    </form>
</body>

</html>