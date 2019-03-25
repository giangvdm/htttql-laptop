<?php
    if (isset($_GET['action']) && isset($_GET['id'])) {
        if ($_GET['action'] === 'read') {
            header('location:order-detail.php?id='.$_GET['id']);
        }
    }