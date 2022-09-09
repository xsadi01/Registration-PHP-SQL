<html>
<head>
    <title>All Data</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        body
        {
            background-image: url(https://media.discordapp.net/attachments/740814195548749866/1017540036700426431/guide_bg.jpg);
        }
        table
        {
            background-color: white;
        }
    
    </style>    

</head>
</html>
<?php
include("connect.php");

$query = "SELECT * FROM project";
$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);



//echo $total;

if($total != 0)
{
    ?>
        <h2 align="center"> All Data<h2>
    <center><table border="3" cellspacing="7" width="100%">
        <tr>
        <th width="2%">Avater</th>
        <th width="5%">Avater</th>
        <th width="8%">First Name</th>
        <th width="8%">Last Name</th>
        <th width="10%">Phone</th>
        <th width="20%">Email</th>
        <th width="10%">Gender</th>
        <th width="22%">Address</th>
        <th width="15%">Action</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
            <td>".$result[id]."</td>
            <td>".$result[avater]."</td>
            <td>".$result[fname]."</td>
            <td>".$result[lname]."</td>
            <td>".$result[phone]."</td>
            <td>".$result[email]."</td>
            <td>".$result[gender]."</td>
            <td>".$result[address]."</td>

            <td><a href='update_data.php?id=$result[id]'>Edit</a></td>
            </tr>";
    }
}
else
{
    echo "No Record Found";
}
?>
</table>
</center>