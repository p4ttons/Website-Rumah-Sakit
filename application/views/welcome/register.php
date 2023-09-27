<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">   
                       <h2 class= "text-center">Buat Akun</h2>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
      
    <!-- ################# Our Blog Starts Here#######################--->

   
      <div style="margin-top:0px;" class="row no-margin">
    
      </div>
      <?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/customer/add",$attributes);
?>

      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
            <div style="padding:20px" class="col-sm-6">
                <div class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Name :</label></div>
                    <div class="col-sm-8"><input name="customer_name" type="text" id="customer_name" placeholder="Ketikkan nama customer" value="<?php echo set_value("customer_name");?>" required></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Email:</label></div>
                    <div class="col-sm-8"><input name="cus_email" type="text" id="cus_email" placeholder="Ketikkan email" value="<?php echo set_value("cus_email");?>"required></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Password:</label></div>
                    <input name="password" type="password" id="password" placeholder="Ketikkan password" value="<?php echo set_value("password");?>"required></div>
                </div> 
                <div style="margin-top:10px;" class="row">
                    <div class="col-sm-8">
                    <input class="btn btn-danger btn-sm" type="submit" name="submit" value="Simpan"/>
                    </div>
               </div>  
                 </div>
            </div>
        </div>
        
      </div>
      <?php echo form_close();?>



    <!-- ################# Footer Starts Here#######################--->