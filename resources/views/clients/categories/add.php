<h1>Them chuyen muc</h1>
<form method="post" action="<?php echo route('categories.add') ?>">
    <div>
        <input type="text" name="category_name" placeholder="Ten chuyen muc">
    </div>

    <button type="submit">Them chuyen muc</button>
    <?php echo csrf_field(); ?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
</form>