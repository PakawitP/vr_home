
<?php
require_once 'header.php';
include '../component/php/manuTable.php';
$value = ['No', 'Name', 'Description', 'CreateDate',  'Link']
?>

<div  style="margin: auto">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MENU</h1>
                </div>
                <div class="col-sm-6">
             
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header p-0 border-bottom-0"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="tbl" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <?php manuTable($value) ?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <?php manuTable($value) ?>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once 'footer.php';
$date = new DateTime();
?>


<script type="module" src="../controller/js/menuLink.js?<?php echo $date->getTimestamp(); ?>"></script>