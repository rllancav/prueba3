<div class="container " > 
    

    <div class="row content">

     
           
        <a type="button" href="<?php echo site_url(); ?>"  class="button button-purple mt-12 pull-right">View Student List</a> 
     
 <h3>Update Student Info||<?php echo $student_info['student_name']; ?></h3>
                  <?php 
        
        if(isset($_SESSION['message'])){
               echo "<p class='custom-alert'>".$_SESSION['message']."</p>";
         unset($_SESSION['message']);
        }
    
        
        ?>
     
          <hr/>
           
           
           
           
    <form method="post" action="">
        <input type="hidden" name="student_id" value="<?php  if(isset($student_info['student_id'])){echo $student_info['student_id']; }?>" id=""  >
 
   <div class="form-group">
       
    <label for="student_name">Name:</label>
    
    <input type="text" name="student_name" value="<?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?>" id="student_name" class="form-control" required="" maxlength="50">
 
   </div>
  <div class="form-group">
    <label for="email_address">Email address:</label>
    <input type="email" class="form-control" value="<?php  if(isset($student_info['email_address'])){echo $student_info['email_address']; }?>" name="email_address" id="email_address" required="" maxlength="50">
  </div>
     <div class="form-group">
    <label for="contact">Contact:</label>
    <input type="text" class="form-control" value="<?php  if(isset($student_info['contact'])){echo $student_info['contact']; }?>" name="contact" id="contact"  maxlength="50">
  </div>
   <div class="form-group">
  <label for="gender">Gender:</label>
  <select class="form-control" name="gender" id="gender">
   <option value="">Select</option>
   <option value="Male" <?php  if(isset($student_info['gender'])&&$student_info['gender']=='Male'){echo 'selected'; }?>>Male</option>
    <option value="Female" <?php  if(isset($student_info['gender'])&&$student_info['gender']=='Female'){echo 'selected'; }?>>Female</option>
   
  </select>
   
</div> 
              <div class="form-group">
    <label for="country">Country:</label>
    <input type="text" name="country" value="<?php  if(isset($student_info['country'])){echo $student_info['country']; }?>" id="country" class="form-control"  maxlength="50">
  </div>
              
  
  
              <input type="submit" class="button button-green  pull-right"  value="Update"/>
</form> 
   
  
     
   
  </div>
     
</div>
