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
                                <h6 class="card-title">IPv4</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-ipv4"></div>
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
            "ipv4": "IP Address :",
            "ipv4Label": "Enter ip address here",
            "ipv4Helper": "Please enter valid ip address",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "ipv4": "আইপি ঠিকানা :",
            "ipv4Label": "এখানে আইপি ঠিকানা লিখুন",
            "ipv4Helper": "দয়া করে বৈধ আইপি ঠিকানা লিখুন",
        }
        let activeLang = lang.bn

        $('#alpaca-ipv4').alpaca({
            schema: {
                "format": "ip-address",
                "title": activeLang.ipv4,
            },
            options: {
                "placeholder": activeLang.ipv4Label,
                "helper": activeLang.ipv4Helper,
            },
        });
    </script>
</body>