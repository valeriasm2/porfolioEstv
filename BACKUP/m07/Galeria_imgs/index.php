<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Imágenes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: linear-gradient(to bottom, #e0f0ff, #c0e0ff);
            color: #03396c;
        }

        h1 {
            text-align: center;
            color: #014f86;
            text-shadow: 1px 1px 2px #a0c4ff;
        }

        .formulario {
            margin-bottom: 30px;
            text-align: center;
            background-color: #dbefff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 100, 0.2);
        }

        .formulario input[type="file"],
        .formulario input[type="text"] {
            margin: 10px 0;
            padding: 10px;
            width: 80%;
            max-width: 400px;
            border: 2px solid #68a0cf;
            border-radius: 8px;
        }

        .formulario input[type="submit"] {
            padding: 10px 20px;
            background-color: #0077b6;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        .formulario input[type="submit"]:hover {
            background-color: #0096c7;
            transform: scale(1.05);
        }

        .galeriaImagenes {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .galeriaImagenes div {
            text-align: center;
            background-color: #eaf4ff;
            border: 2px solid #68a0cf;
            border-radius: 12px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 100, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .galeriaImagenes div:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 100, 0.2);
        }

        .galeriaImagenes img,
        .galeriaImagenes video {
            max-width: 200px;
            border-radius: 8px;
            border: 2px solid #0077b6;
            padding: 5px;
            background-color: white;
        }

        .galeriaImagenes p {
            margin-top: 8px;
            color: #03396c;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Galeria de Imágenes</h1>

    <div class="formulario">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="media" accept="image/*,video/*" required>
            <input type="text" name="description" placeholder="Descripción" required>
            <input type="submit" value="Subir Imagen">
        </form>
    </div>

    <div class="galeriaImagenes">
        <?php
        $files = glob('imagenes/*');
        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'txt') continue;
            $desc = file_exists($file . '.txt') ? file_get_contents($file . '.txt') : '';
            $ext = pathinfo($file, PATHINFO_EXTENSION);

            echo '<div>';
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) echo "<img src='$file' style='width:200px'>";
            if (in_array($ext, ['mp4', 'webm', 'ogg'])) echo "<video controls style='width:200px'><source src='$file' type='video/$ext'></video>";
            echo "<p>$desc</p></div>";
        }
        ?>
    </div>
</body>
</html>