<main id="view-panel" >


<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<large class="card-title">
					<b>Loan List</b>
					<button class="btn btn-primary col-md-3 float-right" type="button" id="new_application"><i class="fa fa-plus"></i> Create New Application</button>
				</large>
 
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="loan-list">
					<colgroup>
						<col width="10%">
						<col width="25%">
						<col width="25%">
						<col width="20%">
						<col width="10%">
						<col width="10%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Borrower</th>
							<th class="text-center">Loan Details</th>
							<th class="text-center">Next Payment Details</th>
							<th class="text-center">Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>

						 <tr> 
						 	<td class="text-center"></td>
						 	<td>
						 		<p>Name :<b></b></p>
						 		<p>Contact # :<b></b></p>
						 		<p>Address :<b></b></p>
						 	</td>
						 	<td>
						 		<p>Reference :<b></b></p>
						 		<p>Loan type :<b></b></p>
						 		<p>Plan :<b></b></p>
						 		<p>Amount :<b></b></p>
						 		<p>Total Payable Amount :<b></b></p>
						 		<p>Monthly Payable Amount: <b></b></p>
						 		<p>Overdue Payable Amount: <b></b></p>
						 		
						 		<p>Date Released: <b></b></p>
						 		
						 	</td>
						 	<td>
						 		
						 		<p>Date: <b>
						 		</b></p>
						 		<p>Monthly amount:<b></b></p>
						 		<p>Penalty :<b></b></p>
						 		<p>Payable Amount :<b></b></p>
						 		
						 	</td>
						 	<td class="text-center">
						 			<span class="badge badge-warning">For Approval</span>
						 			<span class="badge badge-info">Approved</span>
						 			<span class="badge badge-primary">Released</span>
						 			<span class="badge badge-success">Completed</span>
						 			<span class="badge badge-danger">Denied</span>
						 	</td>
						 	<td class="text-center">
						 			<button class="btn btn-primary edit_loan" type="button" data-id=""><i class="fa fa-edit"></i></button>
						 			<button class="btn btn-danger delete_loan" type="button" data-id=""><i class="fa fa-trash"></i></button>
						 	</td>

						 </tr>
 
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<style>
	td p {
		margin:unset;
	}
	td img {
	    width: 8vw;
	    height: 12vh;
	}
	td{
		vertical-align: middle !important;
	}
</style>	
<script>
	$('#loan-list').dataTable()
	$('#new_application').click(function(){
		uni_modal("New Loan Application","manage_loan.php",'mid-large')
	})
	$('.edit_loan').click(function(){
		uni_modal("Edit Loan","manage_loan.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.delete_loan').click(function(){
		_conf("Are you sure to delete this data?","delete_loan",[$(this).attr('data-id')])
	})
function delete_loan($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_loan',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Loan successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>