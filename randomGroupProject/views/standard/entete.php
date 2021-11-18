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
        <h2>Select CSV File</h2>
        <form method="post" enctype="multipart/form-data"  >
            <p>Select File</p>             
            <input type="file" name="file" />
            <?php
            if($error != '')
            {
                echo '<p>'.$error.'</p>';
            }
            ?>
            <input type="submit"  name="upload_csv"  value="Upload" />
        </form>
    </article>
</header>

