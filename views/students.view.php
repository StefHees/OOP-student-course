<?php
include_once('partials/head.php');
?>

    <!-- Page Heading -->
    <h1 class="my-4">Students
    </h1>

    <hr>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Class</th>
        <th scope="col">Courses</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (!isset($students)){
        $students = array();
    }
    foreach($students as $student) {

        ?>
        <tr>
            <th scope="row"><?= $student->getId(); ?></th>
            <td><?= $student->getName(); ?></td>
            <td><?= $student->getAge(); ?></td>
            <td><?= $student->getClass(); ?></td>

            <td>
                <?php foreach($student->getCourses() as $course){
                    if (isset($course)) {
                        echo "<a class='btn btn-sm btn-primary' href='http://homestead.test/?id=" . $course[0]['id'] . "'>" . $course[0]['title'] . '</a> ';
                    }
                }; ?>
            </td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>


<?php
include_once('partials/footer.php');
?>