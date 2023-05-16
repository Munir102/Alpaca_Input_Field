
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
                                <h6 class="card-title">Lower case</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-lowerCase"></div>
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
            "lowerCase": "Lower Case :",
            "lowerCaseHelper": "Enter text with upper case",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "lowerCase": "ছোটো হাতের অক্ষর :",
            "lowerCaseHelper": "বড় অক্ষর সহ পাঠ্য লিখুন",
        }
        let activeLang = lang.en

        $('#alpaca-lowerCase').alpaca({
            schema: {
                "format": "lowercase"
            },
            options: {
                "label": activeLang.lowerCase,
                "helper": activeLang.lowerCaseHelper,
                "form": {
                    "buttons": {
                        "view": {
                            "label": activeLang.buttonLabel,
                            "click": function() {
                                // alert(JSON.toLowerCase()(this.getValue(), null, "  "));
                                alert(JSON.parse(JSON.stringify(this.getValue(), null, "  ").toLowerCase()));
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>