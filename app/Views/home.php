<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="bg-light-silver">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="col-md-12 row">
                    <div class="col-md-6 pt-2">
                        <span>販売管理システム</span>
                        <span><h1 class="mb-0 pt-2">メニュー</h1></span>
                    </div>
                    <div class="col-md-6 text-right pt-2">
                        <button class="fc-button k1Btn1 k1Btn2 mb-3"><a class="k1Btn2" href="/logout">ログアウト</a></button><br>
                        <span class="mt-5">	[<?= session()->get("userId")?>]：[<?= session()->get("userName")?>]</span>
                    </div>
                </div>
                <div class="underline mt-2"></div>
                <div class="row">
                    <div class="menuTable mt-5 mb-5">
                        <div class="card mb-0">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr class="bgWheat">
                                            <th>契約関連 Contract Related</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="/contract-approval-list">契約承認申請一覧<br> Contract approval appli. list</a></td>
                                            <td>Web契約で成約に至った契約を一覧表示します。<br>また、一覧から成約した契約の一括承認を行います。</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/contract-details">契約承認申請詳細<br>Contract appro. appli. detail</a></td>
                                            <td>１契約の内容を詳細表示します。<br>また、当該契約の承認を行います。</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr class="bgWheat">
                                            <th>請求関連 Billing Related</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">請求先一覧<br>Billing list</a></td>
                                            <td>請求先の一覧表示を行います。</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">請求先詳細<br>Billing detail</a></td>
                                            <td>請求先の詳細表示を行います</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">請求データ一覧<br>Billing data list</a></td>
                                            <td>当月及び過去の請求データを一覧表示します。</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">請求データ詳細<br>Billing data detail</a></td>
                                            <td>当月及び過去の請求データを詳細表示します。</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">請求データ編集<br>Billing data edit</a></td>
                                            <td>当月の請求データを編集します。</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr class="bgWheat">
                                            <th>商品管理 Product Management</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">商品一覧<br>Product List</a></td>
                                            <td>商品を一覧表示します。</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">商品詳細<br>Product Detail</a></td>
                                            <td>商品を詳細表示します。</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">商品新規登録<br>Product new registration</a></td>
                                            <td>商品の新規登録を行います。</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="text-right pr-1">
                            <small>アクセス日時：<?= date("Y/m/d")?>	</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
    </body>
</html>
