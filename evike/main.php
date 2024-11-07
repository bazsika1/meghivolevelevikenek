<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karácsonyi Meghívó</title>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 14%;
            background-image: url('kari.gif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Rock Salt', cursive;
            color: #fff;
            height: 100vh;
            overflow: hidden;
        }

        .invitation {
            background-color: #fefefe;
            border: 3px solid #d32f2f;
            border-radius: 15px;
            padding: 50px;
            max-width: 700px;
            margin: 70px auto;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            position: relative;
            z-index: 1;
            background-image: url('level.png');
            background-size: cover;
            background-position: center;
            height: 625px;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .invitation:before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px dashed #d32f2f;
            border-radius: 15px;
            pointer-events: none;
        }

        h1 {
            color: #d32f2f;
        }

        p {
            color: black;
            font-family: 'Rock Salt', cursive;
        }

        .signature-container {
            margin-top: 20px;
            text-align: center;
            color: black;
            font-family: 'Rock Salt', cursive;
        }

        .signature-container label {
            font-size: 16px;
            margin-right: 10px;
        }

        .signature-container input[type="text"] {
            padding: 8px;
            font-size: 16px;
            width: 250px;
            margin-bottom: 10px;
            text-align: center;
        }

        .response-box {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .response-button {
            width: 120px;
            height: 50px;
            margin: 10px;
            background-color: #d32f2f;
            color: white;
            text-align: center;
            line-height: 50px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .response-button:hover {
            background-color: #a32424;
        }

        .response-button.selected {
            background-color: #8b0000;
        }

        .error-message {
            color: red;
            font-size: 20px;
            margin-top: 10px;
            color: black;
            font-family: 'Rock Salt', cursive;
        }

        .success-message {
            color: green;
            font-size: 20px;
            margin-top: 20px;
            font-family: 'Rock Salt', cursive;
        }
    </style>
</head>
<body>
<div class="invitation">
    <h1>Meghívó levél a hideg időszakokra</h1>
    <p>Kedves M.Evelin!</p>
    <p>Az ősz hűvös napjai lassan elillannak, és itt az ideje, hogy a tél varázslatos csendjében töltsük a napjainkat.</p>
    <p>Ahogy a hófehér táj és a fagyos szél a téli hónapokat hirdetik, úgy én is szeretnélek meghívni téged, hogy közösen ünnepeljük e csodálatos évszak szépségeit.</p>
    <p>Minden vágyam teljesülne, amennyiben együtt tölthetnénk az alábbi időszakot!</p>
    <p>Nagyon bízom benne, hogy sikerült elrabolnom az érdeklődését illetve elfogadja a meghívásom és együtt tölthetjük e csodás időszakot!</p>
    <p>Szeretettel, Bazsika</p>
    <p>Időszak: Jelentől kezdve a mindörökségig!</p>
    <p>Helyszín: Szeged, Zoltán u. 20, 6724 VAGY a szívem</p>

    <div class="signature-container">
        <label for="signature">Aláírás:</label>
        <input type="text" id="signature" name="signature" placeholder="Írd be a neved..." required>
    </div>
    <div class="response-box">
        <div class="response-button" id="accept-button" onclick="toggleSelection('accept')">Elfogadom</div>
        <div class="response-button" id="decline-button" onclick="toggleSelection('decline')">Elutasítom</div>
    </div>
    <div id="error-message" class="error-message"></div>
    <div id="success-message" class="success-message" style="display: none;">Köszönöm, hogy elfogadtad a meghívást! Szeretlek! 💓</div>
</div>

<script>
    function toggleSelection(selection) {
        const nameInput = document.getElementById('signature');
        const errorMessage = document.getElementById('error-message');
        const successMessage = document.getElementById('success-message');

        if (nameInput.value.trim() === '') {
            errorMessage.textContent = 'Kérek egy aláírást, mielőtt választanál!';
            return;
        } else if (nameInput.value.trim() !== 'Mándity Evelin') {
            errorMessage.textContent = 'Evike, az igazi neved add meg, sok opció nincsen...';
            return;
        } else {
            errorMessage.textContent = '';
        }

        document.getElementById('accept-button').classList.remove('selected');
        document.getElementById('decline-button').classList.remove('selected');

        if (selection === 'accept') {
            document.getElementById('accept-button').classList.add('selected');
            errorMessage.textContent = '';
            successMessage.style.display = 'block';
        } else if (selection === 'decline') {
            document.getElementById('decline-button').classList.add('selected');
            errorMessage.textContent = 'Ez a gomb csak dísznek van itt, te sem gondoltad komolyan...';
        }
    }
</script>
</body>
</html>
