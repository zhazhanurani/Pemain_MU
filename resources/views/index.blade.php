<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="mt-5">
        <h2 class="text-center mb-4">Daftar Pemain</h2>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Pemain</th>
                    <th>Nomor Pemain</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_pemain as $index => $pemain)
                <tr>
                    <td>{{ $index+1}}</td>
                    <td>{{ $pemain->nama_pemain}}</td>
                    <td>{{ $pemain->no_punggung}}</td>
                    <td>{{ $pemain->posisi}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
    
</body>
</html>