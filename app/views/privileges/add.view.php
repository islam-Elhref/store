
<fieldset class="scheduler-border">
    <legend class="scheduler-border"> <?= isset($legend) ? $legend : '' ?> </legend>
    <div class="form">
        <form method="post" enctype="application/x-www-form-urlencoded" class="needs-validation " novalidate>
            <div class="form-group">
                <label for="name"><?= isset($Text_name) ? $Text_name : '' ?></label>
                <input type="text" class="form-control box" id="name" required name="name">
                <div class="valid-feedback"><?= isset($valid_msg) ? $valid_msg : '' ?> </div>
                <div class="invalid-feedback"><?= isset($invalid_msg_privilege_name) ? $invalid_msg_privilege_name : '' ?></div>
            </div>
            <div class="form-group">
                <label for="url"><?= isset($text_table_privilege_url) ? $text_table_privilege_url : '' ?></label>
                <input type="text" class="form-control box dr_english" id="url" required name="url" pattern="/.+">
                <div class="valid-feedback"><?= isset($valid_msg) ? $valid_msg : '' ?> </div>
                <div class="invalid-feedback"><?= isset($invalid_msg_privilege_url) ? $invalid_msg_privilege_url : '' ?></div>
            </div>
            <button type="submit" class="btn btn-light save" name="submit" id="submit"><?= isset($Text_add_new) ? $Text_add_new : '' ?></button>
        </form>
    </div>
</fieldset>
