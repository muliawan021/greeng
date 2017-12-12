<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data User</title>
</head>
<body>
<form action="{{url('user/register')}}" method="post">
    {{ csrf_field() }} 
    <p>Nama</p>
    <input type="text" name="name">
    <p>Password</p>
    <input type="password" name="password" >
    <p>Jenis Kelamin</p>
    <select name="gender" id="">
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
    <p>Tanggal Lahir</p>
    <input type="date" name="birthday" id="">
    <p>Email</p>
    <input type="email" name="email" id="">
    <p>Nomor Hp</p>
    <input type="text" name="mobile" >
    <p>Alamat</p>
    <textarea name="address" id="" cols="20" rows="5"></textarea>
    <p>Asal Sekolah/Kampus</p>
    <input type="text" name="school" >
    <p>Kota</p>
    <input type="text" name="city" >
    <p>Provinsi(Tanpa Singkatan)</p>
    <input type="text" name="province" placeholder="ex:Kalimantan Timur" >
    <p>Tanggal Gabung Green Generation</p>
    <input type="date" name="join" ><br>
    <button type="submit" >Registrasi</button>
    </form>
</body>
</html>