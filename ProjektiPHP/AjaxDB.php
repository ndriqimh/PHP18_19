<?php
include 'AjaxLidhjaDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Përditësimi me Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <br/><br/><br/><br/>
    <h2>Përditësimi me Ajax</h2>
    <p>Përditëso të dhënat e përdoruesëve me anë të Ajax-it:</p>
    <table class="table">
        <thead>
        <tr>
            <th>Nofka</th>
            <th>Fjalkalimi</th>
            <th>E-Posta</th>
            <th>Veprimi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $table  = mysqli_query($connection ,'SELECT * FROM perdoruesit');
        while($row  = mysqli_fetch_array($table)){ ?>
            <tr id="<?php echo $row['id']; ?>">
                <td data-target="username"><?php echo $row['username']; ?></td>
                <td data-target="password"><?php echo $row['password']; ?></td>
                <td data-target="email"><?php echo $row['email']; ?></td>
                <td><a href="#" data-role="update" data-id="<?php echo $row['id'] ;?>">Update</a></td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" id="email" class="form-control">
                </div>
                <input type="hidden" id="userId" class="form-control">

            </div>
            <div class="modal-footer">
                <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>

<script>
    $(document).ready(function(){

        //  append values in input fields
        $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var username  = $('#'+id).children('td[data-target=username]').text();
            var password  = $('#'+id).children('td[data-target=password]').text();
            var email  = $('#'+id).children('td[data-target=email]').text();

            $('#username').val(username);
            $('#password').val(password);
            $('#email').val(email);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
        });

        //Krijohet veprimi per ti marr te dhenat dhe per ti perditesuar ato ne DB
        $('#save').click(function(){
            var id  = $('#userId').val();
            var username =  $('#username').val();
            var password =  $('#password').val();
            var email =   $('#email').val();

            $.ajax({
                url      : 'connection.php',
                method   : 'post',
                data     : {username : username , password: password , email : email , id: id},
                success  : function(response){
                    // now update user record in table
                    $('#'+id).children('td[data-target=Username]').text(username);
                    $('#'+id).children('td[data-target=Password]').text(password);
                    $('#'+id).children('td[data-target=email]').text(email);
                    $('#myModal').modal('toggle');
                }
            });
        });
    });
</script>
</html>