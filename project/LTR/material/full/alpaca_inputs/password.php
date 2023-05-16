
<!DOCTYPE html>
<html lang="en">

<?php include_once("../partials/head1.php");?>

<body>
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">
            <div class="content">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                        <div class="card-header header-elements-inline bg-info-600">
                                <h6 class="card-title">Password</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-password"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script>
        let lang = {}
        lang.en = {
            "title": "Alpaca Practice Form:",
            "buttonLabel": "View Json",
            "password": "Password",
            "passwordLabel": "Enter your password",
            "passwordHelper": "Example: 12345678/pondit123",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "password": "পাসওয়ার্ড :",
            "passwordLabel": "আপনার পাসওয়ার্ড লিখুন",
            "passwordHelper": "উদাহরণ: 12345678/pondit123",
            
        }
        let activeLang = lang.bn

        $('#alpaca-password').alpaca({

            schema: {
                "format": "password",
                "minLength": 8,
                "maxLength": 64,
                "required": true,
            },
            options: {
                "label": activeLang.password,
                "name": "password",
                "helper": activeLang.passwordHelper,
                "placeholder": activeLang.passwordLabel,
                "focus": false,
            }
        });
    </script>
</body>