<?php 

$sayilar = [1,789987,789879,'meyve',12321,3534543,23,434,65,565,123,546,123,54535,123,989];


?>
<table border="1">
    <thead>
        <th>SIRA</th>
        <th>İSİM</th>
    </thead>
    <tbody>
        <?php 
            $i = 0;
            foreach($sayilar as $ogulcan){?>
               
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $ogulcan;?></td>
            </tr>
            
        <?php $i++;} ?>
    </tbody>
</table>