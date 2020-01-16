<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-dark" style="background-color: #d4af37;">
        <a class="navbar-brand" href="#">BFC PiDisplay Console</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-sm">
                <h5>Upload New Video File</h5>
                <p class="lead">To change the video currently being displayed, upload a file and restart the PiDisplay.</p>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="custom-file">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input">
                        <label class="custom-file-label" for="fileToUpload">Choose file</label>
                        <input type="submit" value="Upload Image" name="submit">
                    </div>
                </form>
                <script>
                    $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });

                </script><br>
                <h5>Current Video File:</h5>
                <h6>Note: The file to be displayed must have the name video.mp4</h6>
                <?php
                    echo "<table class='table table-bordered'>";
                    echo "<thead><tr><th scope='col'>File Name</th><th scope='col'>Action</th></tr></thead><tbody><form method='post' action='delete.php'>";
                    $vidPath = '/var/www/html/videos/';
                    $files = scandir($vidPath);
                    $totalFiles = count($files);
                    $fileList = array();
                    for ($i = 0; $i <= $totalFiles; $i++):
                    if ($files[$i] != '.' && $files[$i] != '..') {
                    $fileList[$i] = $files[$i];
                    echo "<tr><td><a href='videos/$fileList[$i]'>$fileList[$i]</a></td><td><input type='hidden' value='{$fileList[$i]}' id='fileNamePOST'>'<button type='submit' class='btn btn-danger' id='delBtn'>Delete</button></td></tr>"; }
                    endfor;
                    echo "</form></tbody></table>";
                ?>
            </div>
            <div class="col-sm">
                <h5>PiDisplayCase</h5>
                <ul>
                    <li>Location: Junior-Senior Trophy Case</li>
                    <li>OS: Raspbian Buster OS v10.1</li>
                    <li>FQDN: BFDC-PI1.staff.bishopfoley.edu</li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
