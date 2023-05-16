
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
                                <h6 class="card-title">Phone Number</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-phone"></div>
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
            "phoneName": "Phone :",
            "phoneLabel": "Enter phone number",
            "phoneHelper": "Example: 1766256006",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "phoneName": "ফোন :",
            "phoneLabel": "ফোন নম্বর লিখুন",
            "phoneHelper": "উদাহরণ: 1766256006",
        }
        let activeLang = lang.en

        $('#alpaca-phone').alpaca({
            schema: {
                "format": "phone",
                "title": activeLang.phoneName,
                "required": true,
            },
            options: {
                "helper": activeLang.phoneHelper,
                "name": "phone",
                "placeholder": activeLang.phoneLabel,
                "disallowEmptySpaces": true,
                "maskString": "999-999-9999",
            }
        });
    </script>
</body>