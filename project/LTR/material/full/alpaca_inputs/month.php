
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
                                <h6 class="card-title">Month</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-month"></div>
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
            "month": "Month",
            "monthLabel": "Enter Month",
            "monthHelper": "Please enter month",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "month": "মাস :",
            "monthLabel": "মাস লিখুন",
            "monthHelper": "অনুগ্রহ করে মাস লিখুন",
        }
        let activeLang = lang.en

        $('#alpaca-month').alpaca({
            schema: {
                "type": "string",
                "format": "month",
                "title": activeLang.month,
                "required": true
            },
            options: {
                "type": "text",
                "name": "month",
                "placeholder": activeLang.monthLabel,
                "helper": activeLang.monthHelper,
                "maskString": "9999-99"
            }
        });
    </script>
</body>