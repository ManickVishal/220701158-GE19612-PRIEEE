<?php 

SESSION_START();

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']==1)
    {
        header("location:index.php");
    }
}


    if (isset($_POST['submit'])) 
    {
        $id = $_POST['id'];
        $pass = ($_POST['password']);

        if($id=='admin' && $pass=='admin')
        {
            $_SESSION['auth']=1;
            header("location:index.php");
        }

        else
        {
            echo "invalid";
        }

    }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="username" name="id">
                        
                    </div>
                    <div class="input-group form-group">
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" ></script>

</body>
</html>