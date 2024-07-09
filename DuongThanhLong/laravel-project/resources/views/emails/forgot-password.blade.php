<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu</title>
</head>
<body>
    <p>Xin chào {{ $user->name }},</p>
    <p>Bạn đã yêu cầu đặt lại mật khẩu. Vui lòng nhấp vào liên kết dưới đây để đặt lại mật khẩu của bạn:</p>
    <p><a href="{{ $url }}">{{ $url }}</a></p>
    <p>Liên kết này sẽ hết hạn sau {{ config('auth.passwords.users.expire') }} phút.</p>
    <p>Trân trọng,</p>
    <p>{{ config('app.name') }}</p>
</body>
</html>
