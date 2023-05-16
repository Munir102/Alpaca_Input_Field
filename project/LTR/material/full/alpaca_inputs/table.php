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
                                <h6 class="card-title">Table</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-table"></div>
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
            "table": "Table :",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "table": "টেবিল :",
        }
        let activeLang = lang.bn

        $('#alpaca-table').alpaca({
            data: [{
                "key": "key1",
                "title": "title1",
                "amount": 2.53,
                "rating": "good"
            }, {
                "key": "key2",
                "title": "title2",
                "amount": 1.80,
                "rating": "poor"
            }, {
                "key": "key3",
                "title": "title3",
                "amount": 5.60,
                "rating": "excellent"
            }],
            schema: {
                "type": "array",
                "title": activeLang.table,
                "items": {
                    "type": "object",
                    "properties": {
                        "key": {
                            "type": "string",
                            "title": "Key"
                        },
                        "title": {
                            "type": "string",
                            "title": "Title"
                        },
                        "amount": {
                            "type": "number",
                            "title": "Amount"
                        },
                        "approved": {
                            "type": "boolean",
                            "title": "Approved"
                        },
                        "rating": {
                            "type": "string",
                            "enum": ["poor", "good", "excellent"],
                            "title": "Rating"
                        }
                    }
                }
            },
            options: {
                "type": "table",
                "items": {
                    "fields": {
                        "rating": {
                            "type": "select"
                        }
                    }
                },
                "form": {
                    "buttons": {
                        "submit": {
                            "click": function() {
                                var value = this.getValue();
                                alert(JSON.stringify(value, null, "  "));
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>