<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3>Lezada xin chào: {{$name}}</h3>
	<p>Mật khẩu của bạn đã được reset</p>
	<a href="{{route('reset-pass',['token'=>$token])}}">bấm vào đây </a>
	<p>để đặt lại mật khẩu</p>
</body>
</html>