<?php
    include "./inc/config/01-connection.php";
    include "./inc/config/03-variables.php";
    $pageTitle = $pageComment;
    include "./inc/01-layout.php";
?>
<body>
    <!-- top nav -->
    <?php include "./inc/04-navbar-users.php"; ?>
    <!-- top nav -->

    <div class="pusher">
        <div class="main-content">
            <div class="ui grid stackable padded">
                <div class="column">
                    <div id="aBtn" class="ui primary labeled icon button">
                        <i class="browser icon"></i> Show Modal Dialog
                    </div>
                    <!-- Modal has 3 sections:
                        header
                        content
                        actions
                    -->
                    <div class="ui basic large modal">
                        <i class="close icon"></i>
                        <h2 class="ui image header">
                            <img src="../img/logo-ps.gif" class="image">
                            <div class="content">
                                Comment
                            </div>
                        </h2>
                        <div class="content">
                            <!-- Form tag needs to be used instead of standard div as it supports form reset -->
                            <form class="ui form">
                                <div class="ui piled segment">
                                    <p style="color:black;">Your favorite movies are here. Would you like to write a comment?</p>
                                    <div class="fields">
                                        <div class="ten wide field">
                                            <label>E-mail</label>
                                            <input type="text" name="email">
                                        </div>
                                        <div class="six wide field">
                                            <label>Additional E-mail</label>
                                            <input type="text" name="cc-email">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Comment</label>
                                        <textarea name="comment"></textarea>
                                    </div>
                                    <!-- Below tag is the placeholder/container for the error messages -->
                                    <div class="ui error message"></div>
                                </div>
                            </form>
                        </div>
                        <div class="actions">
                            <div class="two fluid ui inverted buttons">
                                <div class="ui cancel red basic inverted button">
                                    <i class="remove icon"></i> Cancel
                                </div>
                                <div class="ui ok green basic inverted button">
                                    <i class="checkmark icon"></i> Submit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './inc/06-scripts-users.php'; ?>
    <script>
        var aFunction = function() {
            //modal settings
            //Note that if settings is incorrect, the modal may freeze, and won't output any console error or such
            $('.modal').modal({
                detachable: true,
                //By default, if click outside of modal, modal will close
                //Set closable to false to prevent this
                closable: false,
                transition: 'fade up',
                //Callback function for the submit button, which has the class of "ok"
                onApprove: function() {
                    //Submits the semantic ui form
                    //And pass the handling responsibilities to the form handlers, e.g. on form validation success
                    $('.ui.form').submit();
                    //Return false as to not close modal dialog
                    return false;
                },
            });
            $("#aBtn").on("click", function() {
                //Resets form input fields
                $('.ui.form').trigger("reset");
                //Resets form error messages
                $('.ui.form .field.error').removeClass("error");
                $('.ui.form.error').removeClass("error");
                $('.modal').modal('show');
            });
        };
        $(document).ready(aFunction);
        var formValidationRules = {
            fields: {
                email: {
                    identifier: 'email',
                    rules: [{
                            type: 'empty',
                            prompt: 'Please enter your e-mail'
                        },
                        {
                            type: 'regExp',
                            value: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/,
                            prompt: 'Please enter a regular valid e-mail'
                        },
                        {
                            type: 'email',
                            prompt: 'Please enter a valid e-mail'
                        }
                    ]
                },
                ccEmail: {
                    identifier: 'cc-email',
                    //Below line sets it so that it only validates when input is entered, and won't validate on blank input
                    optional: true,
                    rules: [{
                        type: 'email',
                        prompt: 'Please enter a valid second e-mail'
                    }]
                },
                comment: {
                    identifier: 'comment',
                    rules: [{
                            type: 'empty',
                            prompt: 'Please add a comment'
                        },
                        {
                            type: 'maxLength[500]',
                            prompt: 'Please enter at most 500 characters'
                        }
                    ]
                },
            }
        };

        var formSettings = {
            onSuccess: function() {
                //Hides modal on validation success
                alert("Valid Submission, modal will close.");
                $('.modal').modal('hide');
            },
        }

        $('.ui.form')
            .form(
                formValidationRules,
                formSettings
            );
    </script>

</body>

</html>