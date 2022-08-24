<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h2>Snack 2</h2>
    <p> 
    Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. <br>
    Il form avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell'altro file una lista di invitati. <br>
    Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. <br>
    </p>

    <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

</body>
</html>