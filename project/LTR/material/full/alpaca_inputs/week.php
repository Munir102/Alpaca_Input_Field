
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
                                <h6 class="card-title">Week</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-week"></div>
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
            "week": "Week",
            "weekLabel": "Enter today's week",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "week": "সপ্তাহ :",
            "weekLabel": "আজকের সপ্তাহ প্রবেশ করুন",
        }
        let activeLang = lang.en

        $('#alpaca-week').alpaca({
            schema: {
                "type": "string",
                "format": "week",
                "title": activeLang.week,
                "required": true
            },
            options: {
                "type": "text",
                "name": "week",
                "placeholder": activeLang.weekLabel,
                "maskString": "9999-W99"
            }

        });
    </script>
</body>