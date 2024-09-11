<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- resources/views/schoolclasses.blade.php -->

    <h1>Daftar Kelas</h1>

    <ul>
        @foreach($schoolclasses as $schoolclass)
        <li>{{ $schoolclass->schoolclass_name }}</li>
        @endforeach
    </ul>
</body>

</html>