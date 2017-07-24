$(document).ready(function(){ 	
	 $(document).on('click', '#getEmployee', function(e){  
     e.preventDefault();  
     var empid = $(this).data('id');    
	  $('#employee-detail').hide();
     $('#employee_data-loader').show();  
     $.ajax({
          url: 'empData.php',
          type: 'POST',
          data: 'empid='+empid,
          dataType: 'json',
		  cache: false
     })
     .done(function(data){
          console.log(data.employee_name);
          $('#employee-detail').hide();
		  $('#employee-detail').show();
		  $('#emptrackid').html(data.TrackId);
		  $('#emp_location').html(data.Location);
		  $('#employee_data-loader').hide();

             var r = JSON.parse(response);
             var text = "";
             var x;
             for (x in r) {
                 $('#add_your_id_here').append('<tr><td>'+r[x]['mmessage_from']+'</td><td>'+r[x]['no']+'</td></tr>');

             }
     })
     .fail(function(){
          $('#employee-detail').html('Error, Please try again...');
          $('#employee_data-loader').hide();
     });
    });	
});
