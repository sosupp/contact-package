<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Package</title>
</head>
<body>
    <h1>Hello you can contact us using this page.</h1>

    {{-- form --}}
    <form action="" method="POST">
        @csrf

        <input type="text"
            name="name"
            placeholder="Name">

        <input type="text"
            name="mobile"
            placeholder="mobile number">

        <input type="text"
            name="email"
            placeholder="email">

        <textarea name="message"
            id="message"
            cols="30"
            rows="10"
            placeholder="message"></textarea>

        <button type="submit">Send</button>
    </form>
</body>
</html>
