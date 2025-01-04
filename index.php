<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student / Parent Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }
        .login-container {
            border: 1px solid #dcdcdc;
            border-radius: 8px;
            padding: 20px;
            background: #fff;
            width: 300px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            font-size: 18px;
            margin: 0 0 10px;
            text-align: center;
        }
        .login-container p {
            font-size: 14px;
            color: #666;
            text-align: center;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .login-container form label {
            font-size: 14px;
            margin-bottom: 5px;
        }
        .login-container form input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .login-container form .login-btn {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container form .login-btn:hover {
            background-color: #0056b3;
        }
        .login-container .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .login-container .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }
        .login-container .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Student / Parent Login</h2>
        <p>Please enter your Login Details</p>
        <form>
            <label for="roll-no">Roll No</label>
            <input type="text" id="roll-no" name="roll-no" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <label for="dob">Date of Birth</label>
            <input type="text" id="dob" name="dob" placeholder="DD-MM-YYYY" required>
            
            <button type="submit" class="login-btn">Login</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
    </div>
</body>
</html>
