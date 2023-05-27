<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\{HomeController};


use App\Http\Controllers\Admin\{AdminHomeController, AdminLoginController, AdminProfileController, 
    AdminSlideController, AdminAreaController, AdminHomeTesoreriaController, AdminPlanesController, 
    AdminEmpleadoController, AdminReniecController, AdminClienteController, AdminEstadoController,
    AdminCapacitacionController,AdminTesoreriaController,AdminHomeBackofficeController,AdminSupervisorVentasController,AgendasController };

/* Front */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'enviar_datero'])->name('front_datero');



/* Admin */
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');


/* Admin - Middleware */
Route::group(['middleware' => ['admin:admin']], function () {
    Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');
    Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home');
    
    Route::get('/admin/setting', [AdminSettingController::class, 'index'])->name('admin_setting');
    Route::post('/admin/setting/update', [AdminSettingController::class, 'update'])->name('admin_setting_update');

    /* Tesoreria*/
    Route::get('/admin/tesoreria/home', [AdminHomeTesoreriaController::class, 'index'])->name('admin_home_tesoreria');
    Route::get('/admin/tesoreria/view', [AdminTesoreriaController::class, 'viewtesoreria'])->name('admin_viewtesoreria');
    Route::post('/admin/tesoreria/store', [AdminTesoreriaController::class, 'storetesoreria'])->name('admin_tesoreriastore');
    Route::get('/admin/tesoreria/edit/{id}', [AdminTesoreriaController::class, 'edittesoreria'])->name('admin_edittesoreria');
    Route::post('/admin/tesoreria/update/{id}', [AdminTesoreriaController::class, 'updatetesoreria'])->name('admin_updatetesoreria');

    /*Inicio Tesoreria Reportes */
    Route::get('/admin/tesoreria/treporte_dia', [AdminTesoreriaController ::class, 'treporte_dia'])->name('admin_treporte_dia');
    Route::get('/admin/tesoreria/treporte_fecha', [AdminTesoreriaController ::class, 'treporte_fecha'])->name('admin_treporte_fecha');
    Route::post('/admin/tesoreria/treportes_resultados', [AdminTesoreriaController ::class, 'treportes_resultados'])->name('admin_treportes_resultados');
    /*Fin Tesoreria Reportes */

    Route::get('/admin/tesoreria/liquidar', [AdminTesoreriaController::class, 'liquidartesoreria'])->name('admin_tesorerialiquidar');
    Route::get('/admin/tesoreria/reportes', [AdminTesoreriaController::class, 'reportestesoreria'])->name('admin_tesoreriareportes');
    Route::post('/admin/tesoreria/reportes', [AdminTesoreriaController::class, 'search'])->name('search');

    Route::get('/admin/tesoreria/viewtesoreriavali', [AdminTesoreriaController::class, 'viewtesoreriavali'])->name('admin_viewtesoreriavali');

    Route::post('/departamentos', [App\Http\Controllers\AdminClienteController::class, 'departamentos']);
    Route::post('/provincias', [App\Http\Controllers\AdminClienteController::class, 'provincias']);

    Route::post('/provinces', [AdminClienteController::class, 'provinces']);
    Route::post('/admin/cliente/add/districts', [AdminClienteController::class, 'districts']);

   

    /* Slide*/
    Route::get('/admin/slide/view', [AdminSlideController::class, 'index'])->name('admin_slide_view');
    Route::get('/admin/slide/add', [AdminSlideController::class, 'add'])->name('admin_slide_add');
    Route::post('/admin/slide/store', [AdminSlideController::class, 'store'])->name('admin_slide_store');
    Route::get('/admin/slide/edit/{id}', [AdminSlideController::class, 'edit'])->name('admin_slide_edit');
    Route::post('/admin/slide/update/{id}', [AdminSlideController::class, 'update'])->name('admin_slide_update');
    Route::get('/admin/slide/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin_slide_delete');

    /* Estados*/
    Route::get('/admin/estado/view', [AdminEstadoController::class, 'index'])->name('admin_estado_view');
    Route::get('/admin/estado/add', [AdminEstadoController::class, 'add'])->name('admin_estado_add');
    Route::post('/admin/estado/store', [AdminEstadoController::class, 'store'])->name('admin_estado_store');
    Route::get('/admin/estado/edit/{id}', [AdminEstadoController::class, 'edit'])->name('admin_estado_edit');
    Route::post('/admin/estado/update/{id}', [AdminEstadoController::class, 'update'])->name('admin_estado_update');
    Route::get('/admin/estado/delete/{id}', [AdminEstadoController::class, 'delete'])->name('admin_estado_delete');
    Route::get('/admin/estado/cambio_estado/{id}', [AdminEstadoController::class, 'cambio_estado'])->name('admin_estados_cambio_estado');

    /* Clientes-asesores*/
    Route::get('/admin/cliente/bitacora', [AdminClienteController::class, 'bitacora'])->name('admin_cliente_bitacora');
    Route::get('/admin/cliente/view', [AdminClienteController::class, 'index'])->name('admin_cliente_view');
    Route::get('/admin/cliente/add', [AdminClienteController::class, 'add'])->name('admin_cliente_add');
    Route::post('/admin/cliente/store', [AdminClienteController::class, 'store'])->name('admin_cliente_store');
    Route::get('/admin/cliente/viewasesor/{id}', [AdminClienteController::class, 'viewasesor'])->name('admin_cliente_viewasesor');
    Route::get('/admin/cliente/addcampo', [AdminClienteController::class, 'addcampo'])->name('admin_cliente_addcampo');
    Route::post('/admin/cliente/storecampo', [AdminClienteController::class, 'storecampo'])->name('admin_cliente_storecampo');
    Route::get('/admin/cliente/editcampo/{id}', [AdminClienteController::class, 'editcampo'])->name('admin_cliente_editcampo');
    Route::post('/admin/cliente/updatecampo/{id}', [AdminClienteController::class, 'updatecampo'])->name('admin_cliente_updatecampo');
    Route::get('/admin/cliente/edit/{id}', [AdminClienteController::class, 'edit'])->name('admin_cliente_edit');
    Route::post('/admin/cliente/update/{id}', [AdminClienteController::class, 'update'])->name('admin_cliente_update');
    Route::get('/admin/cliente/delete/{id}', [AdminClienteController::class, 'delete'])->name('admin_cliente_delete');


    /*Asesor-Campo*/
    Route::get('/admin/asesorcampo/viewasesorcampo/{id}', [AdminClienteController::class, 'viewasesorcampo'])->name('admin_viewasesorcampo');
    Route::get('/admin/asesorcampo/addasesorcampo', [AdminClienteController::class, 'addasesorcampo'])->name('admin_addasesorcampo');
    Route::post('/admin/asesorcampo/storeasesorcampo', [AdminClienteController::class, 'storeasesorcampo'])->name('admin_storeasesorcampo');
    Route::get('/admin/asesorcampo/editasesorcampo/{id}', [AdminClienteController::class, 'editasesorcampo'])->name('admin_editasesorcampo');
    Route::get('/admin/asesorcampo/detailasesorcampo/{id}', [AdminClienteController::class, 'detailasesorcampo'])->name('admin_detailasesorcampo');
    Route::post('/admin/asesorcampo/updateasesorcampo/{id}', [AdminClienteController::class, 'updateasesorcampo'])->name('admin_updateasesorcampo');

    /*Leer Notificaciones */   
    Route::get('mark_all_notifications', [AdminClienteController::class, 'mark_all_notifications'])->name('admin_mark_all_notifications');
    Route::get('mark_a_notification/{notification_id}', [AdminClienteController::class, 'mark_a_notification'])->name('admin_mark_a_notification');

    /*Asesor-Call*/
    Route::get('/admin/asesorcall/viewasesorcall/{id}', [AdminClienteController::class, 'viewasesorcall'])->name('admin_viewasesorcall');
    Route::get('/admin/asesorcall/addasesorcall', [AdminClienteController::class, 'addasesorcall'])->name('admin_addasesorcall');
    Route::post('/admin/asesorcall/storeasesorcall', [AdminClienteController::class, 'storeasesorcall'])->name('admin_storeasesorcall');
    Route::get('/admin/asesorcall/editasesorcall/{id}', [AdminClienteController::class, 'editasesorcall'])->name('admin_editasesorcall');
    Route::get('/admin/asesorcall/detailasesorcall/{id}', [AdminClienteController::class, 'detailasesorcall'])->name('admin_detailasesorcall');
    Route::post('/admin/asesorcall/updateasesorcall/{id}', [AdminClienteController::class, 'updateasesorcall'])->name('admin_updateasesorcall');

    /*Capacitacion*/
    Route::get('/admin/capacitacion/campacitacionempleado', [AdminCapacitacionController::class, 'campacitacionempleado'])->name('campacitacionempleado');
    Route::get('/admin/capacitacion/viewcapacitacion', [AdminCapacitacionController::class, 'viewcapacitacion'])->name('admin_viewcapacitacion');
    Route::get('/admin/capacitacion/addcapacitacion', [AdminCapacitacionController::class, 'addcapacitacion'])->name('admin_addcapacitacion');
    Route::post('/admin/capacitacion/storecapacitacion', [AdminCapacitacionController::class, 'storecapacitacion'])->name('admin_storecapacitacion');
    Route::get('/admin/capacitacion/editcapacitacion/{id}', [AdminCapacitacionController::class, 'editcapacitacion'])->name('admin_editcapacitacion');
    Route::post('/admin/capacitacion/updatecapacitacion/{id}', [AdminCapacitacionController::class, 'updatecapacitacion'])->name('admin_updatecapacitacion');
    Route::get('/admin/capacitacion/capacitacionestado/{id}', [AdminCapacitacionController::class, 'capacitacionestado'])->name('admin_capacitacionestado');

    /* Datero*/
    Route::get('/admin/datero/view', [AdminClienteController::class, 'index'])->name('admin_datero_view');
    Route::get('/admin/datero/add', [AdminClienteController::class, 'add'])->name('admin_datero_add');
    Route::post('/admin/datero/store', [AdminClienteController::class, 'store'])->name('admin_datero_store');
    Route::get('/admin/datero/edit/{id}', [AdminClienteController::class, 'edit'])->name('admin_datero_edit');
    Route::post('/admin/datero/update/{id}', [AdminClienteController::class, 'update'])->name('admin_datero_update');
    Route::get('/admin/datero/delete/{id}', [AdminClienteController::class, 'delete'])->name('admin_datero_delete');

    /*Tecnico*/
    Route::get('/admin/tecnico/viewtec/{id}', [AdminClienteController::class, 'viewtec'])->name('admin_datero_viewtec');
    Route::get('/admin/tecnico/addtec', [AdminClienteController::class, 'addtec'])->name('admin_datero_addtec');
    Route::post('/admin/tecnico/storetec', [AdminClienteController::class, 'storetec'])->name('admin_datero_storetec');

    /*Backoffice*/
    Route::get('/admin/backoffice/home', [AdminHomeBackofficeController::class, 'index'])->name('admin_home_backoffice');
    Route::get('/admin/backoffice/view', [AdminClienteController::class, 'backoffice'])->name('admin_daterobackoffice_view');
    Route::get('/admin/backoffice/dateros', [AdminClienteController::class, 'backofficedateros'])->name('admin_backofficedateros_view');
    Route::get('/admin/backoffice/add', [AdminClienteController::class, 'addbackoffice'])->name('admin_daterobackoffice_add');
    Route::post('/admin/backoffice/store', [AdminClienteController::class, 'storebackoffice'])->name('admin_daterobackoffice_store');
    Route::get('/admin/backoffice/edit/{id}', [AdminClienteController::class, 'editbackoffice'])->name('admin_daterobackoffice_edit');
    Route::post('/admin/backoffice/update/{id}', [AdminClienteController::class, 'updatebackoffice'])->name('admin_daterobackoffice_update');
    Route::get('/admin/backoffice/delete/{id}', [AdminClienteController::class, 'deletebackoffice'])->name('admin_daterobackoffice_delete');

    /*Supervisor-Backoffice*/
    Route::get('/admin/backoffices/view', [AdminClienteController::class, 'backoffices'])->name('admin_daterobackoffices_view');
    Route::get('/admin/backoffices/viewc', [AdminClienteController::class, 'viewc'])->name('admin_daterobackoffices_viewc');
    Route::get('/admin/backoffices/editc/{id}', [AdminClienteController::class, 'editbackofficesc'])->name('admin_daterobackoffices_editc');
    Route::post('/admin/backoffices/updatec/{id}', [AdminClienteController::class, 'updatebackofficesc'])->name('admin_daterobackoffices_updatec');
    Route::get('/admin/backoffices/add', [AdminClienteController::class, 'addbackoffices'])->name('admin_daterobackoffices_add');
    Route::post('/admin/backoffices/store', [AdminClienteController::class, 'storebackoffices'])->name('admin_daterobackoffices_store');
    Route::get('/admin/backoffices/edit/{id}', [AdminClienteController::class, 'editbackoffices'])->name('admin_daterobackoffices_edit');
    Route::post('/admin/backoffices/update/{id}', [AdminClienteController::class, 'updatebackoffices'])->name('admin_daterobackoffices_update');
    Route::get('/admin/backoffices/delete/{id}', [AdminClienteController::class, 'deletebackoffices'])->name('admin_daterobackoffices_delete');
    /*agendas*/
    Route::get('/admin/backoffice/agendas/{id}', [AdminClienteController::class, 'agendas'])->name('admin_agendasbackoffice_view');
    Route::get('/admin/backoffices/agendas/{id}', [AdminClienteController::class, 'agendas'])->name('admin_agendasbackoffices_view');

    /*Supervisor-Ventas*/
    Route::get('/admin/supervisorventas/view', [AdminSupervisorVentasController ::class, 'supervisorventas'])->name('admin_supervisorventas_view');

    Route::get('/admin/supervisorventas/reporte_dia', [AdminSupervisorVentasController ::class, 'reporte_dia'])->name('admin_reporte_dia');
    Route::get('/admin/supervisorventas/reporte_fecha', [AdminSupervisorVentasController ::class, 'reporte_fecha'])->name('admin_reporte_fecha');
    Route::post('/admin/supervisorventas/reportes_resultados', [AdminSupervisorVentasController ::class, 'reportes_resultados'])->name('admin_reportes_resultados');



    /*Plan*/
    Route::get('/admin/planes/view', [AdminPlanesController::class, 'index'])->name('admin_planes_view');
    Route::get('/admin/planes/add', [AdminPlanesController::class, 'add'])->name('admin_planes_add');
    Route::post('/admin/planes/store', [AdminPlanesController::class, 'store'])->name('admin_planes_store');
    Route::get('/admin/planes/edit/{id}', [AdminPlanesController::class, 'edit'])->name('admin_planes_edit');
    Route::post('/admin/planes/update/{id}', [AdminPlanesController::class, 'update'])->name('admin_planes_update');
    Route::get('/admin/planes/delete/{id}', [AdminPlanesController::class, 'delete'])->name('admin_planes_delete');
    Route::get('/admin/planes/planes_estado/{id}', [AdminPlanesController::class, 'planes_estado'])->name('admin_estados_planes_estado');

    /* No Autorizado */
    Route::get('/admin/no_autorizado', [AdminPlanesController::class, 'no_autorizado'])->name('admin_no_autorizado');

    /*Areas*/
    Route::get('/admin/area/view', [AdminAreaController::class, 'index'])->name('admin_area_view');
    Route::get('/admin/area/add', [AdminAreaController::class, 'add'])->name('admin_area_add');
    Route::post('/admin/area/store', [AdminAreaController::class, 'store'])->name('admin_area_store');
    Route::get('/admin/area/edit/{id}', [AdminAreaController::class, 'edit'])->name('admin_area_edit');
    Route::post('/admin/area/update/{id}', [AdminAreaController::class, 'update'])->name('admin_area_update');
    Route::get('/admin/area/delete/{id}', [AdminAreaController::class, 'delete'])->name('admin_area_delete');

    /*Empleados*/
    Route::get('/admin/empleado/view', [AdminEmpleadoController::class, 'index'])->name('admin_empleado_view');
    Route::get('/admin/empleado/add', [AdminEmpleadoController::class, 'add'])->name('admin_empleado_add');
    Route::post('/admin/empleado/store', [AdminEmpleadoController::class, 'store'])->name('admin_empleado_store');
    Route::get('/admin/empleado/edit/{id}', [AdminEmpleadoController::class, 'edit'])->name('admin_empleado_edit');
    Route::post('/admin/empleado/update/{id}', [AdminEmpleadoController::class, 'update'])->name('admin_empleado_update');
    Route::get('/admin/empleado/delete/{id}', [AdminEmpleadoController::class, 'delete'])->name('admin_empleado_delete');
    Route::get('/admin/empleado/change-status/{id}', [AdminEmpleadoController::class, 'change_status'])->name('admin_empleado_change_status');
    Route::get('/admin/empleado/export/', [AdminEmpleadoController::class, 'empleados_export'])->name('admin_empleado_export');

    /*Reniec*/
    Route::get('/admin/reniec/view', [AdminReniecController::class, 'index'])->name('admin_reniec_view');
    Route::get('/admin/reniec/store', [AdminReniecController::class, 'store'])->name('admin_reniec_store');

    /*Carga*/
    Route::get('/admin/carga/view', [AdminClienteController::class, 'vistacarga'])->name('admin_carga_view');
    Route::post('/admin/carga/import', [AdminClienteController::class, 'cargacliente'])->name('admin_carga_add');
});
