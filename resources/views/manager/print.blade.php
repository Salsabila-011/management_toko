<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Orders for Cabang: {{ $orders->first()->cabang ?? 'N/A' }}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Cabang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->product_id }}</td>
                    <td>{{ $order->jumlah }}</td>
                    <td>{{ number_format($order->harga, 2) }}</td>
                    <td>{{ number_format($order->total_harga, 2) }}</td>
                    <td>{{ $order->cabang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
