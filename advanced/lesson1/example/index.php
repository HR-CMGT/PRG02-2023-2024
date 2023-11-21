<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student advanced list</title>
</head>
<body>
<h1>Student advanced list</h1>
<?php if (isset($error)): ?>
    <span class="error"><?= $error; ?></span>
<?php endif; ?>

<?php if (isset($students) && isset($totalStudents)): ?>
    <table>
        <thead>
        <tr>
            <th>Nummer</th>
            <th>Klas</th>
            <th>Naam</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="3">Totaal: <?= $totalStudents; ?></td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student->number; ?></td>
                <td><?= $student->classNumber; ?></td>
                <td><?= $student->name; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>

