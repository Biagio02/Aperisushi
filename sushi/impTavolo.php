<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./images/LG.png" alt="" width="150" height="120">
            Fig4hperiSushi
          </a>  
        </div>
    </nav>

    <div class="container" style="max-width: 300px;">
        <form action="impTavolo.php" method="POST">
            <label class="form-label">Numero Tavolo</label>
            <input type="text" class="form-control" name="id_tavolo">
            <label class="form-label">Codice Prenotazione</label>
            <input type="text" class="form-control" name="id_pre">
            <br>
            <br>
            <button name="tavolo" type="submit" class="btn btn-outline-dark">Siediti</button>
        </form>
    </div>

    <?php
        if(isset($_POST["tavolo"])){
            $codIns = $_POST["id_pre"];

            $sql = "SELECT ID_Prenotazione FROM prenotazione WHERE ID_Prenotazione=$codIns";
            $conn = new mysqli("localhost","root","","fig4perisushi");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }           

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row["ID_Prenotazione"];
                    
                }
            } else {
                echo "<script type='text/javascript'>alert('CODICE ERRATO');</script>";
            }
            $conn->close();
            if(isset($id) && $id == $codIns){
                setcookie("codTavolo",$id,time()+60*60);
                header("Location: tavolo.php");
            }
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  

</body>
</html>