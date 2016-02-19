<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","mysql");
    $db=mysql_select_db("technieks",$con);
    $query=mysql_query("select * from events where e_name LIKE '%{$key}%'");
    if(mysql_num_rows($query)>0)
    {
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['e_name'];
    }
    echo json_encode($array);
    }
    else
    {
        echo "error";
    }
?>