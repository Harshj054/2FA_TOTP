<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin-panel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
        <link href="bootstrap-4.0.0-dist/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet"/>
        <style>
            .dropbtn {
  background-color: #000000;
  color: white;
  border-radius: 10px;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #4f4f4f;}
        </style>
    </head>
    <body>
        
        <div class="pos-f-t">
            <nav class="navbar navbar-dark bg-dark d-flex justify-content-between">
                    <div class="dropdown">
                    <button class="dropbtn"><span class="navbar-toggler-icon"></span></button>
                    <div class="dropdown-content">
                      <a href="insert.php">INSERT</a>
                      <a href="del.php">DELETE</a>
                      <!-- <a href="update.php">UPDATE</a> -->
                    </div>
                  </div>
              
                <h2 style="color: white; margin: auto;">INSERT NEWS</h2>
                <a href="logout.php" class="btn btn-danger" style="color: black;">LOGOUT</a>
            </nav>
        </div>
        
        
        
        <div class="container">
            
            <div class="row">
                <div class="col-sm-8">
                    <br>
                    <form action="../postcontroller.php" method="post" enctype="multipart/form-data">
    
                        <div class="form-group">
                            <label for="short_description">Title</label>
                            <input type="text" name="title" id="title" placeholder="title" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <textarea name="content" id="content"></textarea>

                            <script>
                                $('#summernote').summernote({
                                    placeholder: 'Your content will goes here...',
                                    tabsize: 2,
                                    height: 100
                                });
                            </script>
                        </div>

                        <div class="form-group">
                            <select name="category" id="category">
                                <option value="sports">Sports</option>
                                <option value="entertainment">Entertainment</option>
                                <option value="job">Job</option>
                                <option value="stock">finance</option>
                                <option value="crime">Crime</option>
                                <option value="international">International</option>
                                
                                
                                
                            </select>
                        </div>
                    
                        <label>Image :</label>
            <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg"></input>
                        <br>

                        <button type="submit" name="submit" class="btn btn-outline-success">Success</button>
                    </form>
                </div>

                <div class="col-sm-4">
                </div>

            </div>
        </div>
    </body>

</html>
