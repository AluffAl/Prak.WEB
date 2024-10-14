<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Javascript</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #26002e;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .calculator {
        background-color: #333;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    #display {
        width: 100%;
        padding: 10px;
        font-size: 2em;
        border: none;
        background-color: #222;
        color: #fff;
        text-align: right;
        margin-bottom: 10px;
    }

    .buttons {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }

    button {
        padding: 20px;
        font-size: 1.5em;
        border: none;
        border-radius: 5px;
        background-color: #555;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    button:hover {
        background-color: #777;
    }

    button:active {
        background-color: #999;
    }
</style>

<body>

    <div class="calculator">
        <input type="text" id="display" disabled>
        <div class="buttons">
            <button onclick="inputValue('%')">%</button>
            <button onclick="inputValue('^')">^</button>
            <button onclick="inputValue('/')">/</button>
            <button onclick="clearDisplay()">C</button>

            <button onclick="inputValue('7')">7</button>
            <button onclick="inputValue('8')">8</button>
            <button onclick="inputValue('9')">9</button>
            <button onclick="inputValue('*')">*</button>

            <button onclick="inputValue('4')">4</button>
            <button onclick="inputValue('5')">5</button>
            <button onclick="inputValue('6')">6</button>
            <button onclick="inputValue('-')">-</button>

            <button onclick="inputValue('1')">1</button>
            <button onclick="inputValue('2')">2</button>
            <button onclick="inputValue('3')">3</button>
            <button onclick="inputValue('+')">+</button>

            <button onclick="inputValue('0')">0</button>
            <button onclick="inputValue('.')">.</button>
            <button onclick="calculate()">=</button>
        </div>
    </div>

    <script>
        let displayValue = '';

        function inputValue(value) {
            displayValue += value;
            document.getElementById('display').value = displayValue;
        }

        function clearDisplay() {
            displayValue = '';
            document.getElementById('display').value = '';
        }

        function calculate() {
            try {
                // Mengganti simbol pangkat '^' dengan operator pangkat Javascript '**'
                displayValue = displayValue.replace('^', '**');
                // Evaluasi ekspresi aritmatika
                let result = eval(displayValue);
                document.getElementById('display').value = result;
                displayValue = result.toString();
            } catch (error) {
                document.getElementById('display').value = 'Error';
                displayValue = '';
            }
        }
    </script>

</body>

</html>
