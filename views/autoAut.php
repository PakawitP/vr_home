<?php
require_once 'header.php';

?>

<style>
    .spinner-border {
        width: 250px;
        height: 250px;
    }

    #loading {
        margin-top: 20px;
    }

    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
<div class="text-center vertical-center">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <h5 id="loading">Loading...</h5>
</div>

<?php
require_once 'footer.php';
$date = new DateTime();
?>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="../controller/js/autoAut.js?<?php echo $date->getTimestamp(); ?>"></script>