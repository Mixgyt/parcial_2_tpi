<?php

    use lib\Route;
    use app\controller\PrincipalController;

    Route::get("/",[PrincipalController::class, 'index']);
    Route::post("/calcular",[PrincipalController::class,'calcular']);

    Route::dispatch();

?>