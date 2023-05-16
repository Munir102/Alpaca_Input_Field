
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
                                <h6 class="card-title">Chooser</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-chooser"></div>
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
            "chooser": "Choose your favourites color:",
            "chooserLabel": "View Json",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "chooser": "আপনার পছন্দের রঙ চয়ন করুন :",
            "chooserLabel": "জেসন দেখুন",
        }
        let activeLang = lang.en

        $('#alpaca-chooser').alpaca({
            schema: {
                "type": "string",
                "title": activeLang.chooser,
                "enum": ["red", "orange", "yellow", "green", "blue", "indigo", "violet"]
            },
            options: {
                "type": "chooser",
                "optionLabels": ["Red", "Orange", "Yellow", "Green", "Blue", "Indigo", "Violet"],
                "form": {
                    "buttons": {
                        "view": {
                            "label": activeLang.chooserLabel,
                            "click": function() {
                                alert(JSON.stringify(this.getValue(), null, "  "));
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>