
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
                                <h6 class="card-title">Number</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">

                                <div id="alpaca-number"></div>

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
            "buttonLabel": "View Json",
            "number": "Number :",
            "numberLabel": "enter number",
            "numberHelper": "Please enter your house no.",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "number": "নাম্বার :",
            "numberLebel": "নাম্বার প্রবেশ করুন",
            "numberHelper": "অনুগ্রহ করে আপনার বাড়ির নম্বরে প্রবেশ করুন",
        }
        let activeLang = lang.bn

        $('#alpaca-number').alpaca({

            schema: {
                "type": 'number',
                "minimum": 1,
                "maximum": 1000

            },
            options: {
                "label": activeLang.number,
                "name": "number",
                "size": 30,
                "helper": activeLang.numberHelper,
                "placeholder": activeLang.numberLabel,
                "focus": false,
            }
        });
    </script>
</body>