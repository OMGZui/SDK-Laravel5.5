<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>邮件</title>
</head>

<body>
	@component('mail::message')
     - {{ $name }} 
     - {{ $name }} 
     - {{ $name }} 
    @endcomponent
</body>

</html>