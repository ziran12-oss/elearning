<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid rgb(236, 180, 29); /* Mengubah warna garis tepi menjadi oren */
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: blue; /* Mengubah warna kotak menjadi biru */
            color: white; /* Mengubah warna teks menjadi putih agar terlihat di atas background biru */
        }
        .img-cell {
            display: flex;
            align-items: center;
        }
        .img-cell img {
            margin-right: 10px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
    <h1>Schedule</h1>
    <table>
        <thead>
            <tr>
                <th>Materi</th>
                <th>Jadwal</th>
                <th>Instruktur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="scheduleBody">
            <!-- Content will be inserted here -->
            <tr>
                <td>Microsoft Office Word For Business</td>
                <td>Senin</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Hera Setiawan">
                    Hera Setiawan
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                    <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                    <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Microsoft Office Excel For Business</td>
                <td>Rabu</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Hera Setiawan">
                    Hera Setiawan
                </td>
                <td>
                <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                    <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                    <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Microsoft Office PowerPoint For Business</td>
                <td>Jumat</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Hera Setiawan">
                    Hera Setiawan
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Aplikasi Teknologi Informasi Dan SOHO Networking</td>
                <td>Selasa</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Billy Kristian">
                    Billy Kristian
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>UI Ux Design</td>
                <td>Selasa</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Hera Setiawan">
                    Hera Setiawan
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Aplikasi Web CMS</td>
                <td>Kamis</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="M.Rama Adytia">
                    M.Rama Adytia
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Web Programing</td>
                <td>Senin/Rabu/Jum'at</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Hera Setiawan">
                    Hera Setiawan
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Desain Grafis KIB</td>
                <td>Senin/Jum'at</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Rio Permata">
                    Rio Permata
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Mobile Programing</td>
                <td>Selasa/Rabu/Kamis</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="Hera Setiawan">
                    Hera Setiawan
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
            <tr>
                <td>Digital Marketing KIBD</td>
                <td>Rabu/Kamis</td>
                <td class="img-cell">
                    <img src="{{ asset('logo-palcomtech.jpg') }}" alt="M.Rama Adytia">
                    M.Rama Adytia
                </td>
                <td>
                    <br> <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q1</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">Q2</a> &nbsp; 
                        <a href="{{ asset('storage/' . session('file')) }}" target="_blank">FINAL</a> <br>
            </tr>
        </tbody>
    </table>
</body>
</html>
