<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location: ../admin.php");
    exit;
}
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login/login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="reset-password.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <!-- ADMIN NAV BAR [START] -->
    <nav class="nav">
        <div class="nav_container">
            <div class="logo_holder">
                <a id="logo" href="../">
                    <img src="../photos/wma-logo.png" id="logo-img">
                </a>
            </div>
            <div class="redirect">
                <a href="welcome.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
    </nav>
    <!-- ADMIN NAV BAR [END] -->
    
    <div class="container">
        <div class="login_container">
            <h2>Register Admin User</h2>
            <div class="form_proper">
                <form 
                    method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

                    <input 
                        type="text" 
                        name="username" 
                        id="form-control"
                        autocomplete="off"
                        placeholder="Username"
                        value="<?php echo $username; ?>"
                        class="form-control 
                            <?php 
                                echo (!empty($username_err)) ? 'is-invalid' : ''; 
                            ?>" >
                    <span class="invalid-feedback">
                        <?php echo $username_err; ?>
                    </span>

                    <input 
                        type="password" 
                        name="password" 
                        id="form-control"
                        autocomplete="off"
                        value="<?php echo $password; ?>"
                        class="form-control 
                            <?php 
                                echo (!empty($password_err)) ? 'is-invalid' : ''; 
                            ?>">
                    <span class="invalid-feedback">
                        <?php echo $password_err; ?>
                    </span>

                    <input 
                        type="password" 
                        id="form-control"
                        name="confirm_password" 
                        placeholder="Confirm Password"
                        class="form-control 
                            <?php 
                                echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; 
                            ?>">
                        <span class="invalid-feedback">
                            <?php echo $confirm_password_err; ?>
                        </span>

                    <div class="actions">
                        <input class="submit" type="submit" value="Submit">
                        <input class="submit" type="reset" value="Reset">
                        <a class="cancel" href="welcome.php">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>      
</body>
</html>