
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
                                <h6 class="card-title">Search</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-search"></div>
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
            "search": "Search :",
            "searchHelper": "Search your favorite item",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "search": "অনুসন্ধান করুন :",
            "searchHelper": "আপনার প্রিয় আইটেম খুঁজুন",
        }
        let activeLang = lang.en

        $('#alpaca-search').alpaca({
            schema: {
                "type": "string",
                "format": "search",
                "default": ""
            },
            options: {
                "type": "search",
                "name": "search",
                "label": activeLang.search,
                "helper": activeLang.searchHelper,
                "required": true
            }

        });
    </script>
</body>