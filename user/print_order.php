<?php
session_start();
include '../includes/header.php'; // Include headerul comun
?>

<section class="container mx-auto mt-8 px-4 max-w-4xl">
    <h1 class="text-2xl font-bold mb-4 text-center">Comandă Printare Documente</h1>
    <div class="flex flex-col md:flex-row">
        <!-- Formularul de comandă -->
        <form id="printOrderForm" action="../backend/controllers/printOrderController.php" method="post" enctype="multipart/form-data" class="w-full md:w-1/2">
            <div class="mb-4">
                <label for="color" class="block text-lg font-semibold mb-2">Selectează culoarea:</label>
                <select name="color" id="color" class="w-full p-2 border rounded">
                    <option value="alb-negru">Alb-Negru</option>
                    <option value="color">Color</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="paperType" class="block text-lg font-semibold mb-2">Selectează tipul de hârtie:</label>
                <select name="paperType" id="paperType" class="w-full p-2 border rounded">
                    <option value="80g">80g</option>
                    <option value="90g">90g</option>
                    <option value="100g">100g</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="binding" class="block text-lg font-semibold mb-2">Selectează tipul de legătură:</label>
                <select name="binding" id="binding" class="w-full p-2 border rounded">
                    <option value="none">Fără Legătură</option>
                    <option value="spiral">Spiral</option>
                    <option value="clema">Clema</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="customerName" class="block text-lg font-semibold mb-2">Nume:</label>
                <input type="text" name="customerName" id="customerName" required class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="customerPhone" class="block text-lg font-semibold mb-2">Număr de telefon:</label>
                <input type="tel" name="customerPhone" id="customerPhone" pattern="[0-9]{10}" required class="w-full p-2 border rounded" placeholder="Număr de telefon (10 cifre)">
            </div>
            <button type="submit" class="mt-6 p-3 bg-primary-color text-white rounded shadow w-full">Plasează Comanda</button>
        </form>

        <!-- Dropzone pentru încărcarea de fișiere -->
        <div class="dropzone-container w-full md:w-1/2 md:ml-4">
            <form action="../backend/controllers/printOrderController.php" class="dropzone" id="documentDropzone"></form>
        </div>
    </div>
</section>

<!-- Include scripturile Dropzone.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

<script>
    Dropzone.autoDiscover = false;

    const documentDropzone = new Dropzone("#documentDropzone", {
        url: "../backend/controllers/printOrderController.php",
        autoProcessQueue: false, // Procesăm manual pentru a include inputurile suplimentare
        acceptedFiles: '.pdf,.doc,.docx,.ppt,.pptx',
        addRemoveLinks: true,
        dictRemoveFile: 'Șterge fișierul',
        init: function () {
            this.on("addedfile", function (file) {
                const quantityInputs = document.getElementById('quantityInputs');
                const fileId = file.upload.uuid;

                // Creează un div pentru inputul de cantitate
                const quantityDiv = document.createElement('div');
                quantityDiv.className = "mb-2";
                quantityDiv.innerHTML = `
                    <label for="quantity_${fileId}" class="block text-lg font-semibold mb-2">Număr de copii pentru ${file.name}:</label>
                    <input type="number" name="quantity_${fileId}" id="quantity_${fileId}" value="1" min="1" class="w-20 p-2 border rounded">
                `;
                quantityInputs.appendChild(quantityDiv);
            });

            this.on("removedfile", function (file) {
                const quantityInput = document.getElementById(`quantity_${file.upload.uuid}`).parentElement;
                if (quantityInput) {
                    quantityInput.remove();
                }
            });

            // Submit event
            document.getElementById('printOrderForm').addEventListener('submit', function (event) {
                event.preventDefault();

                if (documentDropzone.files.length === 0) {
                    alert('Te rugăm să încarci cel puțin un document.');
                    return;
                }

                // Procesăm coada Dropzone
                documentDropzone.processQueue();
            });

            this.on("sending", function (file, xhr, formData) {
                // Adaugă inputurile suplimentare la formData
                const color = document.getElementById('color').value;
                const paperType = document.getElementById('paperType').value;
                const binding = document.getElementById('binding').value;
                const customerName = document.getElementById('customerName').value;
                const customerPhone = document.getElementById('customerPhone').value;

                formData.append('color', color);
                formData.append('paperType', paperType);
                formData.append('binding', binding);
                formData.append('customerName', customerName);
                formData.append('customerPhone', customerPhone);

                // Adaugă cantitatea specificată pentru fiecare fișier
                const fileId = file.upload.uuid;
                const quantity = document.getElementById(`quantity_${fileId}`).value;
                formData.append(`quantity_${fileId}`, quantity);
            });
        }
    });
</script>

<?php
include '../includes/footer.php'; // Include footerul comun
?>
