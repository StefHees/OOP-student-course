<?php
include_once('partials/head.php');
?>

    <!-- Page Heading -->
    <h1 class="my-4">Courses
        <small>Secondary Text</small>
    </h1>

    <hr>

    <?php
    foreach($courses as $course){
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
                <p>Start date: <?= $course->getDate(); ?></p>
                <p>Total Price: <?= $course->getPrice(); ?></p>
                <p class="">
                    <?= count($course->getEnrolled()); ?> / <?= $course->getMax(); ?>
                </p>
                <a class="btn btn-primary" href="?id=<?= $course->getId(); ?>">View Course</a>

            </div>
        </div>
    <!-- /.row-->
    <hr>
    <?php
    }
    ?>

<?php
include_once('partials/footer.php');
?>