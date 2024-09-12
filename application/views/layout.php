<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnekaZoo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
            max-width: 800px;
            /* Adjust the max-width as needed */
            margin: 0 auto;
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= site_url('animal') ?>">AnekaZoo</a>
        </div>
    </nav>

    <div class="content-wrapper container mt-4">
        <?php $this->load->view($content); ?>
    </div>

    <footer class="footer mt-auto">
        <div class="container">
            <p>&copy; 2024 AnekaZoo. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>