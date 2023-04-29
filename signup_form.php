<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showPass() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <title>signup form</title>
</head>

<body>
    <section class="vh-100" style="background-color: hsl(219, 98%, 62%);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form id="signup-form" class="form" action="signup.php" method="POST">

                                    <h3 class="mb-5">Sign up</h3>
                                    <!-- Display this error message if the username is already taken -->
                                    <?php if(isset($_GET["serr1"])): ?>
                                        <div class="alert alert-danger" role="alert">Username is already taken!</div>
                                    <?php endif; ?>

                                    <!-- Display this error message if the email is already registered -->
                                    <?php if(isset($_GET["serr2"])): ?>
                                        <div class="alert alert-danger" role="alert">Email is already registered!</div>
                                    <?php endif; ?>

                                    <div class="form-floating mb-4">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Name" required/>
                                        <label class="form-label" for="name">Name</label>
                                    </div>


                                    <div class="form-floating mb-4">
                                        <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username"  required/>
                                        <label class="form-label" for="username">Username</label>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" required/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-start mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" onclick="showPass()" />
                                        <label class="form-check-label" for="form1Example3"> &nbsp; Show password
                                        </label>
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-outline-primary btn-medium w-100 rounded-5 text-uppercase" type="submit">Sign up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
