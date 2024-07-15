<main id="view-panel" >

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Member</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="col-lg-12">
            <form id="manage-member">
                <input type="hidden" name="id" value="">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastname" class="control-label">Last Name</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" required value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" required value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="middlename">Middle Name</label>
                            <input type="text" id="middlename" name="middlename" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea id="address" name="address" cols="30" rows="2" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="contact_no">Contact #</label>
                            <input type="text" id="contact_no" name="contact_no" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="tax_id">KRA Pin</label>
                            <input type="text" id="tax_id" name="tax_id" class="form-control" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account_number">Account Number</label>
                            <input type="text" id="accounts" name="accounts" class="form-control" value="" readonly>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="submit" onclick="$('#manage-member').submit();">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#manage-member').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'ajax.php?action=save_member',
                method: 'POST',
                data: $(this).serialize(),
                success: function(resp){
                    if(resp == 1){
                        alert("Member data successfully saved.");
                        setTimeout(function(){
                            location.reload();
                        }, 1500);
                    }
                }
            });
        });
    </script>
</body>
</html>
