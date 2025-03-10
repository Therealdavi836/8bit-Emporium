
<!DOCTYPE html>
<html>
<head>
    <title>Recharge Tarjets Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header, .footer {
            width: 100%;
            text-align: center;
            position: fixed;
        }
        .header {
            top: 0px;
        }
        .footer {
            bottom: 0px;
        }
        .pagenum:before {
            content: counter(page);
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
            text-align: center;
        }
        .table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Recharge Tarjets Report</h1>
    </div>
    <div class="footer">
        <p>Page <span class="pagenum"></span></p>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Moneda</th>
                <th>Monto</th>
                <th>Fecha de creación</th>
                <th>Fecha de expiración</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $recharge_tarjet)
                <tr>
                    <td>{{ $recharge_tarjet->code }}</td>
                    <td>{{ $recharge_tarjet->name }}</td>
                    <td>{{ $recharge_tarjet->type }}</td>
                    <td>{{ $recharge_tarjet->currency }}</td>
                    <td>{{ $recharge_tarjet->amount }}</td>
                    <td>{{ $recharge_tarjet->creation_date }}</td>
                    <td>{{ $recharge_tarjet->expiration_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
</html>