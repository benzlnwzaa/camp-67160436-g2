<!-- resources/views/html101.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Workshop HTML</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css" />
    </head>
    <body>
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
        <div class="container pt-5">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="fname">
                            ชื่อ
                        </label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="fname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="lname">
                            นามสกุล
                        </label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="lname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="bdate">
                            วัน/เดือน/ปี
                        </label>
                    </div>
                    <div class="col-6">
                        <input type="date" id="bdate" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
