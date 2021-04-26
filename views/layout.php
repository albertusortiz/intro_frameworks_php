<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi sitio web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a href="/" class="navbar-brand h1">Home</a>
        </div>
        <div class="container">
            <a href="service" class="navbar-brand h1">Servicios</a>
        </div>
        <div class="container">
            <a href="contact" class="navbar-brand h1">Contacto</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>