<html>
<body>

    Welcome <?php echo $_GET["name"]; ?><br>

    <?php 
        $name = $_GET['name'];
        
        $guests = [ "Marco", "Mario", "Vincenzo", "Nunzio", "Pasquale", "Alberto" ];

        if (in_array($name, $guests)){
            echo "OK";
        } else {
            echo "KO";
        }
    ?>

</body>
</html>