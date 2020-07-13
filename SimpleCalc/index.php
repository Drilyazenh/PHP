<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/result.php" method="get">
    <label>
         <input type="number" name="Number1">
    </label>
    <select name="operator" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <label>
        <input type="number" name="Number2">
    </label>
    <input type="submit" value="Результат">
</form>
</body>
</html>