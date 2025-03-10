
<!DOCTYPE html>
<html>
<head>
    <title>Platform Details Report</title>
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
        <h1>Platform Details Report</h1>
    </div>
    <div class="footer">
        <p>Page <span class="pagenum"></span></p>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Videogame ID</th>
                <th>Videogame Title</th>
                <th>Platform ID</th>
                <th>Platform Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $platform_detail)
                <tr>
                    <td>{{ $platform_detail->id }}</td>
                    <td>{{ $platform_detail->videogames_id }}</td>
                    <td>{{ $platform_detail->videogame->title }}</td>
                    <td>{{ $platform_detail->platforms_id }}</td>
                    <td>{{ $platform_detail->platform->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>