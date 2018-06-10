<?php
include_once('partials/head.php');
?>
<hr>
<form action="http://homestead.test/addcourse" method="POST">
    <div class="form-group">
        <label>Title</label>
        <input name="title" class="form-control" placeholder="Your title..">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" placeholder="Your description.."></textarea>
    </div>
    <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" class="form-control" placeholder="Your class..">
    </div>
    <div class="form-group">
        <label>Maximum Students</label>
        <input name="max" class="form-control" placeholder="Maximum Students">
    </div>
    <div class="form-group">
        <label>Total price</label>
        <input name="price" class="form-control" placeholder="Price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<?php
include_once('partials/footer.php');
?>
