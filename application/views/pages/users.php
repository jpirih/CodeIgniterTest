<?php
/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 27.5.2016
 * Time: 19:04
 */
?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="btn-group" >
            <a href="<?= base_url();?>" class="btn btn-danger btn-lg"> Domov</a>
            <a href="<?=base_url("users/new");?>" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-plus"></span>
                Dodaj
            </a>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <table class="table tale-responsive table-bordered table-striped">
            <thead>
            <tr class="glavaTabele">
                <th>Ime</th>
                <th>Priimek</th>
                <th>Email</th>
                <th>Uredi</th>
                <th>Izbriši</th>
            </tr>
            </thead>
            <tbody>
                {users}
                <tr>
                    <td>{first_name}</td>
                    <td>{last_name}</td>
                    <td>{email}</td>
                    <td>
                        <a href="<?= base_url('users/edit');?>/{id}" class="btn btn-info">
                            <span class="glyphicon glyphicon-edit"></span>
                            Uredi
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url('users/delete');?>/{id}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                {/users}
            </tbody>
        </table>
    </div>
</div>

