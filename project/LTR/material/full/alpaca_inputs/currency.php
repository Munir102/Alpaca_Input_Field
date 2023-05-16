
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
                                <h6 class="card-title">Currency</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-currency"></div>
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
            "currency": "Currency :",
            "currencyLabel": "Enter Currency",
            "currencyHelper": "This field accepts currency values only",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "currency": "মুদ্রা :",
            "currencyLabel": "মুদ্রা লিখুন",
            "currencyHelper": "এই ক্ষেত্রটি শুধুমাত্র মুদ্রার মান গ্রহণ করে",
        }
        let activeLang = lang.en

        $('#alpaca-currency').alpaca({
            schema: {
                "type": "number",
                "title": activeLang.currency,
                "format": "currency"
            },
            options: {
                "type": "text",
                "placeholder": activeLang.currencyLabel,
                "helper": activeLang.currencyHelper,
                "numericEntry": true,
                "numericFormat": {
                    "pattern": "€ #,##0.00",
                    "culture": "en-US"
                },
                "form": {
                    "buttons": {
                        "view": {
                            "label": activeLang.buttonLabel,
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