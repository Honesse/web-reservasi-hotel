<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>


    <div class="container">
        <h1>Invoice</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID Transaksi</th>
                    <td>{{ $transaction->id }}</td>
                </tr>
                <tr>
                    <th>Nama User</th>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <th>Harga Sewa Kamar</th>
                    <td>Rp.{{ $post->price }}</td>
                </tr>
                <tr>
                    <th>Jenis Reservasi</th>
                    <td>{{ $post->title }}</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>Rp.{{ $transaction->bill }}</td>
                </tr>
            </tbody>
        </table>
    
        <p>Terima kasih telah melakukan transaksi di Hotel Menarique. Please enjoy your stay!</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>
  </body>
</html>