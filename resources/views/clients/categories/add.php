<h1>Them chuyen muc</h1>
<form method="post" action="<?php echo route('categories.add') ?>">
    <div>
        <!-- dung cach nao cung duoc -->
        <input type="text" name="category_name" placeholder="Ten chuyen muc"
            value="<?php echo old('category_name', 'default_value') ?>">
        <!-- <input type="text" name="category_name" placeholder="Ten chuyen muc" value="<?php //echo $cateName ?>"> -->
    </div>

    <button type="submit">Them chuyen muc</button>
    <?php //echo csrf_field(); ?>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>