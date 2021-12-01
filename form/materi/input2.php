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
        <legend>Pendaftaran Peserta Didik Baru</legend>
        <form action="proses2.php" method = "post">
            <table>
                <tr>
                <th style ="text-align: left">NAMA LENGKAP</th>
                <td>:</td>
                <td><input type="text" name = "nama" size ="50" >
            </td>
                </tr>
                <tr>
                <th style ="text-align: left">EMAIL</th>
                <td>:</td>
                <td><input type="email" name = "email" size ="50" >
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
                <th style ="text-align: left">AGAMA</th>
                <td>:</td>
                <td>
                    <select name="agama" id="">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">budha</option>
                        <option value="konghucu">konghucu</option>
                    </select>
                </td>
                </tr></tr>
                <tr>
                <th style ="text-align: left">TINGGI BADAN & BERAT BADAN</th>
                <td>:</td>
                <td>
                    <input 
                        type="number"
                        name = "td"
                        min = "100"
                        max = "200"
                        ploceholder = "Tinggi Badan"
                        >

                    <input 
                        type="number"
                        name = "bb"
                        min = "1"
                        max = "100"
                        ploceholder = "Tinggi Badan"
                    >    
                </td>
                </tr>
                </tr>
                <tr>
                <th style ="text-align: left">KELENGKAPAN PERSYARATAN</th>
                <td>:</td>
                <td>
                <input type="checkbook" name = "sSehat" id ="" >Surat Sehat
                <input type="checkbook" name = "KK" id ="" >Kartu Keluarga
                <input type="checkbook" name = "SKL" id ="" >Surat Keterangan Lulus
                </td>
                </tr>
                </tr>
                <tr>
                <th style ="text-align: left">NOMOR TELEPON</th>
                <td>:</td>
                <td>
                <input type="number" name = "nomor" ></td>
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