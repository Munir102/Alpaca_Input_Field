
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
                                <h6 class="card-title">Email</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <div id="alpaca-email"></div>

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
            "emailName": "Email",
            "emailLabel": "Enter email address",
            "emailHelper": "Example: pondit@gmail.com",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "emailName": "ইমেইল :",
            "emailLabel": "ইমেইল অ্যাড্রেস দিন",
            "emailHelper": "উদাহরণ: pondit@gmail.com",
        }
        let activeLang = lang.bn

        $('#alpaca-email').alpaca({

            schema: {
                "format": 'email'
            },
            options: {
                "label": activeLang.emailName,
                "name": "email",
                "size": 30,
                "helper": activeLang.emailHelper,
                "placeholder": activeLang.emailLabel,
                "focus": false,
            }
        });
    </script>
</body>