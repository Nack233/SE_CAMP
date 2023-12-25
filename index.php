<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <tbody>
            <tr>
            <?php
    $b = 2;
    for( $i=1; $i<=24; $i++ ) {
        echo "{$b} x {$i} = ".($b*$i)."<br/>";
    }
?>
            </tr>
        </tbody>
    </table>
    <style>
        table {
            width: 150px;
            height: 265px;
            overflow: hidden;
        }
        tbody{
            overflow: hidden;
        }
    </style>
</body>

</html>