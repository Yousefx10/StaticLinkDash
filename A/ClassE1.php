<?php

include("../../connectSQL.php");



//LINK 1
$LINKpage = 1;
$sql = "SELECT link_linkedto FROM onlineclasses WHERE link_id= $LINKpage ";


$result = $con->query($sql);
while($row = $result->fetch_assoc()) {
    $newLINK = $row["link_linkedto"];
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'/>
    <meta http-equiv="refresh" content="0; URL=<?php echo $newLINK?>" />
    
</head>
<body>
</body>
</html>