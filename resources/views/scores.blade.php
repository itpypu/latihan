<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- resources/views/scores.blade.php -->

    <h1>Daftar Nilai</h1>

    <table>
        <thead>
            <tr>
                <th>Siswa</th>
                <th>Mata Pelajaran</th>
                <th>Guru</th>
                <th>Nilai</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($scores as $score)
            <tr>
                <td>{{ $score->student->name }}</td>
                <td>{{ $score->subject->subject_name }}</td>
                <td>{{ $score->teacher->name }}</td>
                <td>{{ $score->score }}</td>
                <td>{{ $score->date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>