<!-- <div class="wrapper row3">  
    <main class="hoc container clear">
        <div class="content">
            <?php
            // cek apakah ada data atau tidak dari database
            if (count($hasil) > 0)
            {
                // jika terdapat data
                foreach ($hasil as $key => $list) 
                {
                    ?>  
                        <h1><?php echo $list['NEWS_TITLE'];?></h1>
                        <img class="imgl borderedbox inspace-5" src="<?php echo base_url ();?>uploaded_files/
                        <?php echo $list ['NEWS_IMAGE'];?>" alt="<?php echo $list['NEWS_IMAGE'];?>">
                        <p><?php echo $list['NEWS_DESCRIPTION'];?></p>
                        <p><?php echo anchor('news','back');?></p>
                        <div class="clear" style="margin-bottom:50px;"></div>
                    <?php
                }
            }
            else
            {
                // jika tidak terdapat dapat
                ?>  
                    <1>Data not available...</h1>
            <?php
            }
            ?>
        </div>
        <div class="clear"></div>
    </main>
</div>     
     -->