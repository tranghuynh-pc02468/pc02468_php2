<?php
$course = [
  's1' => 'course1',
  's2' => 'course2',
  's3' => 'course3'
];

//model
function get_courses(){
    global $course;
    return array_values($course);
}

function find_by_semester($semester){
    global $course;
    return (array_key_exists($semester, $course) ? $course[$semester] : 'invalid course');
}

//controller
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester']) ? $_GET['semester'] : '');
$course_name = find_by_semester($semester);
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
                />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
                />
    </head>

    <body>
        <div class="container mt-3">
            <?= $course_name; ?>
            <select name="courses" id="">
                <?php foreach ($list_of_courses as $item): ?>
                <option value=""><?= $item ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
                ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
                ></script>
    </body>
</html>


