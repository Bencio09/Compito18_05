<?php
include "./connessione.php";
?>


<html>

<head>
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.css">
    <script src="../JS/bootstrap.js"></script>
</head>

<body>
    <form action="./add.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <h1 style="text-align: center;" class="alert alert-success">ASSICURAZIONE</h1>
                </div>
                <div class="col"></div>
            </div>
            <br>
            <?php
            $query = "SELECT proprietario.codice_fiscale FROM proprietario;";
            $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
            ?>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <label for="codicefiscale" class="form-label">Codice Fiscale</label>
                    <select id="codicefiscale" name="proprietario" class="form-select">
                        <option selected>Seleziona il codice fiscale del proprietario</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                <option value='$row[codice_fiscale]'>$row[codice_fiscale]</option>
                                ";
                        }
                        ?>
                    </select>
                </div>
                <div class="col"></div>
            </div>
            <br>
            <?php
            $query2 = "SELECT polizza.codice FROM polizza;";
            $result2 = mysqli_query($connessione, $query2) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
            ?>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                <label for="polizza" class="form-label">Polizza</label>
                <select id="polizza" name="polizza" class="form-select">
                        <option selected>Seleziona un codice polizza</option>
                        <?php
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            echo "
                                <option value='$row2[codice]'>$row2[codice]</option>
                                ";
                        }
                        ?>
                    </select>
                </div>
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                <label for="targa" class="form-label">Targa</label>
                <input id="targa" type="text" name="targa" class="form-control">
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                <label for="marca" class="form-label">Marca</label>
                <input id="marca" type="text" name="marca" class="form-control">
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                <label for="modello" class="form-label">Modello</label>
                <input id="modello" type="text" name="modello" class="form-control">
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                <label for="cilindrata" class="form-label">Cilindrata</label>
                <input id="cilindrata" type="text" name="cilindrata" class="form-control">
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                <label for="potenza" class="form-label">Potenza</label>
                <input id="potenza" type="text" name="potenza" class="form-control">
                <div class="col"></div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                <input onclick="alert('Aggiunta in corso...')" type="button" value="Aggiungi" class="btn btn-primary">
                <div class="col"></div>
            </div>
        </div>
    </form>
</body>

</html>