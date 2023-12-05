<html>
    <head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link href="css/grid.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">


    </head>

    <body>
    <section>
    <form method="post" action="sendmail.php">

        <label for="first_name">First Name: </label>
        <input type="text" name="first_name" id="first_name">

    <br><br>

        <label for="last_name">Last Name: </label>
        <input type="text" name="last_name" id="last_name">

        <br><br>

        <label for="email">Email: </label>
        <input type="text" name="email" id="email">

        <br><br>

        <label for="comments">Comments: </label>
        <textarea name="comments" id="comments">comment here</textarea>

        <br><br>

        <input type="submit" value="send">
        <br><br>    <br><br>
    </form>
    </section>
    <footer>
    <?php 
    echo date("F j, Y, g:i a"); 
    ?>

    </footer>
    </body>
</html>