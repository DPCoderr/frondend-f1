    <?php require '../partials/head.php'; ?>

    <title>Edit Profile</title>

    <?php require '../partials/nav.php'; ?>

    <main>
        <!-- Edit profile -->
        <section id="edit-profile" class="my-5">
                <div class="container-lg">
                    <!-- Row with 2 columns (aside-nav and their content-form) -->
                    <div class="row justify-content-around pt-5">
                        <!-- aside-nav -->
                        <div class="col-4 col-sm-3 col-md-2" style="border-right: 1px solid white;">
                            <div id="aside-nav" class="d-flex align-items-start">
                                <ul class="navbar-nav column-gap-3">
                                    <li class="nav-item">
                                        <a href="edit-profile.php" class="nav-link btn btn-f1red text-white">Edit Profile</a>      
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit-password.php" class="nav-link btn btn-f1red text-white">Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit-admin.php" class="nav-link btn btn-f1red text-white">Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit-delete-profile.php" class="nav-link btn btn-f1red text-white">Delete Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- backend: form -->
                        <!-- content-form -->
                        <div class="col-6 col-md-5">
                            <form action="">                           
                                <!-- Profile picture input -->
                                <div class="mb-4 text-center">
                                    <!-- Image -->
                                    <img src="../assets/Default_pfp400x400.svg.png" id="default-pfp" class="rounded-circle img-fluid border border-2 mb-4" alt="profile picture">
                                    <!-- File input button -->
                                    <div class="input-group justify-content-center">
                                        <label for="pfp-file" class="btn px-3 border text-white">
                                            Edit
                                            <input class="form-control" type="file" id="pfp-file" style="display: none;">
                                        </label>
                                    </div>
                                </div>
    
                                <!-- Username input -->
                                <label for="username" class="form-label text-white">Username:</label>
                                <div class="mb-4 input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                    <input type="text" class="form-control" id="username" value="Test1">
                                </div>
    
                                <!-- Email input -->
                                <label for="email" class="form-label text-white">Email address:</label>
                                <div class="mb-4 input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope-fill"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" value="test123@gmail.com">                        
                                </div>
                                        
                                <!-- About input -->
                                <label for="about" class="form-label text-white">About:</label>
                                <div class="input-group mb-5">                              
                                    <textarea id="about" class="form-control" style="height: 140px;" value="">I love f1!</textarea>    
                                </div>
    
                                <!-- Submit input -->
                                <div class="input-group mb-4">
                                    <input type="submit" class="form-control btn btn-primary py-2 py-sm-3" value="Update Profile">
                                </div>                               
                            </form>
                        </div>
                    </div>   
                </div>
        </section>
    </main>

    <?php require '../partials/footer.php'; ?>


