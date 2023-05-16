
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
                                <h6 class="card-title">Time</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-time"></div>
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
            "time": "time",
            "timeLabel": "enter time",
            "timeHelper": "Enter local time",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "time": "সময় :",
            "timeLabel": "সময় লিখুন",
            "timeHelper": "স্থানীয় সময় লিখুন",
        }
        let activeLang = lang.en

        $('#alpaca-time').alpaca({
            schema: {
                "type": "string",
                "format": "time",
                "title": activeLang.time,
                "required": true
            },
            options: {
                "type": "text",
                "name": "time",
                "placeholder": activeLang.timeLabel,
                "helper": activeLang.timeHelper,
                "maskString": "99:99:99"
            }
        });
    </script>
</body>