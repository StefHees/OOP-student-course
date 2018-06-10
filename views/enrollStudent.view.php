<?php
include_once('partials/head.php');
?>
<hr>
<form action="http://homestead.test/enroll" method="POST">
    <div class="form-group">
        <select name="student" class="custom-select" required>
            <option value="">Select a student</option>
            <?php
                foreach($students as $student) {
            ?>
            <option value="<?= $student->getId(); ?>"><?= $student->getName().' - '.$student->getAge().' - '.$student->getClass(); ?></option>
            <?php
                }
            ?>
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
    <div class="form-group">
        <select name="course" class="custom-select" required>
            <option value="">Select a course</option>
            <?php
                foreach($courses as $course) {
            ?>
                    <option value="<?= $course->getId(); ?>"><?= $course->getTitle(); ?></option>
            <?php
                }
            ?>
        </select>
        <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<?php
include_once('partials/footer.php');
?>
