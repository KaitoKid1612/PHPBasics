<?php  
    if(isset($_POST['submit'])) {
        $permitted_extensions = ['png', 'jpg','gif','jpeg'];
        $file_name = $_FILES['upload']['name'];
        if(!empty($file_name)){
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $generated_file_name = time() . '-' . $file_name;
            $destination_path = "uploads/${generated_file_name}";
            $file_extension = explode('.', $file_name);
            $file_extension = strtolower(end($file_extension));
            //validate file extension permitted
            if(in_array($file_extension, $permitted_extensions)){
                if($file_size <= 1000000){
                    //ok, move from temp  folder to/ uploads
                    move_uploaded_file($file_tmp_name, $destination_path);
                    $message = '<p style="color:green">File upload success</p>';
                } else {
                    $message = '<p style="color:green">File exits</p>';
                }
            }
        } else {
            $message = '<p style="color:red">No file chose</p>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" 
    enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php echo $message ?? '' ?>
</body>
</html>