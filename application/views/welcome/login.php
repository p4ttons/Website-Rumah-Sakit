<!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">   
                       <h2 class= "text-center">Login</h2>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
      
    <!-- ################# Our Blog Starts Here#######################--->

   
      <div style="margin-top:0px;" class="row no-margin">
    
      </div>
      <?php
                $attributes = array('autocomplete'=> 'off');
                echo form_open_multipart("login/cek_login",$attributes);?>
      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">
               
           <?php echo $this->session->flashdata("massage");?>
            <div style="padding:20px" class="col-sm-6">
                <div class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Email :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Input your email" name="cus_email" id="cus_email" class="form-control input-sm"  ></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Password:</label></div>
                    <div class="col-sm-8"><input type="password" name="password" id="password" placeholder="Input your password" class="form-control input-sm"  ></div>
                </div>
                     <button type="submit" name="submit" value="login" class="btn btn-info btn-sm">Login</button>
                    </div>
                </div>
            </div>
             <div class="col-sm-6">
                    
                  <div style="margin:50px" class="serv"> 
      
           </div>    
                
             
         </div>

            </div>
        </div>
        
      </div>



    <!-- ################# Footer Starts Here#######################--->