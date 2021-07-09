<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="row col-md-12 pt-2 pl-4">
                            <span class="pl-2">販売管理システム</span>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <h1 class="mb-0 pt-2 pl-5">契約承認申請一覧</h1>
                            </div>
                            <div class="col-md-6 text-right pt-4 pr-5">
                                <span>[<?= session()->get("userId") ?>]：[<?= session()->get("userName") ?>]</span>
                            </div>
                        </div>
                    </div>
                    <div class="underline mt-2"></div>

                    <div class="gap-2 mx-auto " style="max-width: 950px !important;">
                        <div class="card mt-5 text-left">
                            <div class="card-header">
                                <h3 class="card-title text-center">
                                    【検索条件】
                                </h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>契約状況 ContractStatus</label>
                                                <select name="contractStatusSearch" id="contractStatusSearch" class="form-control">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="form-group " >
                                                <label>更新日<br>From Update date</label>
                                                <input type="text" class="form-control " name="fromUpdateDateSearch" id="fromUpdateDateSearch">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group " >
                                                <label>契約ID Contract ID</label>
                                                <input type="text" class="form-control " name="contractIdSearch" id="contractIdSearch">
                                            </div>
                                            <div class="form-group " >
                                                <label>更新日<br>To Update date</label>
                                                <input type="text" class="form-control " name="toUpdateDateSearch" id="toUpdateDateSearch">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group " >
                                                <label>店舗ID Shop Id</label>
                                                <input type="text" class="form-control " name="shopIdSearch" id="shopIdSearch">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="contractSearchBtn" class="btn btn-primary text-center k1Btn k1Btn2 mr-3">検索</button>
                                    <button type="button" id="clearSearchFields" class="btn btn-primary text-center k1Btn k1Btn2">クリア</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="gap-2 mx-auto text-center" style="max-width: 950px;">
                        <div class="card mt-5 text-left">
                            <div class="card-header">
                                <h3 class="card-title text-center">【契約一覧】</h3>
                            </div>
                            <div class="card-body">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-center productTable productInfoTable" style="width: 200%; height: auto;">
                                        <thead class="k1TableTitleBG">
                                            <tr>
                                                <th>契約ID<br>Contract ID</th>
                                                <th>契約更新日<br>Contract Update Date</th>
                                                <th>契約状況<br>ContractStatus</th>
                                                <th>サービス<br>Service</th>
                                                <th>店舗名<br>Shop Name</th>
                                                <th>商品名<br>Product Name</th>
                                                <th>金額<br>Amount</th>
                                                <th>契約日<br>Contract Date</th>
                                                <th>公開開始日<br>Strat Date</th>
                                                <th>公開終了日<br>End Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href='/contract-details'>契約ID</a></td>
                                                <td>2021/04/06</td>
                                                <td>内部確認02</td>
                                                <td>ぴゅあらば</td>
                                                <td>契約店舗名</td>
                                                <td>商品名</td>
                                                <td>3654135641</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                            </tr>
                                            <tr>
                                                <td><a href='/contract-details'>契約ID</a></td>
                                                <td>2021/04/06</td>
                                                <td>内部確認02</td>
                                                <td>ぴゅあらば</td>
                                                <td>契約店舗名</td>
                                                <td>商品名</td>
                                                <td>3654135641</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                            </tr>
                                            <tr>
                                                <td><a href='/contract-details'>契約ID</a></td>
                                                <td>2021/04/06</td>
                                                <td>内部確認02</td>
                                                <td>ぴゅあらば</td>
                                                <td>契約店舗名</td>
                                                <td>商品名</td>
                                                <td>3654135641</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                            </tr>
                                            <tr>
                                                <td><a href='/contract-details'>契約ID</a></td>
                                                <td>2021/04/06</td>
                                                <td>内部確認02</td>
                                                <td>ぴゅあらば</td>
                                                <td>契約店舗名</td>
                                                <td>商品名</td>
                                                <td>3654135641</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                                <td>2021/04/06</td>
                                            </tr>
                                            <?php
/*                                                if(isset($contracts) && count($contracts) > 0){
                                                    foreach ($contracts as $contract) {
                                                        $contractId = $contract->getId();
                                                        $contractDate = date("Y",strtotime($contract->getUpdateDate()))."年".date("m",strtotime($contract->getUpdateDate()))."月".date("d",strtotime($contract->getUpdateDate()))."日";
                                                        $products = $contract->getContractProduct();

                                                        foreach($products as $product){
                                                            $shop = $product["shopDetails"];
                                                            $startDate = date("Y",strtotime($product["startDate"]))."年".date("m",strtotime($product["startDate"]))."月".date("d",strtotime($product["startDate"]))."日";
                                                            $endDate = date("Y",strtotime($product["endDate"]))."年".date("m",strtotime($product["endDate"]))."月".date("d",strtotime($product["endDate"]))."日";
                                                            */?><!--
                                                                <tr>
                                                                    <td><a href='/contract-details/<?/*= $contractId */?>'><?/*= $contractId */?></a></td>
                                                                    <td><?/*= $product["serviceType"] */?></td>
                                                                    <td><?/*= $shop->getName() */?></td>
                                                                    <td><?/*= $shop->getAddress01() */?></td>
                                                                    <td><?/*= $shop->getTelNo() */?></td>
                                                                    <td><?/*= $shop->getMailAddress() */?></td>
                                                                    <td><?/*= $product["shopBusiness"] */?></td>
                                                                    <td><?/*= $product["shopDaihyoName"] */?></td>
                                                                    <td><?/*= $contractDate */?></td>
                                                                    <td><?/*= $startDate */?></td>
                                                                    <td><?/*= $endDate */?></td>
                                                                </tr>
                                                            --><?php
/*                                                        }
                                                    }
                                                }
                                                else{
                                                    echo "<tr><td>データがありません！</td></tr>";
                                                }
                                            */?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-2 mx-auto mt-3 mb-4 " style="max-width: 950px !important;">
                        <div class="col-md-6">
                            <a class="btn btn-primary pl-3 pr-3 k1Btn k1Btn2" href="/home">メニュー</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <small>アクセス日時：<?= date("Y/m/d")?>	</small>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script type="text/javascript" src="../../js/contractSearch.js"></script>
        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="../../plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="../../plugins/moment/moment.min.js"></script>
        <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../dist/js/demo.js"></script>
        <!-- Page specific script -->
    </body>
</html>
