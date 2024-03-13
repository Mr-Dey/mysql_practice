<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="learnphp";
    $connect=new mysqli($server,$username,$password,$database);

    $sql="SELECT user_id,user_name,user_mail FROM users";
    $result=$connect->query($sql);

    function tablemaker($column0,$column1,$column2){
        echo
        "<table>
        <tr>
        <th>$column0</th>
        <th>$column1</th>
        <th>$column2</th>
        </tr>
        </table>";
    }
    tablemaker("User_Id","User_Name","Email_id");
    $max_row=$result->num_rows;
    for($x=0;$x<$max_row;$x++){
        $row=$result->fetch_assoc();
        // tablemaker($row["user_id"],$row["user_name"],$row["user_mail"]);
        echo 
        "<option value=".'$row["user_name"]'."></option>"
        ;
    }
    echo 
    "<a href='http://localhost/learnsql/form.html'>
    <button>
    Back
    </button>
    </a>"
    ;

?>