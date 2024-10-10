<!DOCTYPE html>
<html>
<head>
    <title>Válassz egy tesztet</title>
</head>
<body>
    <h1>Teszt kiválasztása</h1>
    <form action="{{ route('tesztek.handle') }}" method="POST">
        @csrf
        <label for="teszt">Válassz egy tesztet:</label>
        <select name="teszt" id="teszt" required>
            <option value="matematika">Matematika</option>
            <option value="informatika">Informatika</option>
        </select>
        <button type="submit">Tovább</button>
    </form>
</body>
</html>
