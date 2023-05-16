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
                                <h6 class="card-title">Color</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div id="alpaca-color"></div>
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
            "color": "Favorite color",
            "colorSelect": "The selected color is :",
            "colorHelper": "Choose your favorite color",
            "colorSelected": "The selected color is : ",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "color": "প্রিয় রঙ :",
            "colorSelect": "নির্বাচিত রং হল",
            "colorHelper": "আপনার পছন্দের রঙ চয়ন করুন",
            "colorSelected": "নির্বাচিত রং হল : ",
        }
        let activeLang = lang.bn

        $('#alpaca-color').alpaca({

            "data": "#0077ff",
            "schema": {
                "type": "string"
            },
            "options": {
                "type": "colorpicker",
                "label": activeLang.color,
                "name": "color",
                "size": 30,
                "helper": activeLang.colorHelper,
            },
            "postRender": function(control) {
                var showColorFn = function() {
                    $("#color1").remove();
                    $(control.getFieldEl()).after("<div id='color1'>" +
                        activeLang.colorSelected + control.getValue() + "</div>");
                };
                control.on("change", function() {
                    showColorFn();
                });
                showColorFn();
            }
        });
    </script>
</body>