<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centru Copiere BM - Simple File Upload</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6B156B;
            --secondary-color: #B528B5;
            --whatsapp-color: #25D366;
            --email-color: #3B82F6;
        }

        body {
            background-color: #F4F4F4;
            font-family: 'Arial', sans-serif;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 50;
        }

        .header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 16px;
        }

        .logo img {
            height: 50px; /* Adjusted for smaller sizes */
            width: auto;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .contact-info a {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }

        .whatsapp-button {
            background-color: var(--whatsapp-color);
            color: #fff;
        }

        .whatsapp-button:hover {
            background-color: #1DA851;
        }

        footer {
            background-color: var(--primary-color);
            color: #fff;
            padding: 24px;
            text-align: center;
        }

        footer a {
            color: #fff;
            text-decoration: underline;
        }

        .file-input-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .file-input-container input[type="file"] {
            display: none;
        }

        .file-input-container label {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .file-input-container label:hover {
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <?php include '../includes/header.php'; ?>

    <!-- Spacer for Fixed Header -->
    <div class="mt-16"></div> <!-- Adjusts for the height of the fixed header -->

    <section class="container mx-auto mt-8 px-4 max-w-4xl">
        <h1 class="text-2xl font-bold mb-4 text-center">Comandă Printare Foto</h1>

        <!-- File Upload Form -->
        <div class="file-input-container">
            <form id="uploadForm" action="../backend/controllers/photoOrderController.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="customerName" value="Test Name">
                <input type="hidden" name="customerPhone" value="1234567890">
                <input type="hidden" name="customerEmail" value="test@example.com">
                <input type="hidden" name="format" value="10x15">
                <input type="hidden" name="orderDetails" value="Test order details">

                <input type="file" name="files[]" id="fileInput" multiple>
                <label for="fileInput">Selectează Fișiere</label>

                <div id="fileList" class="mt-4"></div>

                <button type="submit" class="mt-6 p-3 bg-purple-700 text-white rounded shadow w-full hover:bg-purple-800 transition duration-200">Plasează Comanda</button>
            </form>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <script>
        document.getElementById('fileInput').addEventListener('change', function() {
            const fileList = document.getElementById('fileList');
            fileList.innerHTML = ''; // Clear previous files
            for (let i = 0; i < this.files.length; i++) {
                fileList.innerHTML += '<p>' + this.files[i].name + '</p>';
            }
        });

        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            if (document.getElementById('fileInput').files.length === 0) {
                event.preventDefault();
                alert('Te rugăm să încarci cel puțin un fișier.');
            }
        });
    </script>
</body>
</html>