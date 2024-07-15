<main id="view-panel" >

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<large class="card-title">
					<b>Members List</b>
				</large>
				<button class="btn btn-primary col-md-2 float-right" type="button" id="new_member"><i class="fa fa-plus"></i> New member</button>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="member-list">
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
							<th class="text-center">Member</th>
							<th class="text-center">Current Loan</th>
							<th class="text-center">Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						
						 <tr>
						 	
						 	<td class="text-center"></td>
						 	
						 	<td class="">None</td>
						 	<td class="">Active</td>
						 	

						 </tr>

					</tbody>
				</table>
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
	$('#member-list').dataTable()
	$('#new_member').click(function(){
		uni_modal("New member","manage_member.php",'mid-large')
	})
	$('.view_member').click(function(){
		uni_modal("View member","view_member.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.edit_member').click(function(){
		uni_modal("Edit member","manage_member.php?id="+$(this).attr('data-id'),'mid-large')
	})
	$('.delete_member').click(function(){
		_conf("Are you sure to delete this member?","delete_member",[$(this).attr('data-id')])
	})
	function delete_member($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_member',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("member successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}

	</script>	
</div>
</html>