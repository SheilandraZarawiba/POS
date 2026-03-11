<!DOCTYPE html>
<html>

<head>
    <title>Data User</title>
</head>

<body>
    <h1>Ubah User</h1>

    <form method="post" action="/user/ubah_simpan/{{ $data->user_id }}">
        @csrf

        Username <br>
        <input type="text" name="username" value="{{ $data->username }}"><br>

        Nama <br>
        <input type="text" name="nama" value="{{ $data->nama }}"><br>

        Password <br>
        <input type="password" name="password"><br>

        Level ID <br>
        <input type="text" name="level_id" value="{{ $data->level_id }}"><br>

        <input type="submit" value="Update">

    </form>
</body>

</html>