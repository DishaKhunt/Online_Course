<?php
    $vote = $_REQUEST['vote'];

    // get content ogf textfile
    $filename = "poll_result.txt";
    // $content = file($filename);

   //put content in array
   if (file_exists($filename)) {
        $content = file($filename);
        $array = explode("||", $content[0]);
        $yes = intval($array[0]);
        $no = intval($array[1]);
    } else {
        $yes = 0;
        $no = 0;
    }
    if($vote == 0){
        $yes = $yes + 1;
    }
    if($vote == 1){
        $no = $no +1;
    }

    //insert votes to txt file
    $insertvote = $yes."||".$no;
    $fp = fopen($filename,"w");
    fputs($fp,$insertvote);
    fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>