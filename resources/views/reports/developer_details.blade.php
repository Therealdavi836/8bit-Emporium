<!DOCTYPE html>
<html>
<head>
    <title>Developer Details Report</title>
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
        <h1>Developer Details Report</h1>
    </div>
    <div class="footer">
        <p>Page <span class="pagenum"></span></p>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $developer)
                <tr>
                    <td>{{ $developer->id }}</td>
                    <td>{{ $developer->name }}</td>
                    <td>{{ $developer->country }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>