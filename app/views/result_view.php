<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <h1>Hasil</h1>
    <table style="border-collapse:collapse;">
        <tr>
            <th style="border: 1px solid;">Keyword</th>
            <th style="border: 1px solid;">Sentiment</th>
        </tr>
        <tr>
            <? foreach ($result as $data) { ?>
                <td style="border: 1px solid;"><? echo $data ?></td>
            <? } ?>
        </tr>
    </table>
    <br><br>
    <a href="/sparring">Kembali</a>
</body>
</html>