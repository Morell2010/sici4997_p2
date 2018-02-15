<?php

$maxSessionTime = 60 * 30; // 30 minutes
session_start();
date_default_timezone_set('EST');


$action = (isset($_GET['a'])) ? $_GET['a'] : '';
include 'db.php';
include './classes/User.php';
include './classes/order.php';
if (isset($_SESSION['userID'])) {
    $loggedUser = User::loadFromID($_SESSION['userID']);
    
    if (is_null($loggedUser)) {
        session_destroy();
        session_start();
    } else {
        if ((time() - $_SESSION['loginTime']) >= $maxSessionTime) {
            session_destroy();
            session_start();
            $loggedUser = null;
        } else if ($_SESSION['loginIP'] != $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            session_start();
            $loggedUser = null;
            //showError('Unauthorized access! Session destroyed!');
        }
    }
}
include './parts/header.php';
if ($action == 'login') {
    include './parts/login.php';
} else if ($action == 'logout') {
    session_destroy();
    header('Location: index.php');
} else if ($action == 'doLogin') {
    $u = User::loadFromUsername($_POST['username']);
    
    if (is_null($u)) {
        showError('El usuario no existe.');
        include './parts/login.php';
    } else if ($u->validatePassword($_POST['password'])) {
        $_SESSION['userID'] = $u->id;
        $_SESSION['loginTime'] = time();
        $_SESSION['loginIP'] = $_SERVER['REMOTE_ADDR'];
        header('Location: index.php');
    } else {
        showError('Contrasena incorrecta!');
        include './parts/login.php';
    }
}else if ($action == 'register') {
    include './parts/register.php';
} else if ($action == 'doRegister') {
    $u = User::loadFromUsername($_POST['username']);
    
    if ($u) {
        showError('Usuario ya existe.');
        include './parts/register.php';
    } else {
        $u = new User();
        
        $u->username = $_POST['username'];
        $u->password = $_POST['password1'];
        $u->email = $_POST['email'];
        $u->save();
        
        showSuccess('Welcome to E&D Quick Lube!');
    }
}else if ($action == 'contacto') {
    include './parts/bcontactos.php';
} else if ($action == 'tienda') {
    include './parts/btienda.php';
}else if ($action == 'doTienda') {
    //$u = OrderDetails::loadFromID($_POST['id']);
    //    $u = new OrderDetails();
    //    
    //    $u->id_producto = $_POST['1'];
    //    $u->precio = $_POST['p1precio'];
    //    $u->cantidad = $_POST['p1cantidad'];
    //    $u->subtotal = $_POST['p1precio'*'p1cantidad'];
    //    $u->save();
                
        showSuccess('Compra realizada! Gracias! Pase por nuestra tienda para completar la transaccion.');
        
        //echo $_POST['p1precio'];
        //include './parts/ordendetalles.php';
    

}else if ($action == 'contacto') {
    include './parts/bcontactos.php';
}else if ($action == 'doContact') {
    include './parts/email.php';
    //echo "Gracias";
    showSuccess('Gracias por Contactarnos');
} else if ($action == 'tienda') {
    include './parts/btienda.php';

}else if ($action == 'citas') {
    include './parts/bcitas.php';
}else {
    include './parts/body.php';
}


include './parts/footer.php';



//echo '<pre>' . print_r($_SESSION, true)  . '</pre>';//
if (isset($_SESSION['loginTime'])) {
    echo '<pre>' . date('d-M-Y H:m:s', $_SESSION['loginTime']) . '</pre>';
}
function showError($msg) {
    echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
}
function showSuccess($msg) {
    echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
}
?>