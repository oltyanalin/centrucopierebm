<?php
session_start();
include '../includes/header.php'; // Include headerul comun
?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centru Copiere BM - Comandă Printare Foto</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMRR3eVBvK0Wz0rj60x04/r4JOzxF3A7T9f4kwp" crossorigin="anonymous">
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
            height: 50px; /* Ajustat pentru dimensiuni mai mici */
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

        .format-option {
            background-color: #f0f0f0;
            color: #333;
            transition: background-color 0.3s, color 0.3s;
        }

        .format-option.selected {
            background-color: var(--primary-color);
            color: #fff;
        }

        .format-option:hover {
            background-color: var(--secondary-color);
            color: #fff;
            cursor: pointer;
        }

        .price-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 10px 0;
            gap: 15px;
        }

        .price-list-item {
            display: flex;
            justify-content: space-between;
            width: calc(50% - 10px);
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .contact-info {
                justify-content: flex-end;
            }

            .contact-info span {
                display: none;
            }

            .header-icons {
                display: flex;
                align-items: center;
                gap: 16px;
            }

            .dropdown-menu-icon {
                color: var(--primary-color);
                cursor: pointer;
            }

            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .price-list {
                flex-direction: column;
                align-items: center;
            }

            .price-list-item {
                width: 100%;
            }
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">

    <!-- Spacer for Fixed Header -->
    <div class="mt-16"></div>

    <!-- Hero Section -->
    <section class="container mx-auto mt-8 px-4 max-w-4xl">
        <h1 class="text-2xl font-bold mb-4 text-center">Comandă Printare Foto</h1>

        <!-- Afișare Lista de Prețuri -->
        <div class="bg-white shadow-md rounded-md p-4 mb-6">
            <h2 class="text-lg font-semibold mb-2">Prețuri Formate Foto</h2>
            <div class="price-list">
                <div class="price-list-item">
                    <span class="font-medium">10x15 cm:</span>
                    <span class="text-purple-700 font-bold">1 leu</span>
                </div>
                <div class="price-list-item">
                    <span class="font-medium">13x18 cm:</span>
                    <span class="text-purple-700 font-bold">2 lei</span>
                </div>
                <div class="price-list-item">
                    <span class="font-medium">15x20 cm:</span>
                    <span class="text-purple-700 font-bold">3 lei</span>
                </div>
                <div class="price-list-item">
                    <span class="font-medium">A4:</span>
                    <span class="text-purple-700 font-bold">5 lei</span>
                </div>
            </div>
        </div>

        <form id="photoOrderForm" method="POST" action="../backend/controllers/photoOrderController.php" enctype="multipart/form-data" class="bg-white shadow-lg p-6 rounded-md">
            <input type="hidden" name="orderId" value="<?php echo $orderId; ?>">

            <!-- Zona de încărcare a pozelor -->
            <div class="mb-6">
                <label class="block text-lg font-semibold mb-2">Încarcă pozele:</label>
                <div class="relative p-2 border-dashed border-2 border-gray-300 rounded-md cursor-pointer hover:border-gray-400 transition">
                    <input type="file" name="files[]" id="fileInput" multiple accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">
                    <div class="text-center text-gray-600">
                        <i class="fas fa-cloud-upload-alt text-4xl mb-2"></i>
                        <p>Click sau trage fișierele aici pentru a le încărca</p>
                    </div>
                </div>
                <div id="fileList" class="mt-2 text-sm text-gray-600"></div>
                <button type="button" id="clearAllFiles" class="mt-2 p-2 bg-red-500 text-white rounded">Șterge toate</button>
            </div>

            <!-- Selecția formatului pentru întreaga comandă -->
            <div class="mb-4">
                <label class="block text-lg font-semibold mb-2">Selectează formatul pentru întreaga comandă:</label>
                <div class="flex flex-wrap gap-2">
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="format" value="10x15" class="hidden" checked>
                        <span class="format-option block w-28 p-2 text-center bg-gray-100 rounded-md hover:bg-gray-200 transition cursor-pointer">10x15 cm</span>
                    </label>
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="format" value="13x18" class="hidden">
                        <span class="format-option block w-28 p-2 text-center bg-gray-100 rounded-md hover:bg-gray-200 transition cursor-pointer">13x18 cm</span>
                    </label>
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="format" value="15x20" class="hidden">
                        <span class="format-option block w-28 p-2 text-center bg-gray-100 rounded-md hover:bg-gray-200 transition cursor-pointer">15x20 cm</span>
                    </label>
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="format" value="A4" class="hidden">
                        <span class="format-option block w-28 p-2 text-center bg-gray-100 rounded-md hover:bg-gray-200 transition cursor-pointer">A4</span>
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label for="customerName" class="block text-lg font-semibold mb-2">Nume:</label>
                <input type="text" name="customerName" id="customerName" required class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <label for="customerPhone" class="block text-lg font-semibold mb-2">Număr de telefon:</label>
                <input type="tel" name="customerPhone" id="customerPhone" pattern="[0-9]{10}" required class="w-full p-2 border border-gray-300 rounded" placeholder="Număr de telefon (10 cifre)">
            </div>

            <!-- Câmp de email opțional -->
            <div class="mb-4">
                <label for="customerEmail" class="block text-lg font-semibold mb-2">Email (opțional):</label>
                <input type="email" name="customerEmail" id="customerEmail" class="w-full p-2 border border-gray-300 rounded" placeholder="Email pentru notificări">
            </div>

            <!-- Câmp pentru detalii suplimentare -->
            <div class="mb-4">
                <label for="orderDetails" class="block text-lg font-semibold mb-2">Detalii Comandă (opțional):</label>
                <textarea name="orderDetails" id="orderDetails" rows="3" class="w-full p-2 border border-gray-300 rounded" placeholder="Adaugă detalii sau cerințe suplimentare..."></textarea>
            </div>

            <!-- Afișare preț total -->
            <div class="mb-4">
                <label class="block text-lg font-semibold mb-2">Cost estimativ:</label>
                <p id="totalPrice" class="text-xl font-bold text-purple-700">0 lei</p>
                <p id="detailedPrice" class="text-sm text-gray-600 mt-1"></p>
            </div>

            <!-- Butonul de trimitere a comenzii -->
            <button type="submit" class="mt-6 p-3 bg-purple-700 text-white rounded shadow w-full hover:bg-purple-800 transition duration-200">Plasează Comanda</button>
        </form>

        <div class="mt-10"></div> <!-- Spațiu suplimentar sub formular -->
    </section>

    <?php include '../includes/footer.php'; // Include footerul comun ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('fileInput');
            const fileList = document.getElementById('fileList');
            const clearAllFiles = document.getElementById('clearAllFiles');
            const formatPrices = {
                '10x15': 1,   // lei per bucată
                '13x18': 2,   // lei per bucată
                '15x20': 3,   // lei per bucată
                'A4': 5       // lei per bucată
            };

            fileInput.addEventListener('change', function() {
                fileList.innerHTML = ''; // Clear previous file list
                let files = fileInput.files;
                for (let i = 0; i < files.length; i++) {
                    const fileRow = document.createElement('div');
                    fileRow.classList.add('flex', 'justify-between', 'items-center', 'bg-gray-100', 'p-2', 'my-1', 'rounded');
                    fileRow.innerHTML = `<span>${files[i].name}</span><button type="button" class="removeFile p-1 bg-red-500 text-white rounded">Șterge</button>`;
                    fileList.appendChild(fileRow);

                    fileRow.querySelector('.removeFile').addEventListener('click', function() {
                        fileRow.remove();
                        updateTotalPrice();
                    });
                }
                updateTotalPrice(); // Update price whenever files are selected
            });

            clearAllFiles.addEventListener('click', function() {
                fileInput.value = ''; // Clear the input
                fileList.innerHTML = ''; // Clear the file list display
                updateTotalPrice(); // Update the total price
            });

            // Update total price based on selected files and format
            function updateTotalPrice() {
                const formatElement = document.querySelector('input[name="format"]:checked');
                if (!formatElement) {
                    console.error('No format selected');
                    return;
                }
                const format = formatElement.value;
                const numberOfFiles = fileList.children.length;

                let totalPrice = numberOfFiles * formatPrices[format];

                // Apply discount for 10x15 format if more than 100 items
                if (format === '10x15' && numberOfFiles > 100) {
                    totalPrice = numberOfFiles * 0.75;  // Apply 25% discount
                }

                document.getElementById('totalPrice').innerText = totalPrice.toFixed(2) + ' lei';
                document.getElementById('detailedPrice').innerText = `${numberOfFiles} x ${formatPrices[format]} lei per bucată (${format})`;
            }

            // Highlight the selected format option
            document.querySelectorAll('.format-option').forEach(option => {
                option.addEventListener('click', function () {
                    // Reset all options
                    document.querySelectorAll('.format-option').forEach(opt => {
                        opt.classList.remove('selected');
                        opt.style.backgroundColor = '#f0f0f0';
                        opt.style.color = '#333';
                    });

                    // Apply selected class
                    this.classList.add('selected');
                    this.previousElementSibling.checked = true; // Mark the option as checked
                    this.style.backgroundColor = 'var(--primary-color)';
                    this.style.color = '#fff';
                    updateTotalPrice(); // Update total price
                });
            });

            // Validate file selection before submitting the form
            document.getElementById('photoOrderForm').addEventListener('submit', function(event) {
                if (fileList.children.length === 0) {
                    event.preventDefault();
                    alert('Te rugăm să încarci cel puțin un fișier.');
                }
            });
        });
    </script>
</body>

</html>
