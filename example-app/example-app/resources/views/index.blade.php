<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $name }}
    {{-- $age --}} <!-- Para hacer un comentario en blade se usa {{--[]--}} -->
    {!! $html !!}  <!-- Nos permite escapar codigo HTML pasado como data -->

    @if ($name == 'Javier')
        Es true
    @else
        No es true
    @endif



</body>
</html>
