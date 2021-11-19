<?php

$error = '';

if(isset($_POST["upload_csv"]))
{
    if($_FILES['file']['name'])
    {
        $file_array = explode(".", $_FILES['file']['name']);
        $file_name = $file_array[0];
        $extension = end($file_array);
        
        if($extension == 'csv')
        {
        
        
        }
        else
        {
            $error = 'Only <b>.csv</b> file allowed';
        }
    }
}

?>


<header>
    <h1>Group randomizer</h1>
    <article>
        <h4>Select CSV File</h4>
        <form method="post" enctype="multipart/form-data"  >            
            <input type="file" name="file" />
            <?php
            if($error != '')
            {
                echo '<p>'.$error.'</p>';
            }
            ?>
            <h4>Select group capacity :</h4>
            <input type="number" name="randomize" />
            <input type="submit"  name="upload_csv"  value="Upload" />
        </form>
    </article>
</header>

