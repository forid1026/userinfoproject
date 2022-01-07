<?php


$user_info[0][] = 'Farid';
$user_info[0][] = '01750375008';
$user_info[0][] = 'foridsheikh@gmail.com';
$user_info[0][] = ['Subject1' => 'Physics', 'Subject2' => 'Mathematics', 'Subject3' => 'English'];


$user_info[1][] = 'Udhas';
$user_info[1][] = '0175012314';
$user_info[1][] = 'udhas@gmail.com';
$user_info[1][] = ['Subject1' => 'Data Structure', 'Subject2' => 'Algorithm', 'Subject3' => 'Numerical Methods'];


$user_info[2][] = 'Shaba';
$user_info[2][] = '01833375008';
$user_info[2][] = 'shaba@gmail.com';
$user_info[2][] = ['Subject1' => 'Networking', 'Subject2' => 'Java', 'Subject3' => 'Circuit Design'];

?>

<table border="1" width="90%" height="30%" style="text-align: center; ; margin: 50 auto;">
    <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Subject</th>
    </tr>


    <?php
    for ($i = 0; $i <= 2; $i++) {
        echo "<tr>";
        echo '<td rowspan="4">' . $i . '</td>';
        for ($j = 0; $j <= 2; $j++) {
            echo '<td rowspan="4">' . $user_info[$i][$j] . '</td>';
        }
        
        echo "<tr>";
        echo '<td>'.$user_info[$i][$j]["Subject1"]. '</td>';
        echo"</tr>";
        echo "<tr>";
        echo '<td>'.$user_info[$i][$j]["Subject2"]. '</td>';
        echo"</tr>";
        echo "<tr>";
        echo '<td>'.$user_info[$i][$j]["Subject3"]. '</td>';
        echo"</tr>";
        echo "</tr>";
    }

    ?>
</table>