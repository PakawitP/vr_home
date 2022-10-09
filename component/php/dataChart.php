<!-- reuse Chart pie and bar -->
<?php
include '../component/php/manuTable.php';
// $value = ['Code', 'SNo', 'Cap.date', 'Asset description', 'Cost Center', 'Location', 'Quantity','Serial number', 'Last Update', 'Status', 'Option']
 $value = ['Class','Code', 'SNo', 'Cap.date', 'Asset description','Invent. no','Quantity','Physical Count','Diff','Cost Center', 'Location', 'Location Description','Room', 'Status', 'Note','Date of Physical Count','Option']
?>

<div class="row d-none" id="chart_div">
    <div class="col-12 text-center">
        <div class="card">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-bar-tab" data-bs-toggle="tab" data-bs-target="#nav-bar" type="button" role="tab" aria-controls="nav-bar" aria-selected="true" href="#nav-bar">
                        Bar Chart
                    </button>
                    <button class="nav-link" id="nav-pie-tab" data-bs-toggle="tab" data-bs-target="#nav-pie" type="button" role="tab" aria-controls="nav-pie" aria-selected="false" href="#nav-pie">
                        Pie Chart
                    </button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-bar" role="tabpanel" aria-labelledby="nav-bar-tab">
                    <div class="card-header">
                        <h5>Assessment Results ( quantity )</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="card-body col-11">
                            <div class="d-flex justify-content-center">
                                <canvas id="barChart" name="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-pie" role="tabpanel" aria-labelledby="nav-pie-tab">
                    <div class="card-header">
                        <h5>Assessment Results ( percentage )</h5>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="card-body col-11">
                            <div class="d-flex justify-content-center">
                                <canvas id="pieChart" name='pieChart'></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>