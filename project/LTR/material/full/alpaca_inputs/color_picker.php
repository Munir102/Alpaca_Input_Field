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
                                <h6 class="card-title">Color Picker</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-colorPicker"></div>
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
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
        }
        let activeLang = lang.en

        $('#alpaca-colorPicker').alpaca({
            schema: {
                "type": "object",
                "properties": {
                    "color": {
                        "type": "string",
                        "title": activeLang.title,
                        "default": "#007fff"
                    }
                }
            },
            options: {
                "fields": {
                    "color": {
                        "type": "text",
                        "label": "Choose a color",
                        "helper": "This field lets you pick a color",
                        "size": 20,
                        "attrs": {
                            "class": "color-picker"
                        },
                        "postRender": function(control) {
                            control.spectrum({
                                showPalette: true,
                                preferredFormat: "hex",
                                color: control.getValue(),
                                palette: [
                                    ["#007fff", "#007f3f", "#007f7f", "#7f007f"],
                                    ["#7f0000", "#7f7f00", "#007f7f", "#00007f"]
                                ]
                            });
                        }
                    }
                }
            }
        });
    </script>
</body>