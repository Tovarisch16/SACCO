<main id="view-panel" >

<div class="container-fluid">
	<div class="col-lg-12">
		<form id="manage-borrower">
			<input type="hidden" name="id" value="">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label">Last Name</label>
						<input name="lastname" class="form-control" required="" value="">
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
						<label for="">First Name</label>
						<input name="firstname" class="form-control" required="" value="">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="">Middle Name</label>
						<input name="middlename" class="form-control" value="">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
							<label for="">Address</label>
							<textarea name="address" id="" cols="30" rows="2" class="form-control" required=""></textarea>
				</div>
				<div class="col-md-5">
					<div class="">
						<label for="">Contact #</label>
						<input type="text" class="form-control" name="contact_no" value="">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
							<label for="">Email</label>
							<input type="email" class="form-control" name="email" value="">
				</div>
				<div class="col-md-5">
					<div class="">
						<label for="">Tax ID</label>
						<input type="text" class="form-control" name="tax_id" value="">
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
</div>

<script>
	 $('#manage-borrower').submit(function(e){
	 	e.preventDefault()
	 	start_load()
	 	$.ajax({
	 		url:'ajax.php?action=save_borrower',
	 		method:'POST',
	 		data:$(this).serialize(),
	 		success:function(resp){
	 			if(resp == 1){
	 				alert_toast("Borrower data successfully saved.","success");
	 				setTimeout(function(e){
	 					location.reload()
	 				},1500)
	 			}
	 		}
	 	})
	 })
</script>