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
                                <h6 class="card-title">Array</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-array"></div>
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
            "array": "Ice Cream :",
            "arrayHelper": "Favorite Ice Cream",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "array": "আইসক্রিম :",
            "arrayHelper": "প্রিয় আইসক্রিম",
        }
        let activeLang = lang.en

        $('#alpaca-array').alpaca({
            schema: {
                "type": "array",
                "items": {
                    "title": activeLang.array,
                    "type": "string",
                    "minLength": 3,
                    "maxLength": 20
                },
                "minItems": 2,
                "maxItems": 5
            },
            options: {
                "label": activeLang.array,
                "helper": activeLang.arrayHelper,
                "toolbarSticky": true,
                "fields": {
                    "item": {
                        "size": 20
                    }
                },
                "hideToolbarWithChildren": false,
                "actionbar": {
                    "actions": [{
                        "action": "add",
                        "enabled": false
                    }]
                }
            }
        });
    </script>
</body>