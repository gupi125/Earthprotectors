$( document ).ready(function() {
    $('#editableTable').SetEditable({
        columnsEd: "0,1,2,3,4,5,6",
        onEdit: function(columnsEd) {
          var empName = columnsEd[0].childNodes[3].innerHTML;
          var des = columnsEd[0].childNodes[5].innerHTML;
          var points = columnsEd[0].childNodes[7].innerHTML;
          $.ajax({
              type: 'POST',			
              url : "action.php",	
              dataType: "json",					
              data: {materialName:empName, description:des, age:age, pointsPerKg:points, action:'edit'},			
              success: function (response) {
                  if(response.status) {
                  }						
              }
          });
        },
        onBeforeDelete: function(columnsEd) {
        var empId = columnsEd[0].childNodes[1].innerHTML;
        $.ajax({
              type: 'POST',			
              url : "action.php",
              dataType: "json",					
              data: {materialID:empId, action:'delete'},			
              success: function (response) {
                  if(response.status) {
                  }			
              }
          });
        },
      });
  });