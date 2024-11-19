<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protótipo do hotel - Quinta do Ypuã</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/fruinky" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }

        .navbar {
            padding: 1rem;
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
        }

        .navbar-brand img {
            max-height: 50px;
        }

        .main-container {
            padding: 2rem 1rem;
            background-color: #fff;
        }

        .schedule-title {
            font-weight: bold;
            font-size: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .schedule-table {
            margin: 0 auto;
            width: 80%;
            max-width: 700px;
            border-collapse: collapse;
        }

        .schedule-table th,
        .schedule-table td {
            border: 1px solid #ddd;
            padding: 1rem;
            text-align: center;
        }

        .schedule-table th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        /* Botão de cadastro */
        .btn-cadastro {
            background-color: #c97f35;
            color: #fff;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            margin: 1rem 0;
            border-radius: 25px;
            border: none;
            cursor: pointer;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .action-button {
            width: 100px;
            text-align: center;
            color: #333;
            font-size: 0.9rem;
        }

        .action-button img {
            width: 60px;
            height: 60px;
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .schedule-table {
                width: 100%;
            }

            .btn-cadastro {
                width: 100%;
            }

            .action-button {
                width: 80px;
            }
        }
    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html> 

<script>
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#money').mask('000.000.000.000.000,00', {reverse: true});
    $('#date').mask('00/00/0000');
    $('#phone_with_ddd').mask('(00) 0000-0000');
    $('#phone').mask('0000-0000');
</script>