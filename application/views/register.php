<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Mee Planner</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            font-family: 'Montserrat', sans-serif;
        }
        .regis-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .regis-container img {
            width: 50px;
            height: 50px;
            vertical-align: middle;
            margin-bottom: 20px;
        }
        .regis-container h2 {
            margin-bottom: 20px;
            color: #343a40;
        }
        .regis-container h2 .mee {
            color: #FACE00; /* Yellow color for Mee */
        }
        .regis-container h2 .planner {
            color: #343a40; /* Black color for Planner */
        }
        .regis-container input[type="username"], 
        .regis-container input[type="email"], 
        .regis-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .regis-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .regis-container button:hover {
            background-color: #0056b3;
        }
        .regis-container p {
            margin-top: 20px;
            color: #6c757d;
        }
        .regis-container a {
            color: #007bff;
            text-decoration: none;
        }
        .regis-container a:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="regis-container">
        <img src="<?php echo base_url('assets/img/chef.png'); ?>" alt="chef">
        <h2>
            <span class="mee">Mee</span> <span class="planner">Planner</span>
        </h2>
        <h2>Register</h2>
        <form action="<?php echo site_url('Log/register'); ?>" method="post">
            <input type="username" name="username" placeholder="Nama Lengkap" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Register</button>
        </form>
        <p>Back To? <a href="<?php echo site_url('Log/login'); ?>">Login</a></p>
        <?php if ($this->session->flashdata('error')): ?>
            <p class="error"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
