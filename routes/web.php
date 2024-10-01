<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/auth_get", [App\Http\Controllers\AuthController::class, "authGet"]);
Route::get("/new_case_form", [App\Http\Controllers\CasesController::class, "newCaseForm"]);
Route::get("/new_agent_form", [App\Http\Controllers\AgentsController::class, "newAgentForm"]);
Route::get("/insights", [App\Http\Controllers\MainController::class, "insights"]);
Route::get("/cases", [App\Http\Controllers\MainController::class, "cases"]);
Route::get("/agents", [App\Http\Controllers\MainController::class, "agents"]);
Route::get("/compensation", [App\Http\Controllers\MainController::class, "compensation"]);
Route::get("/panel", [App\Http\Controllers\MainController::class, "panel"]);

Route::post("/auth_post", [App\Http\Controllers\AuthController::class, "authPost"]);
Route::post("/auth_out", [App\Http\Controllers\AuthController::class, "authOut"]);
Route::post("/new_case_upload", [App\Http\Controllers\CasesController::class, "newCaseUpload"]);
Route::post("/reset_cases", [App\Http\Controllers\CasesController::class, "resetCases"]);
Route::post("/reset_agents", [App\Http\Controllers\AgentsController::class, "resetAgents"]);
Route::post("/new_agent_upload", [App\Http\Controllers\AgentsController::class, "newAgentUpload"]);
Route::post("/view_case_form_{caseId}", [App\Http\Controllers\CasesController::class, "viewCase"]);
Route::post("/case_payment_{caseId}", [App\Http\Controllers\CasesController::class, "casePayment"]);
Route::post("/case_delete_{caseId}", [App\Http\Controllers\CasesController::class, "caseDelete"]);