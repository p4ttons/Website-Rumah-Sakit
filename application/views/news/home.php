<div class="wrapper row3">  
    <main class="hoc container clear">
        <div class="content">
        <div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>Find Dokter</h2>
                           <ul>
                               <li> <a href="#"><i class="fas fa-home"></i><li><?php echo anchor('home','Home');?></li></a></li>
                               <li><i class="fas fa-angle-double-right"></i>Contact Us</li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // cek apakah ada data atau tidak dari database
            if (count($hasil) > 0)
            {
                // jika terdapat data
                foreach ($hasil as $key => $list) 
                {
                    ?>  
                
  <div class="col">
    <div class="card">
      <img src="<?php echo base_url ();?>uploaded_files/<?php echo $list['NEWS_IMAGE'];?>" class="card-img-top" alt="<?php echo $list['NEWS_IMAGE'];?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $list['NEWS_TITLE'];?></h5>
        <p class="card-text"><?php echo $list['NEWS_DESCRIPTION'];?></p>
      </div>
    </div>
  </div>

                    <?php
                }
            }
            else
            {
                // jika tidak terdapat dapat
                ?>  
                    <h1>Data not available...</h1>
            <?php
            }
            ?>
            </div>
        </div>
       
    </main>
</div>     
    