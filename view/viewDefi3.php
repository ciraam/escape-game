
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #007BFF;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .container h1 {
            margin-bottom: 20px;
            color: #007BFF;
        }
        .input-container {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input[type="password"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #007BFF;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 18px;
            text-align: center;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Accès confidentiel</h1>
        <form>
            <div class="input-container">
                <label for="password">Entrez le code :</label>
                <input type="text" id="password" placeholder="       ●●●●●●●●●●●●">
            </div>
            <button type="submit">Déverrouiller</button>
        </form>
    </div>
</body>
</html>
