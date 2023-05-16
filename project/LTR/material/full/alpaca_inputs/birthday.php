
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
                                <h6 class="card-title">Birthday</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-birthday"></div>
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
            "birthdate": "Birthdate",
            "birthdateLabel": "MM/DD/YYYY",
            "birthdateHelper": "Enter your birthday date",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "Birthdate": "আপনার জন্মদিনের তারিখ লিখুন",
            "birthdate": "জন্ম তারিখ :",
            "birthdateLabel": "MM/DD/YYYY",
            "birthdateHelper": "আপনার জন্মদিনের তারিখ লিখুন",
        }
        let activeLang = lang.en

        $('#alpaca-birthday').alpaca({
            schema: {
                "type": "string",
                "format": "date",
                "title": "Birthdate",
                "required": true
            },
            options: {
                "type": "text",
                "label": activeLang.birthdate,
                "name": "birthday",
                "picker": {
                    "format": "MM/DD/YYYY"
                },
                "placeholder": activeLang.birthdateLabel,
                "helper": activeLang.birthdateHelper,
                "maskString": "99/99/9999"
            }
        });
    </script>
</body>