<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <?php include_once 'includes/header.php' ?>
    <title>Register - Easyonlinehomejobs</title>
</head>

<body>
<?php include_once 'includes/body.php' ?>
    <?php include_once 'includes/nav.php' ?>
    <main>
        <section class="flex items-center justify-center p-4 py-4 lg:py-12">
            <div class="w-full max-w-4xl space-y-4">
                <h1 class="text-2xl font-bold text-center text-gray-800 lg:text-4xl">Complete the Form Below to Join
                    India's Top <br />With <span class="text-orange-600">Online Jobs</span>
                </h1>
            </div>
        </section>
        <section class="flex items-center justify-center p-4 py-4 ">
            <div class="w-full max-w-md space-y-4">
            <div class="w-full p-4 bg-white border rounded shadow-lg">
            <?php include_once 'includes/form.php' ?>
            </div>
        </div>
        </section>
    </main>
    <?php include_once 'includes/footer.php' ?>
</body>

</html>