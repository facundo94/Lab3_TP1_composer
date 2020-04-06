<?php
    include_once './entidades/service.php';
    include_once './entidades/regionService.php';
    include_once './entidades/capitalService.php';

    $capService = new capitalService();
    echo "Capital: hanoi _______________________________________________________";
    echo json_encode($capService->get("hanoi"));

    $regService = new regionService();
    echo "Region: asia _______________________________________________________";
    echo json_encode($regService->get("asia"));

    echo "Call count: " . service::getCallCount();
?>