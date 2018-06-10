<?php
include_once('partials/head.php');
?>

    <!-- Page Heading -->
    <h1 class="my-4">Courses
    </h1>

    <hr>
    <?php
    foreach($courses as $course) {
    ?>
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?= $course->getTitle(); ?></h3>
                <p><?= $course->getDescription(); ?></p>
                <p><?= $course->getDate(); ?></p>
                <p><?= $course->getPrice(); ?></p>
                <p><?= count($course->getEnrolled()); ?> / <?= $course->getMax(); ?></p>
            </div>
        </div>
        <!-- /.row-->
        <hr>
        <h3>Enrolled Students</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Class</th>
                <th scope="col">Price (Students / Total Price)</th>
            </tr>
            </thead>
            <tbody>
        <?php
        $students = $course->getEnrolled();
        if (!isset($students)){
            $students = array();
        }
        $totalStudents = count($students);
        foreach($students as $student) {
        ?>

            <tr>
                <th scope="row"><?= $student[0]->getId(); ?></th>
                <td><?= $student[0]->getName(); ?></td>
                <td><?= $student[0]->getAge(); ?></td>
                <td><?= $student[0]->getClass(); ?></td>
                <td><?= $course->getPrice() /  $totalStudents ?></td>
            </tr>

        <?php
            }
        ?>
            </tbody>
        </table>
    <?php
        }
    ?>


<?php
include_once('partials/footer.php');
?>