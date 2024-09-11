<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- resources/views/students.blade.php -->

    <h1>Daftar Siswa</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->schoolclass_id }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>

</html>