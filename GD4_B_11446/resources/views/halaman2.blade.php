<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GD 4 Halaman 2 - Boniface Fredo Ronan Antolino</title>
    <style>
        legend {
            font-size: 30px;
        }
        td, th {
            padding: 5px;
            text-align: center;
            border: 1px solid;
        }
        .sesi {
            background-color: bisque;
            cursor: pointer;
            transition: 0.5s all;
        }

        .sesi:hover {
            box-shadow: 6px 10px 15px -3px rgba(0,0,0,0.5);
            background-color: aquamarine;
            scale: 1.1;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Schedule</legend>
        <ul style="list-style-type: square;">
            <li><a href="{{ url('halaman1') }}">Page 1</a></li>
            <li><a href="{{ url('halaman2') }}">Page 2</a></li>
        </ul>
        <hr style="border: dotted;">

        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <th colspan="6" style="background-color: rgb(230, 171, 84);"> Jadwal Kuliahku</th>
            </tr>

            <tr>
                <th>Sesi</th>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jumat</th>
            </tr>

            <tr>
                <td>1</td>
                <td></td>
                <td class="sesi"><div>Pemrograman Web</div></td>
                <td></td>
                <td class="sesi"><div>Kecerdasan Komputasional</div></td>
                <td class="sesi" rowspan="2"><div>Pemrograman Berbasis Platform</div></td>
            </tr>

            <tr>
                <td>2</td>
                <td class="sesi"><div>Peretasan Etis</div></td>
                <td></td>
                <td></td>
                <td class="sesi"><div>Penjaminan Mutu Perangkat Lunak</div></td>
            </tr>

            <tr>
                <td>3</td>
                <td></td>
                <td class="sesi"><div>Pembelajaran Mesin dan Pembelajaran Mendalam</div></td>
                <td class="sesi"><div>Manajemen Proyek Perangkat Lunak</div></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>