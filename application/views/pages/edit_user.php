<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 28.5.2016
 * Time: 13:22
 */
?>

<!-- obrazec za urejanje podatkov  uporabnika  -->
<div class="row">
    <div class="col-sm-6">
        <div class="bg-info">
            <h3>Info</h3>
            <p>
                V spodnjem obrazcu so prikazani trenutni podatki o izbranem uporabniku,
                če jih želiš spremeniti preprosto vpiši nov podatek v polje in shrani spremembe
            </p>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6">
        {user}
        <?php echo form_open('users/updateUser/{id}');?>
        <div class="form-group">
            <label for="first_name" class="control col-sm-4">Ime/Name</label>
            <div class="col-sm-8">
                <input type="text" name="first_name" id="first_name" value="{first_name}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="control col-sm-4">Priimek/Surname</label>
            <div class="col-sm-8">
                <input type="text" name="last_name" id="last_name" value="{last_name}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="emal" class="control col-sm-4">E-pošta/Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" id="email" value="{email}" class="form-control">
            </div>
        </div>

        {/user}
        <hr>
        <div class="col-sm-8 col-sm-offset-4">
            <button type="submit" class="btn btn-success ">
                <span class="glyphicon glyphicon-save"></span>
                Shrani spremembe
            </button>
        </div>

        <?php echo form_close();?>

    </div>
</div>
