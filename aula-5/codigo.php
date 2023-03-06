<?php
    $professores = ["Tiago", "Enzo", "Pedro"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
    <h1>Tabela de professores</h1>

    </div>
    <div class="container">
        <div class="table">
            <table>
                <thead>
                   <tr>
                        <td>Número</td>
                        <td>Professor</td>
                   </tr>  
                </thead>
                <tbody> 
                <?php for($i = 0; $i < sizeOf($professores); $i++): ?>
                    <tr>
                        <td>
                            <?= $i + 1; ?>
                        </td>
                        <td><?= $professores[$i]; ?></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>