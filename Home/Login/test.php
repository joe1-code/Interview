<?php
session_start();

function login($username, $password) {
    // Check the username and password against your database or any other authentication mechanism
    // Replace this with your actual authentication logic
    
    $validUsername = 'your_username';
    $validPassword = 'your_password';
    
    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['logged_in'] = true;
        $_SESSION['login_attempts'] = 0;
        return true;
    }
    
    $_SESSION['login_attempts'] = isset($_SESSION['login_attempts']) ? $_SESSION['login_attempts'] + 1 : 1;
    return false;
}

function isLockedOut() {
    $maxAttempts = 3;
    $lockoutDuration = 30 * 60; // 30 minutes in seconds
    
    if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= $maxAttempts) {
        $lockoutTime = isset($_SESSION['lockout_time']) ? $_SESSION['lockout_time'] : 0;
        if (time() - $lockoutTime < $lockoutDuration) {
            return true;
        } else {
            // Reset the login attempts if the lockout duration has passed
            unset($_SESSION['login_attempts']);
            unset($_SESSION['lockout_time']);
        }
    }
    
    return false;
}

// Usage example
$username = $_POST['username'];
$password = $_POST['password'];

if (isLockedOut()) {
    // User is currently locked out
    echo "You are locked out. Please try again later.";
} elseif (login($username, $password)) {
    // Login successful
    echo "Login successful!";
} else {
    // Login failed
    echo "Invalid credentials. Please try again.";
}

//----------------------------------------SIMPLEST C0DE----------------------------------


// session_start();

// function login($username, $password) {
//     // Replace this with your actual authentication logic
//     $validUsername = 'your_username';
//     $validPassword = 'your_password';
    
//     if ($username === $validUsername && $password === $validPassword) {
//         $_SESSION['logged_in'] = true;
//         return true;
//     }
    
//     return false;
// }

// $username = $_POST['username'];
// $password = $_POST['password'];

// if (login($username, $password)) {
//     echo "Login successful!";
// } else {
//     if (isset($_SESSION['login_attempts'])) {
//         $_SESSION['login_attempts']++;
//     } else {
//         $_SESSION['login_attempts'] = 1;
//     }
    
//     if ($_SESSION['login_attempts'] >= 3) {
//         echo "You are locked out. Please try again later.";
//     } else {
//         echo "Invalid credentials. Please try again.";
//     }
// }





?>

