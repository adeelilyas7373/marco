<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Shadow</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .custom-footer {
            background: linear-gradient(90deg, #FF9800, #FF9800); /* Shining blue gradient */
            box-shadow: 0 -8px 15px rgba(0, 0, 0, 0.3); /* Top shadow for footer */
            color: white; /* Text color */
            position: relative;
            z-index: 10;
        }
        .custom-footer a {
            color: white; /* Highlighted link color */
            text-decoration: none;
        }
        .custom-footer a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <footer class="custom-footer py-3 px-5">
        <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex flex-grow-1 align-items-center">
                <span class="fw-bold" style="font-size: 0.9rem;">&copy; 2024 Physiotherapist, All Rights Reserved</span>
            </div>
            <div class="d-flex ">
                <a href="#" class="me-3">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
