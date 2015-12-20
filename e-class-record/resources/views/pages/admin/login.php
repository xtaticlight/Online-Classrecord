<?php 

    require '../core/init.php';

    $idnumber = $_POST['idnum'];
    $password = $_POST['pass'];

    if (empty($idnumber) === true || empty($password) === true) {
        $errors[] = 'Enter ID number and password to login.';
    } else {
        if (!is_numeric($idnumber)) {
            $errors[] = 'Enter a valid id number.';
        } else{
            if (idexists($idnumber) === true) {
                $activeuser = checkactiveuser($idnumber);
                if ($activeuser === false) {
                    $errors[] = 'Check your email and view the activation link.';
                } else{
                    $login = login($idnumber, $password);
                    if ($login === false) {
                        $errors[] = 'Incorrect id number and password combination.';
                    }

                }
                
            } else{
                $errors[] = 'Id number does not exist.';
            }
        } 
    }

    if (empty($_POST) === false && empty($errors) === true) {
        $_SESSION['id'] = $login;
        
        //e record ang login time
        $session_id = $_SESSION['id'];
        $idnum = idnum($session_id);
        $name = fullname($idnum);
        $date =  date('Y-m-d');
        $time = date('G:i:s');
        $query = "INSERT INTO `attendance` (`idnum`, `name`, `date_in`, `time_in`) VALUES ('$idnum', '$name', '$date', '$time')";
        mysql_query($query);

        echo "<script type=\"text/javascript\">
          window.location.href = \"../pages/home.php\";
        </script>";
            
    } else if (empty($errors) === false) {
        echo output_errors($errors);
    }

?>
