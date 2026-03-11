<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
</head>

<body>
    <h1>Tambah User</h1>

    <form method="post" action="/user/tambah_simpan">
        @csrf

        Username <br>
        <input type="text" name="username"><br>

        Nama <br>
        <input type="text" name="nama"><br>

        Password <br>
        <input type="password" name="password"><br>

        Level ID <br>
        <input type="text" name="level_id"><br>

        <input type="submit" value="Simpan">

    </form>
</body>

</html>