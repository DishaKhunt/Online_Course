<?php

$conn = mysqli_connect("localhost", "root", "disha", "test") or die("connection failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";

if(mysqli_num_rows($result) > 0){
    $output = '  <table class="table">
                    <thead>
                        <tr class="table-dark text-light">
                            <th>Id</th>
                            <th>Name</th>
                        </tr>
                    </thead>';
                
                    while($row = mysqli_fetch_assoc($result)){
                        $output .= "<tbody>
                                        <tr>
                                            <td>{$row["id"]}</td>
                                            <td>{$row["first_name"]}  {$row["last_name"]}</td>
                                        </tr>
                                    </tbody>";
                    }
                
            $output .= " </table>";
        mysqli_close($conn);

        echo $output;
}else{
    echo "<h2>No Record Found.</h2>";

}


?>