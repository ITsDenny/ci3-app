<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>User View</h1>
    <hr>

    <table class="table table-light table-bordered table-striped table-sm text-center ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
                <th scope="col">Group</th>
            </tr>
        </thead>
        <tbody>
            <?php $rowNumber = 1; ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $rowNumber ?></th>
                    <td><?= htmlspecialchars($user->username) ?></td>
                    <td><?= htmlspecialchars($user->name) ?></td>
                    <td><?= htmlspecialchars($user->email) ?></td>
                    <td><?= htmlspecialchars(strtoupper($user->level)) ?></td>
                    <td><?= htmlspecialchars($user->group_name) ?></td>
                </tr>
                <?php $rowNumber++; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>