<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>30-дневная программа тренировок</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Модальное окно для входа -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <h2>Добро пожаловать!</h2>
            <p>Введите секретное слово для входа:</p>
            <input type="text" id="passwordInput" placeholder="Секретное слово">
            <button id="loginButton">Войти</button>
        </div>
    </div>

    <div class="container" id="mainContent" style="display: none;">
        <header>
            <h1>30-дневная программа тренировок</h1>
            <p>Тренируйтесь дома и достигайте своих целей!</p>
        </header>

        <section class="calculator">
            <h2>Рассчитайте свою программу</h2>
            <form id="calculatorForm">
                <label for="weight">Вес (кг):</label>
                <input type="number" id="weight" name="weight" required>

                <label for="height">Рост (см):</label>
                <input type="number" id="height" name="height" required>

                <button type="submit">Рассчитать</button>
            </form>
            <div id="result"></div>
        </section>

        <section class="camera">
            <h2>Анализ состояния по лицу</h2>
            <video id="webcam" autoplay playsinline></video>
            <canvas id="outputCanvas" style="display: none;"></canvas>
            <button id="startCamera">Запустить камеру</button>
            <div id="cameraResult"></div>
        </section>

        <section class="calendar">
            <h2>Календарь тренировок</h2>
            <div id="calendarGrid"></div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-landmarks-detection"></script>
    <script src="script.js"></script>
</body>
</html>