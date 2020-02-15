	    <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-4 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center m-auto">
                                    <!-- LOGO -->
                                    <a href="<?php echo BASE_URL ?>" class="logo text-center">
                                        <span class="logo-lg">
                                            <span class="logo-lg-text-dark"><span class="text-lowercase">e</span><span data-tag="pandangan"></span> <i class="dripicons-message"></i></span>
                                        </span>
                                        <span class="logo-sm">
                                            <span class="logo-sm-text-dark"><i class="dripicons-message"></i></span>
                                        </span>
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                                        <style type="text/css">.fill{fill:#f1556c;}</style>
                                        <path class="fill" d="M16.871 4.312c-.282-.764-1.01-1.312-1.871-1.312-1.298 0-2.313 1.244-1.904 2.582 1.111-.395 2.346-1.103 3.775-1.27zm-3.871 8.688c0-.552-.447-1-1-1s-1 .448-1 1 .447 1 1 1 1-.448 1-1zm5.318 4.873c1.463-.311 2.471-1.49 2.146-3.227 1.399 1.517-.155 3.949-2.146 3.227zm-14.001 0c1.463-.311 2.471-1.49 2.146-3.227 1.399 1.517-.156 3.949-2.146 3.227zm4.683-14.873c-.861 0-1.589.548-1.871 1.312 1.429.168 2.664.875 3.775 1.27.409-1.338-.606-2.582-1.904-2.582zm1.134 5.494c1.208.396 2.517.398 3.731 0 2.615-.854 3.515-1.986 4.452-.331.392.691 1.332 2.337 1.665 2.934-2.854-.575-5.572 1.416-5.94 4.254-1.233-.62-2.794-.647-4.084 0-.369-2.839-3.086-4.829-5.941-4.254.414-.738 1.183-2.081 1.665-2.933.936-1.655 1.834-.526 4.452.33zm7.171-3.175c-1.393 0-2.86.881-4.062 1.274-.812.266-1.685.263-2.486 0-1.201-.393-2.669-1.274-4.062-1.274-.998 0-1.958.452-2.754 1.859-2.406 4.255-3.941 6.687-3.941 8.822 0 2.761 2.238 5 5 5 4.039 0 4.156-4.123 7-4.123s2.961 4.123 7 4.123c2.762 0 5-2.239 5-5 0-2.135-1.535-4.567-3.941-8.821-.797-1.408-1.756-1.86-2.754-1.86zm1.695 13.681c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm-14 0c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3z"/>
                                    </svg>
                                </div>

                                <!-- title-->
                                <p class="text-muted mb-4" data-tag="recover-info"></p>

                                <form method="post" action="<?php echo BASE_URL ?>auth/process_recover">

                                    <div class="form-group mb-3">
                                        <label for="username" data-tag="username"></label>
                                        <input class="form-control" name="username" type="email" required="">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit" name="submit" data-tag="recover"></button>
                                    </div>
                                    <input type="hidden" name="redirect" id="redirect">
                                    <input type="hidden" name="token" value="<?php echo $token ?>">
                                    <input type="hidden" name="expiry" value="<?php echo $expiry ?>">
                                </form>
                                <p class="text-center mt-3"><span data-tag="account-exist"></span> <a href="<?php echo BASE_URL ?>auth" class="ml-1" data-tag="login"></a></p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <form action="<?php echo BASE_URL ?>language/setLocale" method="post">
                                    <select name="language">
                                        <option value="en"<?php if( $_COOKIE["language"] == "en" ) { echo " selected"; } ?>>English</option>
                                        <option value="my"<?php if( $_COOKIE["language"] == "my" ) { echo " selected"; } ?>>Bahasa Melayu</option>
                                    </select>
                                    <input type="submit" value="Select Language" class="btn btn-success btn-xs">
                                </form>
                            </div> <!-- end col -->
                        </div>

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->