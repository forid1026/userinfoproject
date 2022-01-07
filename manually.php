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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td{
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="width:100%; margin-top: 5%;" border="1">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Subject</th>
        </tr>
        <tr>
            <td rowspan="3"><?php echo $user_info[0][0] ?></td>
            <td rowspan="3"><?php echo $user_info[0][1] ?></td>
            <td rowspan="3"><?php echo $user_info[0][2] ?></td>
            <td><?php echo $user_info[0][3]['Subject1'] ?></td>
        </tr>

        <tr>
            <td><?php echo $user_info[0][3]['Subject2'] ?></td>
        </tr>
        <tr>
            <td><?php echo $user_info[0][3]['Subject3'] ?></td>
        </tr>
        <tr>
            <td rowspan="3"><?php echo $user_info[1][0] ?></td>
            <td rowspan="3"><?php echo $user_info[1][1] ?></td>
            <td rowspan="3"><?php echo $user_info[1][2] ?></td>
            <td><?php echo $user_info[1][3]['Subject1'] ?></td>
        </tr>
        <tr>
            <td><?php echo $user_info[1][3]['Subject2'] ?></td>
        </tr>
        <tr>
            <td><?php echo $user_info[1][3]['Subject3'] ?></td>
        </tr>
        <tr>
            <td rowspan="3"><?php echo $user_info[2][0] ?></td>
            <td rowspan="3"><?php echo $user_info[2][1] ?></td>
            <td rowspan="3"><?php echo $user_info[2][2] ?></td>
            <td><?php echo $user_info[2][3]['Subject1'] ?></td>
        </tr>
        <tr>
        <td><?php echo $user_info[2][3]['Subject2'] ?></td>
        </tr>
        <tr>
        <td><?php echo $user_info[2][3]['Subject3'] ?></td>
        </tr>
        

    </table>
</body>

</html>