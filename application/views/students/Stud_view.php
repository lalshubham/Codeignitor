<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student View</title>
</head>
<body>
<table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>Sr#</td>"; 
            echo "<td>Roll No.</td>"; 
            echo "<td>Name</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->roll_no."</td>"; 
               echo "<td>".$r->name."</td>"; 
               echo "<td><a href = '".base_url()."index.php/stud/edit/"
                  .$r->roll_no."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/stud/delete/"
                  .$r->roll_no."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
 </body>
</html>