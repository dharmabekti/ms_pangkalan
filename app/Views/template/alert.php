<!-- Alert -->
<?php
$type = "";
$data_alert = "";
if (session()->getFlashdata('success')) {
    $type = "alert-success";
    $data_alert = session()->getFlashdata('success');
}
if (session()->getFlashdata('warning')) {
    $type = "alert-warning";
    $data_alert = session()->getFlashdata('warning');
}
if (session()->getFlashdata('error')) {
    $type = "alert-danger";
    $data_alert = session()->getFlashdata('error');
}

?>

<?php if ($type != ""): ?>
<div class="alert <?=$type?>" role="alert">
    <?=$data_alert?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif;?>