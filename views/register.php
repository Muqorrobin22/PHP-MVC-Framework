<h1>Create an Account</h1>

<?php

use app\core\form\Form;

$form = Form::begin("", "post");
?>

    <div class="row">
        <div class="col mb-3">
            <?php echo $form->field($model, "firstname", "text")  ?>
        </div>
        <div class="col mb-3">
            <?php echo $form->field($model, "lastname", "text")  ?>
        </div>
    </div>

    <div class="mb-3">
        <?php echo $form->field($model, "email", "text")  ?>
    </div>

    <div class="mb-3">
        <?php echo $form->field($model, "password", "password")  ?>
    </div>

    <div class="mb-3">
        <?php echo $form->field($model, "confirmPassword", "password")  ?>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>

<?php Form::end(); ?>


<!--<form method="post">-->
<!--    <div class="row">-->
<!--        <div class="col">-->
<!--            <div class="mb-3">-->
<!--                <label for="firstname" class="form-label">Firstname</label>-->
<!--                <input type="text" class="form-control --><?php //echo $model->hasError("firstname") ? "is-invalid" : ""; ?><!--" id="firstname" name="firstname"  >-->
<!--                <div class="invalid-feedback">-->
<!--                    --><?php //echo $model->getFirstError("firstname"); ?>
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="col">-->
<!--            <div class="mb-3">-->
<!--                <label for="lastname" class="form-label">Lastname</label>-->
<!--                <input type="text" class="form-control" id="lastname" name="lastname">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="Email" class="form-label">Email</label>-->
<!--        <input type="email" class="form-control" id="Email" name="email">-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="Password" class="form-label">Password</label>-->
<!--        <input type="password" class="form-control" id="Password" name="password">-->
<!--    </div>-->
<!--    <div class="mb-3">-->
<!--        <label for="Confirm_Password" class="form-label">Confirm Password</label>-->
<!--        <input type="password" class="form-control" id="Confirm_Password" name="confirmPassword">-->
<!--    </div>-->
<!--    <button type="submit" class="btn btn-primary">Register</button>-->
<!--</form>-->