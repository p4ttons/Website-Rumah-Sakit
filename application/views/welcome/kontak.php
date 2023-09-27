<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>Contact Us</h2>
                           <ul>
                               <li> <a href="#"><i class="fas fa-home"></i><li><?php echo anchor('home','Home');?></li></a></li>
                               <li><i class="fas fa-angle-double-right"></i>Contact Us</li>
                           </ul>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
      
    <!-- ################# Our Blog Starts Here#######################--->

   
      <div style="margin-top:0px;" class="row no-margin">
        
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


      </div>
              <?php echo $this->session->flashdata("message");?>
        <?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";?>

        <?php
        $attributes = array('autocomplete' => 'off');
        echo form_open_multipart("admin/kontak/add",$attributes);
        ?>
      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
               
          
            <div style="padding:20px" class="col-sm-6">
            <h2 style="font-size:18px">Contact Form</h2>
                <div class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter Name :</label></div>
                    <div class="col-sm-8"><input name="nama" type="text" id="nama" placeholder="Ketikkan nama" value="<?php echo set_value("nama");?>" required></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input name="email" type="text" id="email" placeholder="Ketikkan email" value="<?php echo set_value("email");?>" required></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8"><input name="nomorhp" type="text" id="nomorhp" placeholder="Ketikkan nomor hp" value="<?php echo set_value("nomorhp");?>" required></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter  Message:</label></div>
                    <div class="col-sm-8">
                  
                      <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="pesan" type="text" id="pesan" value="<?php echo set_value("pesan");?>"  required></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div class="col-sm-8">
                    <input class="btn btn-danger btn-sm" type="submit" name="submit" value="Simpan"/>
                    </div>
               </div>
        </div>
        <?php echo form_close();?>



             <div class="col-sm-6">
                    
                  <div style="margin:50px" class="serv"> 
                
               
             
                              
              
          <h2 style="margin-top:10px;">Address</h2>

          Jl. Jembatan Merah, Gejayan Yogyakarta <br>
          Call Center: 0554 26571 <br>
          Email: <a href="mailto:info@anybiz.com" class="">rsdewantara@rocketmail.com</a><br>
          Website: <a href="smart-eye.html" class="">www.rumahsakitdewantara.go</a>

 
       
            
                
                
              
           </div>    
                
             
         </div>

            </div>
        </div>
        
      </div>



    <!-- ################# Footer Starts Here#######################--->