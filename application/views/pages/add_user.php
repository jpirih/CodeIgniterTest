<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 28.5.2016
 * Time: 5:50
 */
?>

<div class="row">
<div class="col-sm-6">
    <div class="bg-info">
        <h3>Info</h3>
        <p>
            Izpolni vsa polja v spodnjem obrazcu, če želiš dodati novega uporabnika v bazo.
        </p>
    </div>
</div>
</div>
<br>
<!-- obrazec za vnos uporabnika  -->
<div class="row">
    <div class="col-sm-6">
        <div id="ok_message"></div>

        <?php echo form_open('users/addUser', array('id' =>'add_user_form', 'class' =>'form-horizontal'));?>
        <div class="form-group">
            <label for="first_name" class="control col-sm-4">Ime/Name</label>
            <div class="col-sm-8">
                <input type="text" name="first_name" id="first_name" placeholder="Janez" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="control col-sm-4">Priimek/Surname</label>
            <div class="col-sm-8">
                <input type="text" name="last_name" id="last_name" placeholder="Kranjski" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control col-sm-4">Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" id="email" placeholder="jkranjski@gmail.com" class="form-control">
            </div>
        </div>
        <hr>
        <div class="col-sm-8 col-sm-offset-4">
            <button type="submit" class="btn btn-success btn-block">
                <span class="glyphicon glyphicon-plus"></span>
                Dodaj uporabnika
            </button>
        </div>

        <?php echo form_close();?>

    </div>
</div>

<!-- javascript ajax call form validation  -->
<script>
    $('#add_user_form').submit(function () {
        var dataString = $('#add_user_from').serialize();
        $.ajax({
            type: 'POST',
            url: <?php  echo form_open('users/addUser');?>,
            data: dataString,
            success: function (data) {
                alert("Bravo");

            }
        });
        return false;

    });
</script>
