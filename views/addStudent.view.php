<?php
include_once('partials/head.php');
?>
<hr>
<form action="http://homestead.test/addstudent" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input name="name" class="form-control" placeholder="Your name..">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input name="age" class="form-control" placeholder="Your age..">
    </div>
    <div class="form-group">
        <label>Class</label>
        <input name="class" class="form-control" placeholder="Your class..">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<?php
include_once('partials/footer.php');
?>
