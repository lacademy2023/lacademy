<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROTECTED CONTENT</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Your custom CSS styles -->
  <style>
    /* Add your custom CSS styles here if needed */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
    }

    main {
      padding: 20px;
    }

    .password-form {
      max-width: 400px;
      margin: 20px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      background-color: #f8f8f8;
    }

    .password-form h1 {
      font-size: 28px;
      margin-bottom: 20px;
      text-align: center;
      color: #E26A6A;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .password-input {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 7px;
      width: 100%;
      margin: 10px 0;
    }

    .submit-button {
      padding: 12px 24px;
      font-size: 15px;
      background-color: #FF69B4;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
      transition: background-color 0.3s, transform 0.3s;
    }

    .submit-button:hover {
      animation: changeColor 2s infinite alternate;
    }

    @keyframes changeColor {
      0% {
        background-color: #FF69B4;
      }
      100% {
        background-color: #FF1493;
      }
    }

    .submit-button:active {
      transform: scale(0.9);
    }

    .protected-content {
      display: none;
      margin-top: 20px;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
    }

    .logo {
      max-width: 150px;
    }
  </style>
</head>

<body>
  <header>
    <h1 class="display-4">STUDENTS PREMIUM ACCESS</h1>
  </header>
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12"> <!-- col-lg for desktop, col-sm for mobile -->
          <div class="password-form" id="passwordForm">
            <h1>Enter the Password</h1>
            <form onsubmit="return checkPassword(event)">
              <input type="password" id="passwordInput" class="password-input form-control" placeholder="Enter password">
              <button type="submit" class="submit-button btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="protected-content" id="protectedContent">
            <!-- Your protected content goes here -->
            <h2 class="display-5">Welcome to the Premium Server</h2>
            <p>This is the content that only authenticated users can see.</p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="fixed-bottom">
    <p>&copy; 2023 Litsure Academy. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function checkPassword(event) {
      event.preventDefault(); // Prevent form submission before CAPTCHA verification

      // Perform CAPTCHA verification

      // Here, you can make an AJAX request to your server to verify the password
      const passwordInput = document.getElementById("passwordInput").value;
      const correctPassword = "2006"; // Replace 'your_password_here' with your desired password

      if (passwordInput === correctPassword) {
        document.getElementById("passwordForm").style.display = "none"; // Hide password form
        document.getElementById("protectedContent").style.display = "block"; // Show protected content
      } else {
        alert("Incorrect password. Please try again.");
      }
    }
  </script>
</body>
</html>
