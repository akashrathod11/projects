<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sing up</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <script src="https://kit.fontawesome.com/2fa5da2dd4.js" crossorigin="anonymous"></script>z -->
</head>
<style>
    :root {
  --font-base: "Lato";
  --fs-700: 2.986rem;
  --fs-600: 2.488rem;
  --fs-500: 2.074rem;
  --fs-400: 1.728rem;
  --fs-300: 1.44rem;
  --fs-200: 1.2rem;
  --fs-100: 1rem;
  --fs-50: 0.833rem;

  --white: #ffffff;
  --grey-50: #f8fafc;
  --grey-100: #f1f5f9;
  --grey-200: #e2e8f0;
  --grey-300: #cbd5e1;
  --grey-400: #94a3b8;
  --grey-500: #64748b;
  --grey-600: #475569;
  --grey-700: #334155;
  --grey-800: #1e293b;
  --grey-900: #0f172a;
  --grey-950: #020617;

  --primary: #006ed8;
  --primary-50: hsl(209, 100%, 52%);

  --valid: #00d86c;
  --invalid: #d8002f;

  --text: var(--grey-500);
  --text-alt: var(--grey-900);
  --background: var(--grey-200);
  --background-alt: var(--grey-100);
  --background-shade: var(--grey-100);
}

@media (prefers-color-scheme: dark) {
  :root {
    --text: var(--grey-500);
    --text-alt: var(--grey-100);
    --background: var(--grey-900);
    --background-alt: var(--grey-800);
    --background-shade: var(--grey-700);
  }
}


/*
Base
*/
* {
  box-sizing: border-box;
}


html {
  font-size: 100%;
}

html,
body,
main {
  height: 100%;
}

body {
  margin: 0;
  padding: 0;
  font-family: var(--font-base), sans-serif;
  font-weight: 400;
  line-height: 1.618;
  color: var(--grey-700);
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 2.25rem;
  margin-bottom: 1rem;
  line-height: 1.15;
  font-weight: 700;
  letter-spacing: -0.022em;
  color: var(--grey-900);
}

h1,
.h1 {
  font-size: var(--fs-600);
}

h2,
.h2 {
  font-size: var(--fs-500);
}

h3,
.h3 {
  font-size: var(--fs-400);
}

h4,
.h4 {
  font-size: var(--fs-300);
}

h5,
.h5 {
  font-size: var(--fs-200);
}

h6,
.h6 {
  font-size: var(--fs-100);
}

a {
  color: var(--primary);
  text-decoration: none;
}

a:hover {
  color: var(--primary-50);
  text-decoration: underline;
}


/* Page title */

.title {
  margin-top: unset;
  margin-bottom: 2rem;
  text-align: center;
}

/* Input defaults and validation */

input, select, textarea {
  width: 100%;
  padding: 0.75rem;
  font-size: var(--fs-100);
}

input:not([type="submit"]):user-valid {
  border: 1px solid var(--valid);
}

input:not([type="submit"]):user-invalid {
  border: 1px solid var(--invalid);
}

/* Form */

.form-section {
  background-color:white;
  min-height: 100%;
  display: flex;
  padding: clamp(1rem, 5vw, 2rem);
}

.form-wrapper {
  width: 100%;
  padding: clamp(1rem, 5vw, 2rem);
  margin: auto;
  background-color: var(--background-alt);
  border-radius: 0.25rem;
}

.form-wrapper .title {
  color: var(--text-alt)
}

.form-group {
  margin-bottom: 1rem;
  flex-grow: 1;
  flex-shrink: 1;
}

.form-input {
  background-color: var(--background-shade);
  color: var(--text-alt);
  border: 0;
  border-radius: .25rem;
  box-shadow: 0 0 1px var(--text);
}

.form-link {
  color: var(--primary-50);
}

.form-submit {
  padding: 1rem;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  background-color: var(--primary);
  color: var(--white);
  transition: background-color cubic-bezier(0.445, 0.05, 0.55, 0.95) 0.3s;
}

.form-submit:hover {
  background-color: var(--primary-50);
}

.form-footer {
  margin-top: 2rem;
  color: var(--text)
}


@media screen and (min-width: 40rem) {

  .form-wrapper {
    max-width: 50ch;
  }

  .form-row {
    display: flex;
  }

  .form-row--inline {
    display: inline-flex;
  }

  .form-row>.form-group {
    margin-right: .5rem;
    margin-left: 0.5rem;
  }

  .form-row>.form-group:first-child {
    margin-left: unset;
  }

  .form-row>.form-group:last-child {
    margin-right: unset;
  }
}

/*
  Utility
*/
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip-path: inset(50%);
  border: 0;
  white-space: nowrap;
  visibility: hidden;
}


</style>

<body>
    <main>
        <section class="form-section">
            <div class="form-wrapper">
                <h1 class="title">Sign up</h1>
                <form class="form" action="" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label>
                                <span class="sr-only">First Name</span>
                                <input type="text" placeholder="First Name" class="form-input" name="first_name" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="sr-only">Last Name</span>
                                <input id="last-name" type="text" placeholder="Last Name" class="form-input" name="last_name" required>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            <span class="sr-only">Email address</span>
                            <input type="email" placeholder="Email" class="form-input" name="email" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <span class="sr-only">Password</span>
                            <input type="password" placeholder="Password" class="form-input" name="password" required>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="form-submit">
                    </div>

                    <footer class="form-footer">
                        <div>
                            <a href="#" class="form-link">Forgot password?</a>
                        </div>
                        <div>
                            Already have an account?
                            <a href="login.php" class="form-link">Log in</a>
                        </div>
                    </footer>
                </form>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $conn = mysqli_connect("localhost", "root", "", "oscd") or die("Unable to connect");

                        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
                        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $password = mysqli_real_escape_string($conn, $_POST['password']);

                        $sql = "INSERT INTO user_login (first_name, last_name, email, password)
                                VALUES ('$first_name', '$last_name', '$email', '$password')";

                        if ($conn->query($sql) === TRUE) {
                            echo "<script>alert('Registration successful.'); window.location.href='login.php';</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();
                    }
                ?>
            </div>
        </section>
    </main>
</body>
</html>