<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        div {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2070b4;
        }


        .btn-create {
            display: block;
            background-color: #2ecc71;
            color: #fff;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn-create:hover {
            background-color: #27ae60;
        }

        .btn-edit,
        .btn-view,
        .btn-delete {
            display: inline-block;
            padding: 8px 12px;
            margin: 5px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-create {
            background-color: #2ecc71;
            color: #fff;
            text-align: center
        }

        .btn-edit {
            background-color: #3498db;
            color: #fff;
        }

        .btn-view {
            background-color: #f39c12;
            color: #fff;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: #fff;
        }

        .btn-edit:hover,
        .btn-view:hover,
        .btn-delete:hover {
            filter: brightness(90%);
        }
    </style>
    <!-- End Styles -->

    <title>Reportes de Gastos</title>
</head>
<body>
    <div>
        <h1>Reportes de Gastos</h1>
        <table>
            <tr>
                <th>Título</th>
                <th>Editar</th>
                <th>Ver</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($expenseReports as $expenseReport)
                <tr>
                    <td>{{ $expenseReport->title }}</td>
                    <td style="text-align: center;"><a href="/expense_reports/{{ $expenseReport->id }}" class="btn-view"><i class="fas fa-eye"></i> Ver</a></td>
                    <td style="text-align: center;"><a href="/expense_reports/{{ $expenseReport->id }}/edit" class="btn-edit"><i class="fas fa-edit"></i> Editar</a></td>
                    <td style="text-align: center;"><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete" class="btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</a></td>
                </tr>
            @endforeach
        </table>
        <a href="/expense_reports/create" class="btn-create"><i class="fas fa-plus"></i> Crear Reporte</a>
    </div>
</body>
</html>
