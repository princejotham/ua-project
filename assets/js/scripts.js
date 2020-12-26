$(document).ready(function(){
	var i=1;
	$('#add-proponents-input').click(function(){
		i++;
		$('#proponent-inputs').append('<div class="input-group mt-2" id="rowproponent'+i+'"><input type="text" class="form-control" id="proponent'+i+'" placeholder="Enter Name of Proponent" name="proponent[]"><span class="input-group-append"><button type="button" name="removeproponent" id="'+i+'" class="btn btn-danger btn_remove_proponent">Del</button></span></div>');
	});
	
	$(document).on('click', '.btn_remove_proponent', function(){
		var button_id = $(this).attr("id"); 
		$('#rowproponent'+button_id+'').remove();
	});

	var i=1;
	$('#add-budget-input').click(function(){
		i++;
		$('#item-budget-inputs').append('<div class="input-group mt-2" id="rowbudget'+i+'"><input type="text" class="form-control" id="budget-item'+i+'" placeholder="Enter Budget Item" name="budgetitem[]"><input type="text" class="form-control" id="budget-amount'+i+'" placeholder="Enter Budget Amount" name="budgetamount[]"><span class="input-group-append"><button type="button" name="removebudget" id="'+i+'" class="btn btn-danger btn_remove_budget">Del</button></span></div>');
	});
	
	$(document).on('click', '.btn_remove_budget', function(){
		var button_id = $(this).attr("id"); 
		$('#rowbudget'+button_id+'').remove();
	});

	var i=1;
	$('#add-person-input').click(function(){
		i++;
		$('#person-inputs').append('<div class="input-group mt-2" id="rowperson'+i+'"><input type="text" class="form-control" id="person'+i+'" placeholder="Enter Person Involve" name="person[]"><span class="input-group-append"><button type="button" name="removeperson" id="'+i+'" class="btn btn-danger btn_remove_person">Del</button></span></div>');
	});
	
	$(document).on('click', '.btn_remove_person', function(){
		var button_id = $(this).attr("id"); 
		$('#rowperson'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});