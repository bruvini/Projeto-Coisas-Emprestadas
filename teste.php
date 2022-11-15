<h2>TESTE DE ARRAYS</h2>

<select name="nome" id="nome">
    <?php
    include_once 'dbcon.php';
    $query = mysqli_query($conn, "SELECT nomeUser FROM tbUsuarios");
    while ($result = mysqli_fetch_array($query)) {
        echo ("<option value='nome'>" . $result['nomeUser'] . "</option>");
    }
    mysqli_close($conn);
    ?>
</select>