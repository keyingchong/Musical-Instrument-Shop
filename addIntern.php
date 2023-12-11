<!-- views/index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="/styles.css">
    <title>Add Intern</title>
    <style>
        /* public/styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }

        </style>
</head>
<body>
    <div class="modal-header">
        <h1 class="createUser">Add Intern</h1>
        <hr style="border:none;border-bottom:2px solid #B6666F;">
    </div>

    <div class="modal-body">
        <form id="addInternForm" onsubmit="return addIntern();" method="POST" class="container-fluid form">

        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 form-grp">
            <input type="text" id="name" name="name" placeholder="name" title="name">
            <span id="nameErr" class='error'></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 form-grp">  
            <input type="date" id="start_month" name="joinedMonth">  
            <span id="startmonthErr" class='error'></span>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 form-grp">                   
            <input type="text" id="course" name="course" placeholder="course" title="course">   
            <span id="courseErr" class='error'></span>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 form-grp">                  
            <input type="text" id="university" name="university" placeholder="university" title="university">
            <span id="universityErr" class='error'></span>
            </div>
        </div>

        <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
        <input type="file" id="createImage" class="createImg" title="Upload Image" onchange="createPreview(event, this)">
        <span id="createImageErr" class='error'></span>
        </div>
        <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
        <img class='image-preview' id="createImagePreview">
        </div>        

        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 form-grp">                  
            <textarea id="description" name="description" required></textarea>
            <span id="descriptionErr" class='error'></span>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 offset-md-4 form-grp" style="text-align: center;">
                <input type="submit" name="addIntern" value="Add Intern" class="submitBtn">
            </div>
        </div>


        </form>
        <script>
        $(document).ready(function () {
            var preview = document.getElementById('createImagePreview');
            preview.src = "photo/bg.jpg";
        });
        </script>

        <script>
        function addIntern() {
            var name = document.getElementById("name").value;
            var start_month = document.getElementById("start_month").value;
            var course = document.getElementById("course").value;
            var university = document.getElementById("university").value;
            var image = document.getElementById("createImage").files[0];
            var description = document.getElementById("description").value;

            //I have to use formdata in order to pass the file
            var form_data = new FormData();
            form_data.append("operation", "createIntern");
            form_data.append("file", image);
            form_data.append("name", name);
            form_data.append("start_month", start_month);
            form_data.append("course", course);
            form_data.append("university", university);
            form_data.append("description", description);


            $.ajax({
                url: "addInternForm.php",
                type: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $("#createInternScript").html(data);
                }
            })

            return false;
                                                }

                                                function createPreview(event, element) {
            var preview = document.getElementById('createImagePreview');

            if (element.files && element.files[0]) {
                var fileName = element.files[0].name;
                var fileExt = fileName.split('.').pop().toLowerCase();

                if (fileExt != "png" && fileExt != "jpg" && fileExt != "jpeg") {
                    messagePopUp("Must be PNG, JPG, JPEG!");
                    preview.src = "photo/bg.jpg";
                } else {
                    preview.src = URL.createObjectURL(event.target.files[0]);
                    preview.onload = function () {
                        URL.revokeObjectURL(preview.src) // free memory
                    }
                }
            } else {
                preview.src = "photo/bg.jpg";
            }
        }
        </script>
        </div>
    </div>
</div>

                    

</body>
</html>
