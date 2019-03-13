<?php
    function renderAside() {
        $manage = isset($_GET['manage']) ? $_GET['manage'] : '';
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        if ($action) {
            include('modules/' . $manage . '/' . $action . '-' . $manage . '.php');
        }
        else {
            include('modules/' . $manage . '/' . 'create' . '-' . $manage . '.php');
        }
    }
    
    function renderAllData() {
        $manage = isset($_GET['manage']) ? $_GET['manage'] : '';
        include('modules/' . $manage . '/' . 'read' . '-' . $manage . '.php');
    }