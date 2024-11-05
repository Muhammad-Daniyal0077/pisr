<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PISR Login</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/images/logoheader.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style>
        /* Full-screen gradient background */
        body, html {
            height: 100%;
            width: 1600px;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        /* Animated gradient background */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            z-index: -1;
            animation: gradientAnimation 10s ease infinite;
        }

        /* Keyframes for gradient animation */
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Login card styling */
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.3);
            max-width: 500px; /* Wider card */
            width: 90%;
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Logo and title styling */
        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }
        .login-header img {
            width: 100px;
            margin-bottom: 15px;
        }
        .login-header h2 {
            font-weight: bold;
            color: #333;
        }

        /* Form button styling */
        .btn-primary {
            background-color: #667eea;
            border-color: #667eea;
        }
        .btn-primary:hover {
            background-color: #505fc9;
            border-color: #505fc9;
        }
        
        /* Link styling */
        .text-center a {
            color: #667eea;
            text-decoration: none;
        }
        .text-center a:hover {
            color: #505fc9;
        }
    </style>
<body>

<div class="login-card">
    <div class="login-header">
        <img src="<?php echo base_url('asset/images/logoheader.png'); ?>" alt="PISR Logo">
        <h2>Welcome to PISR</h2>
        <p>Please enter your login details to proceed</p>
    </div>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <form action="<?= base_url('auth/login') ?>" method="post">
        <div class="form-group">
            <label for="username">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <div class="text-center mt-3">
        <a href="#">Forgot your password?</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
