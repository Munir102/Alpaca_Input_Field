
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
                                <h6 class="card-title">Checkboxs</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-checkbox"></div>
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
            "checkbox": "Checkbox :",
            "checkboxHelper": "Select multiple options",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "checkbox": "চেকবক্স :",
            "checkboxHelper": "একাধিক নির্বাচন করুন",
        }
        let activeLang = lang.en

        $('#alpaca-checkbox').alpaca({

            schema: {
                "type": "array",
                "items": {
                    "type": "string",
                    "enum": ["Checkbox 1", "Checkbox 2"]
                }
            },
            options: {
                "type": "checkbox",
                "name": "checkbox",
                "label": activeLang.checkbox,
                "helper": activeLang.checkboxHelper,
                "required": true
            }
        });
    </script>
</body>