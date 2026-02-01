<?php
include 'db_config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Projekt 89411</title>
    <style>
        body { font-family: Arial; text-align: center; background: #f4f4f4; }
        table { margin: 20px auto; border-collapse: collapse; background: white; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        th { background: #333; color: white; }
    </style>
</head>
<body>
    <h1>Aplikacja Studenta 89411</h1>
    <p>Serwer działa na porcie: <strong>8011</strong></p>

    <table>
        <tr>
            <th>ID</th>
            <th>Student</th>
            <th>Nr Albumu</th>
            <th>Data automatycznego wpisu</th>
        </tr>
        <?php
        $stmt = $pdo->query("SELECT * FROM dane_studenta");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['imie_nazwisko']}</td>
                    <td>{$row['nr_albumu']}</td>
                    <td>{$row['data_wpisu']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
