<html>  
 <head>  
          <title>Live Table Data Edit Delete using Tabledit Plugin in PHP</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
    </head>  
    <body>  
    <div id="container" align="center">
    <br><br><br><br>
        <?php				
            //Connect to Database
            $conn = new mysqli("localhost", "root", "", "");
                    
            //create query
            $sql = " create database if not exists earthprotectors";

            //execute query
            $conn->query($sql);
                    
            //use database
            $useDB = " use earthprotectors";
            
            $conn->query($useDB);

            $showquery = "SELECT * from material ";
            

            $result = $conn->query($showquery);
            
        //create array to store selected fields data
                $materialArr = array();
                //check if anything is showed from the database to set the data to array
                if($result->num_rows > 0){
                    while ($row = mysqli_fetch_array($result)){
                    $materialArr[] = array('mId'=> $row['materialID'], 'name' => $row['materialName'],
                    'des' => $row['description'], 'pointsPerKg' => $row['pointsPerKg']);	
                    }
        }
        

        $id = 1;
        echo '<h4><b>Material List</b></h4>';
        echo'<table id="editable_table" class="table table-bordered table-striped">';
            echo'<thead>';
                echo'<tr>';
                    echo'<th>Material ID</th>';
                    echo'<th>Material Name</th>';
                    echo'<th>Description</th>';
                    echo'<th>Points Per Kg</th>';
                echo'</tr>';
            echo'</thead>';

            foreach($materialArr as $materialArr){
            echo'<tr>'; 
                        echo'<td>'.$materialArr['mId'].'</td>';
                        echo'<td>'. $materialArr['name'].'</td>';
                        echo'<td>'. $materialArr['des'].'</td>';
                        echo'<td>'. $materialArr['pointsPerKg'].'</td>';
            
            echo'</tr>';
            }  
                
            echo'</table>';
        
        ?>
        
  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Live Table Data Edit Delete using Tabledit Plugin in PHP</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Last Name</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     { $materialArr[] = array('materialID'=> $row['materialID'], 'materialName' => $row['materialName'],
        'description' => $row['description'], 'pointsPerKg' => $row['pointsPerKg']);	
        foreach($materialArr as $materialArr)
      echo '
      <tr>
       <td>'.$materialID.'</td>
       <td>'.$materialName.'</td>
       <td>'.$description.'</td>
       <td>'.$pointsPerKg.'</td>
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "materialID"],
       editable:[[1, 'materialName'], [2, 'description'],[3,'pointsPerKg']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.materialID).remove();
       }
      }
     });
 
});  
 </script>


