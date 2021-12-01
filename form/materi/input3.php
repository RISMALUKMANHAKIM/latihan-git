<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Pendaftaran Syarat Masuk TNI/PORLI </legend>
    <form action="proses2.php" method = "post">
        <table>
        <tr>
            <th style ="text-align: left">NAMA LENGKAP</th>
            <td>:</td>
            <td><input type="text" name = "nama" size ="50" >
            </td>
        </tr>
        <tr>
                <th style ="text-align: left">TINGGI BADAN</th>
                <td>:</td>
                <td>
                    <input 
                        type="number"
                        name = "td"
                        min = "100"
                        max = "200"
                        ploceholder = "Tinggi Badan"
                        >   
                </td>
        </tr>
        <tr>
                <th style ="text-align: left">BADAN BADAN</th>
                <td>:</td>
                <td>
                    <input 
                        type="number"
                        name = "td"
                        min = "1"
                        max = "100"
                        ploceholder = "Berat Badan"
                        >   
                </td>
        </tr>
        <tr>
                <th style ="text-align: left">JENIS KELAMIN</th>
                <td>:</td>
                <td>
                <input type="radio" name = "jk" value = "Laki-laki"> L 
                <input type="radio" name = "jk" value = "Perempuan"> P
            </td>
        </tr>
        <tr>
            <td>
            <button type = "sumbit" name = "simpan">DAFTAR</button>
            <button type = "riset">BERSIHKAN</button>
            </td>
        </tr>


        </table>
    </form>
    </fieldset>
</body>
</html>