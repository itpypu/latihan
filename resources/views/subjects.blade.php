<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- resources/views/subjects.blade.php -->

    <h1>Daftar Mata Pelajaran</h1>

    <ul>
        @foreach($subjects as $subject)
        <li>{{ $subject->subject_name }}</li>
        @endforeach
    </ul>
</body>

</html>