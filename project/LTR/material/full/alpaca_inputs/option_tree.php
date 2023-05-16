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
                                <h6 class="card-title">Option Tree</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-optionTree"></div>
                            </div>
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
            "optionTree": "What number would like for your sports jersey?",
            "optionTreeButton": "Submit",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "optionTree": "আপনার স্পোর্টস জার্সির জন্য কোন নম্বরটি চাই?",
            "optionTreeButton": "জমা",
        }
        let activeLang = lang.bn

        $('#alpaca-optionTree').alpaca({
            schema: {
                "type": "number",
                "title": activeLang.optionTree
            },
            options: {
                "type": "optiontree",
                "tree": {
                    "selectors": {
                        "sport": {
                            "schema": {
                                "type": "string"
                            },
                            "options": {
                                "type": "select",
                                "noneLabel": "Pick a Sport..."
                            }
                        },
                        "team": {
                            "schema": {
                                "type": "string"
                            },
                            "options": {
                                "type": "select",
                                "noneLabel": "Pick a Team..."
                            }
                        },
                        "player": {
                            "schema": {
                                "type": "string"
                            },
                            "options": {
                                "type": "select",
                                "noneLabel": "Pick a Player..."
                            }
                        }
                    },
                    "order": ["sport", "team", "player"],
                    "data": [{
                        "value": 23,
                        "attributes": {
                            "sport": "Basketball",
                            "team": "Chicago Bulls",
                            "player": "Michael Jordan"
                        }
                    }, {
                        "value": 33,
                        "attributes": {
                            "sport": "Basketball",
                            "team": "Chicago Bulls",
                            "player": "Scotty Pippen"
                        }
                    }, {
                        "value": 4,
                        "attributes": {
                            "sport": "Football",
                            "team": "Green Bay Packers",
                            "player": "Brett Favre"
                        }
                    }, {
                        "value": 19,
                        "attributes": {
                            "sport": "Baseball",
                            "team": "Milwaukee Brewers",
                            "player": "Robin Yount"
                        }
                    }, {
                        "value": 99,
                        "attributes": {
                            "sport": "Hockey",
                            "player": "Wayne Gretzky"
                        }
                    }],
                    "horizontal": true
                },
                "form": {
                    "buttons": {
                        "submit": {
                            "click": function() {
                                alert("Value is: " + this.getValue());
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>