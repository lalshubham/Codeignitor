<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 
     
		
         <?php 
            echo form_open('studentController/update_student'); 
            echo form_hidden('roll_no',$old_roll_no); 
            echo form_label('Roll No.'); 
            // echo form_input(array('id'⇒'roll_no','name'⇒'roll_no','value'⇒$records[0]→roll_no)); 
            echo form_input(array('id'=>'roll_no','name'=>'roll_no','value'=>$records[0]->roll_no,'disabled'=>'disabled')); 
            echo " "; 

            echo form_label('Name'); 
            echo form_input(array('id'=>'name','name'=>'name','value'=>$records[0]->name)); 
            echo " "; 

            echo form_label('Place'); 
            echo form_input(array('id'=>'place','name'=>'place','value'=>$records[0]->place)); 
            echo " "; 

            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
  
   </body>
	
</html>