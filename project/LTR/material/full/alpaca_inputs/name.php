
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
                                <h6 class="card-title">Name</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-name"></div>
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
            "name": "নাম :",
            "nameLabel": "নাম লিখুন",
            "nameHelper": "সর্বোচ্চ:30 সংখ্যা বা অক্ষর",
        }
        let activeLang = lang.bn

        $('#alpaca-name').alpaca({

            schema: {
                "type": "string",
                "title": activeLang.name,
                "required": true,
                "maxLength": 30
            },
            options: {
                "helper": activeLang.nameHelper,
                "name": "name",
                "placeholder": activeLang.nameLabel,
            }
        });
    </script>
</body>