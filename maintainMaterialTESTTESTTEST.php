
        <?php
        include "connection.php";
        $conn = new mysqli('localhost', 'root', '', '');

        $sqlQuery = "SELECT materialID, materialName, ,description, pointsPerKg FROM material";
        $resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
        ?>
        
        <table id="editableTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>des</th>
                    <th>points</th>													
                </tr>
            </thead>
            <tbody>
                <?php while( $material = mysqli_fetch_assoc($resultSet) ) { ?>
                <tr id="<?php echo $material ['materialID']; ?>">
                <td><?php echo $material ['materialID']; ?></td>
                <td><?php echo $material ['materialName']; ?></td>
                <td><?php echo $material ['description']; ?></td>
                <td><?php echo $material ['pointsPerKg']; ?></td>
                                                            
                </tr>
                <?php } ?>
            </tbody>
        </table>


