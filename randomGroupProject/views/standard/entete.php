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






<section class ="csvInput">
<section class="CTN">
<!-- Main -->
    <article class="glass">
        <h4 class="titleSection">Convert CSV to PDF</h4>
        <form class="glass" method="post" enctype="multipart/form-data"  >
            <input type="file" name="file" />
            <?php
            if($error != '')
            {
                echo '<p>'.$error.'</p>';
            }
            ?>
            
            <p class="convert">Select group capacity (default is 3) :</p>
            <input type="number" pattern="\^[0-9]*$" name="randomize" />
            <input type="submit"  name="upload_csv"  value="Upload" />
        </form>
    </article>
</section>
</section>



