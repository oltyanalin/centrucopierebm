<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Upload Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Test Upload Form</h1>
    <form action="../backend/controllers/photoOrderController.php" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded p-6 max-w-lg">
        <div class="mb-4">
            <label for="customerName" class="block text-lg font-semibold mb-2">Nume:</label>
            <input type="text" name="customerName" id="customerName" required class="w-full p-2 border border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="customerPhone" class="block text-lg font-semibold mb-2">Număr de telefon:</label>
            <input type="tel" name="customerPhone" id="customerPhone" pattern="[0-9]{10}" required class="w-full p-2 border border-gray-300 rounded" placeholder="Număr de telefon (10 cifre)">
        </div>
        <div class="mb-4">
            <label for="customerEmail" class="block text-lg font-semibold mb-2">Email (opțional):</label>
            <input type="email" name="customerEmail" id="customerEmail" class="w-full p-2 border border-gray-300 rounded" placeholder="Email pentru notificări">
        </div>
        <div class="mb-4">
            <label for="format" class="block text-lg font-semibold mb-2">Format:</label>
            <select name="format" id="format" class="w-full p-2 border border-gray-300 rounded">
                <option value="10x15">10x15 cm</option>
                <option value="13x18">13x18 cm</option>
                <option value="15x20">15x20 cm</option>
                <option value="A4">A4</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="orderDetails" class="block text-lg font-semibold mb-2">Detalii Comandă (opțional):</label>
            <textarea name="orderDetails" id="orderDetails" rows="3" class="w-full p-2 border border-gray-300 rounded" placeholder="Adaugă detalii sau cerințe suplimentare..."></textarea>
        </div>
        <div class="mb-4">
            <label for="files" class="block text-lg font-semibold mb-2">Încarcă Fișiere:</label>
            <input type="file" name="files[]" id="files" multiple class="w-full p-2 border border-gray-300 rounded">
        </div>
        <button type="submit" class="mt-4 p-3 bg-purple-700 text-white rounded shadow w-full hover:bg-purple-800 transition duration-200">Trimite</button>
    </form>
</body>
</html>
