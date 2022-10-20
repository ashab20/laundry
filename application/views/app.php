<?php
if (!isset($_SESSION['ud'])) {
    redirect('/');
}

?>


<?php $this->load->view('include/header') ?>
<?php $this->load->view('include/sidebar')  ?> 
<?php $this->load->view('include/navbar') ?>
<?php $this->load->view($page, $data = null, $service = null) ?>
<?php $this->load->view('include/footer') ?>