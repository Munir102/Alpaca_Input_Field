
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
                                <h6 class="card-title">Radio Buttons</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-radioButton"></div>
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
            "radiobuttonLabel": "Radio Button :",
            "radiobuttonHelper": "Select any one",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "radiobuttonLabel": "রেডিও বাটন :",
            "radiobuttonHelper": "যেকোনো একটি নির্বাচন করুন",
        }
        let activeLang = lang.en

        $('#alpaca-radioButton').alpaca({
            schema: {

                "type": "array",
                "items": {
                    "type": "string",
                    "title": "Radio",
                    "enum": ["Male", "Female", "Other"],
                    "default": "None"
                }
            },
            options: {
                "type": "radio",
                "name": "radioButton",
                "label": activeLang.radiobuttonLabel,
                "helper": activeLang.radiobuttonHelper,
                "required": true
            }
        });
    </script>
</body>