<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- resources/views/teachers.blade.php -->

    <h1>Daftar Guru</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->subject->subject_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>