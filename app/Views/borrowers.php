<main id="view-panel" >

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<large class="card-title">
					<b>Borrower List</b>
				</large>
				<button class="btn btn-primary col-md-2 float-right" type="button" id="new_borrower"><i class="fa fa-plus"></i> New Borrower</button>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="borrower-list">
					<colgroup>
						<col width="10%">
						<col width="35%">
						<col width="30%">
						<col width="15%">
						<col width="10%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Borrower</th>
							<th class="text-center">Current Loan</th>
							<th class="text-center">Next Payment Schedule</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						
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
	$('#borrower-list').dataTable()
	$('#new_borrower').click(function(){
		uni_modal("New borrower","manage_borrower.php",'mid-large')
	})
	$('.edit_borrower').click(function(){
		uni_modal("Edit borrower","manage_borrower.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.delete_borrower').click(function(){
		_conf("Are you sure to delete this borrower?","delete_borrower",[$(this).attr('data-id')])
	})
function delete_borrower($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_borrower',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("borrower successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
</html>