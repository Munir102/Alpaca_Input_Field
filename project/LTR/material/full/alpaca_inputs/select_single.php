
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
                                <h6 class="card-title">Select Single</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-selectsingle"></div>
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
            "selectSingle": "Select Single :",
            "selectSingleHelper": "Select any one",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "selectSingle": "একটি নির্বাচন করুন :",
            "selectSingleHelper": "যেকোনো একটি নির্বাচন করুন",
        }
        let activeLang = lang.en

        $('#alpaca-selectsingle').alpaca({
            schema: {
                "type": "string",
                "enum": ["Select Single Option 1",
                    "Select Single Option 2",
                    "Select Single Option 3"
                ],
                "default": "Select Single Option 1"
            },
            options: {
                "type": "select",
                "name": "selectsingle",
                "label": activeLang.selectSingle,
                "helper": activeLang.selectSingleHelper,
                "required": true
            }
        });
    </script>
</body>