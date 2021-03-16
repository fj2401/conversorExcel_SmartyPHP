<?php
/**
 * 1_lang_core
 * 
 * @author    
 * @copyright 
 * @license   
 * @version  2.0.0
 * @link      http://www.hermesti.es 
 */
  $langJs = "1_lang.js";
  $smarty->assign("lang_js", $langJs);
  //Plantillas HTML

  //sheets
          $smarty->assign("msg_sheet_001", "Acreedores");
  $smarty->assign("msg_sheet_002", "Deudores");
  $smarty->assign("msg_sheet_003", "Remesas");
  $smarty->assign("msg_sheet_004", "Hist�rico");
  $smarty->assign("msg_sheet_005", "Importar remesas");
  $smarty->assign("msg_sheet_006", "Ayuda");
  
  //listar_ordenante
  $smarty->assign("msg_listar_ordenante_001", "Adeudos a Consumidores(CORE). Datos del acreedor.");
  $smarty->assign("msg_listar_ordenante_002", "Nombre");
  $smarty->assign("msg_listar_ordenante_003", "Cuenta(IBAN)");
  $smarty->assign("msg_listar_ordenante_004", "Residencia Fiscal");
  $smarty->assign("msg_listar_ordenante_005", "Nif-Sufijo");
  $smarty->assign("msg_listar_ordenante_006", "Domicilio");
  $smarty->assign("msg_listar_ordenante_007", "Localidad");
  $smarty->assign("msg_listar_ordenante_008", "Provincia");
  $smarty->assign("msg_listar_ordenante_009", "Pa�s");
  $smarty->assign("msg_listar_ordenante_010", "Imprimir");
  $smarty->assign("msg_listar_ordenante_011", "Modificar");
  $smarty->assign("msg_listar_ordenante_012", "Cambiar/Modificar Acreedor");
  
  //Restaurar ordenantes
  $smarty->assign("msg_restaurar_ordenantes_001", "Acreedores borrados");
  $smarty->assign("msg_restaurar_ordenantes_002", "Listado de Acreedores borrados");  
  $smarty->assign("msg_restaurar_ordenantes_003", "ABANCA");
  $smarty->assign("msg_restaurar_ordenantes_004", "Nombre del Acreedor");
  $smarty->assign("msg_restaurar_ordenantes_005", "Cuenta");  
  $smarty->assign("msg_restaurar_ordenantes_006", "Nif-Sufijo");
  $smarty->assign("msg_restaurar_ordenantes_007", "Volver");
  $smarty->assign("msg_restaurar_ordenantes_008", "Restaurar");
  $smarty->assign("msg_restaurar_ordenantes_009", "Imprimir");
  
  //Listar_ordenantes
  $smarty->assign("msg_listar_ordenantes_001", "Se ha detectado que uno o m�s acreedores tienen remesas con recibos pendientes de emisi�n.");
  $smarty->assign("msg_listar_ordenantes_002", "Si accede con un acreedor que tenga una remesa con recibos pendientes de emisi�n, se pasar� directamente a una ventana que le permitir� emitir esos recibos pendientes o descartarlos para desactivar el aviso sobre el acreedor.");  
  $smarty->assign("msg_listar_ordenantes_003", "Acreedores");
  $smarty->assign("msg_listar_ordenantes_004", "Listado de Acreedores");
  $smarty->assign("msg_listar_ordenantes_005", "ABANCA");  
  $smarty->assign("msg_listar_ordenantes_006", "Nombre del Acreedor");
  $smarty->assign("msg_listar_ordenantes_007", "Cuenta");
  $smarty->assign("msg_listar_ordenantes_008", "Nif-Sufijo");
  $smarty->assign("msg_listar_ordenantes_009", "(�ltimo acceso)");
  $smarty->assign("msg_listar_ordenantes_010", "A�adir");
  $smarty->assign("msg_listar_ordenantes_011", "Modificar");
  $smarty->assign("msg_listar_ordenantes_012", "Borrar");
  $smarty->assign("msg_listar_ordenantes_013", "Imprimir");
  $smarty->assign("msg_listar_ordenantes_014", "Confeccionar remesa");
  $smarty->assign("msg_listar_ordenantes_015", "Importar datos del acreedor");
  $smarty->assign("msg_listar_ordenantes_016", "El ordenante tiene remesas pendientes de emisi�n");
  $smarty->assign("msg_listar_ordenantes_017", "Actualizar cuentas");
  $smarty->assign("msg_listar_ordenantes_018", "Ver acreedores borrados");
  $smarty->assign("msg_listar_ordenantes_019", "Mostrar datos del acreedor");
 
  //Anadir_ordenante
  $smarty->assign("msg_anadir_ordenante_001", "A�adir un nuevo acreedor");
  $smarty->assign("msg_anadir_ordenante_002", "Nombre");
  $smarty->assign("msg_anadir_ordenante_003", "Cuenta(IBAN espa�ol)");
  $smarty->assign("msg_anadir_ordenante_004", "Nif - Sufijo - Identificador");
  $smarty->assign("msg_anadir_ordenante_005", "Residencia");
  $smarty->assign("msg_anadir_ordenante_006", "ESPA�A");
  $smarty->assign("msg_anadir_ordenante_007", "EXTRANJERO");
  $smarty->assign("msg_anadir_ordenante_008", "Direcci�n");
  $smarty->assign("msg_anadir_ordenante_009", "Plaza");
  $smarty->assign("msg_anadir_ordenante_010", "Provincia");
  $smarty->assign("msg_anadir_ordenante_011", "Pa�s");
  $smarty->assign("msg_anadir_ordenante_012", "* Campos obligatorios");
  $smarty->assign("msg_anadir_ordenante_013", "Descartar");
  $smarty->assign("msg_anadir_ordenante_014", "Aceptar");
  
  //emitirCOREDesdeAcreedores
  $smarty->assign("msg_emitir_core_desde_acreedores_001","Emisi�n de la parte");
  $smarty->assign("msg_emitir_core_desde_acreedores_002","de la remesa");
  $smarty->assign("msg_emitir_core_desde_acreedores_003","del ordenante");
  $smarty->assign("msg_emitir_core_desde_acreedores_004","Datos del acreedor emisor");
  $smarty->assign("msg_emitir_core_desde_acreedores_005","Nombre:");
  $smarty->assign("msg_emitir_core_desde_acreedores_006","Nif-Sufijo:");
  $smarty->assign("msg_emitir_core_desde_acreedores_007","Indentificador del acreedor:");
  $smarty->assign("msg_emitir_core_desde_acreedores_008","Datos de la remesa a emitir");
  $smarty->assign("msg_emitir_core_desde_acreedores_009","Nombre:");
  $smarty->assign("msg_emitir_core_desde_acreedores_010","Fecha de creaci�n:");  
  $smarty->assign("msg_emitir_core_desde_acreedores_011","Parte CORE");
  $smarty->assign("msg_emitir_core_desde_acreedores_012","N�mero de recibos CORE:");
  $smarty->assign("msg_emitir_core_desde_acreedores_013","Importe de los recibos CORE:");
  $smarty->assign("msg_emitir_core_desde_acreedores_014","euros");
  $smarty->assign("msg_emitir_core_desde_acreedores_015","Parte COR1");
  $smarty->assign("msg_emitir_core_desde_acreedores_016","N�mero de recibos COR1:");
  $smarty->assign("msg_emitir_core_desde_acreedores_017","Importe de los recibos COR1:");
  $smarty->assign("msg_emitir_core_desde_acreedores_018","euros");
  $smarty->assign("msg_emitir_core_desde_acreedores_019","Emitir/Enviar");
  $smarty->assign("msg_emitir_core_desde_acreedores_020","No volver a recordar");
  $smarty->assign("msg_emitir_core_desde_acreedores_021","Ha pasado m�s de un d�a desde la emisi�n de la primera parte de la remesa y alguna entidad deudora ha cambiado los plazos de presentaci�n admitidos.");
  $smarty->assign("msg_emitir_core_desde_acreedores_022","Se requiere una revisi�n de los recibos restantes. Para facilitarle el trabajo, se han excluido de la remesa los recibos ya emitidos.");
  $smarty->assign("msg_emitir_core_desde_acreedores_023","Entre en la aplicaci�n (pulsando [Continuar]) y emita nuevamente la remesa para emitir los restantes recibos.");
  $smarty->assign("msg_emitir_core_desde_acreedores_024","Continuar");
  
  
  //modificar_ordenante
  $smarty->assign("msg_modificar_ordenante_001", "Adeudos a Consumidores(CORE). Datos del acreedor.");
  $smarty->assign("msg_modificar_ordenante_002", "Nombre");
  $smarty->assign("msg_modificar_ordenante_003", "Cuenta(IBAN)");
  $smarty->assign("msg_modificar_ordenante_004", "Residencia Fiscal)");
  $smarty->assign("msg_modificar_ordenante_005", "Nif-Sufijo");
  $smarty->assign("msg_modificar_ordenante_006", "Domicilio");
  $smarty->assign("msg_modificar_ordenante_007", "Localidad");
  $smarty->assign("msg_modificar_ordenante_008", "Provincia");
  $smarty->assign("msg_modificar_ordenante_009", "Pa�s");
  $smarty->assign("msg_modificar_ordenante_010", "Descartar");
  $smarty->assign("msg_modificar_ordenante_011", "Aceptar");
  $smarty->assign("msg_modificar_ordenante_012", "�ltima modificaci�n");
  
  
  //mostrar_ordenante
  $smarty->assign("msg_mostrar_ordenante_001", "Adeudos a Consumidores(CORE). Datos del acreedor borrado.");
  $smarty->assign("msg_mostrar_ordenante_002", "Nombre");
  $smarty->assign("msg_mostrar_ordenante_003", "Cuenta(IBAN)");
  $smarty->assign("msg_mostrar_ordenante_004", "Residencia Fiscal");
  $smarty->assign("msg_mostrar_ordenante_005", "Nif-Sufijo");
  $smarty->assign("msg_mostrar_ordenante_006", "Domicilio");
  $smarty->assign("msg_mostrar_ordenante_007", "Localidad");
  $smarty->assign("msg_mostrar_ordenante_008", "Provincia");
  $smarty->assign("msg_mostrar_ordenante_009", "Pa�s");
  $smarty->assign("msg_mostrar_ordenante_010", "Volver");
  $smarty->assign("msg_mostrar_ordenante_011", "Identificador del acreedor");
  
  //listar_librados
  $smarty->assign("msg_listar_librados_001", "Deudores");
  $smarty->assign("msg_listar_librados_002", "Adeudos a Consumidores(CORE). Lista de deudores del acreedor");
  $smarty->assign("msg_listar_librados_003", "Referencia del Mandato");
  $smarty->assign("msg_listar_librados_004", "Ordena por referencia ascendentemente");
  $smarty->assign("msg_listar_librados_005", "Ordena por referencia descendentemente");
  $smarty->assign("msg_listar_librados_006", "Nombre del titular");
  $smarty->assign("msg_listar_librados_007", "Ordena por titular ascendentemente");
  $smarty->assign("msg_listar_librados_008", "Ordena por titular descendentemente");
  $smarty->assign("msg_listar_librados_009", "IBAN");
  $smarty->assign("msg_listar_librados_011", "Modificar");
  $smarty->assign("msg_listar_librados_012", "A�adir");
  $smarty->assign("msg_listar_librados_013", "Borrar");
  $smarty->assign("msg_listar_librados_014", "Imprimir");
  $smarty->assign("msg_listar_librados_015", "Imprimir Mandatos");
  $smarty->assign("msg_listar_librados_016", "Ordena por fecha de creaci�n ascendentemente");
  $smarty->assign("msg_listar_librados_017", "Ordena por fecha de creaci�n descendentemente");
  
  //anadir_librado
  $smarty->assign("msg_anadir_librado_001", "Adeudos a Consumidores(CORE). A�adir un deudor");
  $smarty->assign("msg_anadir_librado_002", "Nombre (Titular de la cuenta)");
  $smarty->assign("msg_anadir_librado_003", "Cuenta (IBAN - CCC)");
  $smarty->assign("msg_anadir_librado_004", "Residencia Fiscal");
  $smarty->assign("msg_anadir_librado_005", "Tipo de Pago");
  $smarty->assign("msg_anadir_librado_006", "Referencia del Mandato "); 
  $smarty->assign("msg_anadir_librado_008", "Domicilio (Tipo y nombre de v�a, n�mero y piso)");
  $smarty->assign("msg_anadir_librado_009", "Localidad (C.P. y localidad)");
  $smarty->assign("msg_anadir_librado_010", "Provincia");
  $smarty->assign("msg_anadir_librado_011", "Pa�s");
  $smarty->assign("msg_anadir_librado_012", "Pa�ses");
  $smarty->assign("msg_anadir_librado_013", "Tel�fono (Ej: +34-912345678)");
  $smarty->assign("msg_anadir_librado_014", "E-mail");
  $smarty->assign("msg_anadir_librado_015", "* Campos obligatorios");
  $smarty->assign("msg_anadir_librado_016", "Inf.Adicional");
  $smarty->assign("msg_anadir_librado_017", "Descartar");
  $smarty->assign("msg_anadir_librado_018", "Aceptar y salir");
  $smarty->assign("msg_anadir_librado_019", "Aceptar y a�adir otro");
  $smarty->assign("msg_anadir_librado_020", " del acreedor ");
  $smarty->assign("msg_anadir_librado_021", " - BIC(SWIFT)");
  $smarty->assign("msg_anadir_librado_022", " - Fecha Firma (dd/mm/aaaa)");  
  $smarty->assign("msg_anadir_librado_023", "** S�lo para cuentas en el extranjero");  
  $smarty->assign("msg_anadir_librado_024", "Titular de la domiciliaci�n");  
  //modificar_librado
  $smarty->assign("msg_modificar_librado_001", "Adeudos a Consumidores(CORE). Modificar un deudor");
  $smarty->assign("msg_modificar_librado_002", "Nombre (Titular de la cuenta)");
  $smarty->assign("msg_modificar_librado_003", "Cuenta (IBAN - CCC)");
  $smarty->assign("msg_modificar_librado_004", "Residencia Fiscal");
  $smarty->assign("msg_modificar_librado_005", "Tipo de Pago");
  $smarty->assign("msg_modificar_librado_006", "Referencia del Mandato"); 
  $smarty->assign("msg_modificar_librado_008", "Domicilio (Tipo y nombre de v�a, n�mero y piso)");
  $smarty->assign("msg_modificar_librado_009", "Localidad (C.P. y localidad)");
  $smarty->assign("msg_modificar_librado_010", "Provincia");
  $smarty->assign("msg_modificar_librado_011", "Pa�s");
  $smarty->assign("msg_modificar_librado_012", "Tel�fono (Ej: +34-912345678)");
  $smarty->assign("msg_modificar_librado_013", "E-mail");
  $smarty->assign("msg_modificar_librado_014", "* Campos obligatorios");
  $smarty->assign("msg_modificar_librado_015", "Inf.Adicional");
  $smarty->assign("msg_modificar_librado_016", "Descartar");
  $smarty->assign("msg_modificar_librado_017", "Aceptar");
  $smarty->assign("msg_modificar_librado_018", "Imprimir");
  $smarty->assign("msg_modificar_librado_019", " del acreedor "); 
  $smarty->assign("msg_modificar_librado_020", " - BIC(SWIFT)");
  $smarty->assign("msg_modificar_librado_021", " - Fecha Firma (dd/mm/aaaa)");
  $smarty->assign("msg_modificar_librado_022", "** S�lo para cuentas en el extranjero");  
  $smarty->assign("msg_modificar_librado_023", "Titular de la domiciliaci�n");
  //listar_remesas
  $smarty->assign("msg_listar_remesas_001", "Adeudos a Consumidores(CORE). Gesti�n de remesas del acreedor");
  $smarty->assign("msg_listar_remesas_002", "Remesa");
  $smarty->assign("msg_listar_remesas_003", "F. Creaci�n");
  $smarty->assign("msg_listar_remesas_004", "Recibos");
  $smarty->assign("msg_listar_remesas_005", "Importe total");
  $smarty->assign("msg_listar_remesas_006", "Operaciones");
  $smarty->assign("msg_listar_remesas_007", "Listar Recibos");
  $smarty->assign("msg_listar_remesas_008", "Emitir/Enviar");
  $smarty->assign("msg_listar_remesas_009", "Borrar");
  $smarty->assign("msg_listar_remesas_010", "Copiar");
  $smarty->assign("msg_listar_remesas_011", "Crear nueva remesa");
  $smarty->assign("msg_listar_remesas_012", "Imprimir");
  $smarty->assign("msg_listar_remesas_013", "Modificar");    
  //crear_remesa
  $smarty->assign("msg_crear_remesa_001", "Crear remesa");
  $smarty->assign("msg_crear_remesa_002", "Nombre de la remesa");
  $smarty->assign("msg_crear_remesa_003", "Fecha de Creaci�n");
  $smarty->assign("msg_crear_remesa_004", "Descartar");
  $smarty->assign("msg_crear_remesa_005", "Crear Remesa");
  $smarty->assign("msg_crear_remesa_006", "Crear");
  $smarty->assign("msg_crear_remesa_007", "Descartar");
  //copiar_remesa
  $smarty->assign("msg_copiar_remesa_001", "Adeudos a Consumidores(CORE). Copiar la remesa y sus recibos del acreedor ");
  $smarty->assign("msg_copiar_remesa_002", "Remesa origen");
  $smarty->assign("msg_copiar_remesa_003", "Nombre de la remesa");
  $smarty->assign("msg_copiar_remesa_004", "Fecha de Creaci�n");
  $smarty->assign("msg_copiar_remesa_005", "Descartar");
  $smarty->assign("msg_copiar_remesa_006", "Aceptar");
  //Modificar_remesa
  $smarty->assign("msg_modificar_remesa_001", "Aceptar");
  $smarty->assign("msg_modificar_remesa_002", "Descartar");
  $smarty->assign("msg_modificar_remesa_003", "Adeudos entre Empresas(B2B). Modificar el nombre de la remesa del acreedor");
  $smarty->assign("msg_modificar_remesa_004", "Nombre de la remesa");
  $smarty->assign("msg_modificar_remesa_005", "Fecha de Creaci�n");    
  //listar_recibos
  $smarty->assign("msg_listar_recibos_001", "F. creaci�n");
  $smarty->assign("msg_listar_recibos_002", "Recibos activos");
  $smarty->assign("msg_listar_recibos_003", "Importe");
  $smarty->assign("msg_listar_recibos_004", "Adeudos a Consumidores(CORE). Lista de recibos de la remesa");
  $smarty->assign("msg_listar_recibos_005", "Nombre Deudor");
  $smarty->assign("msg_listar_recibos_006", "Ordena por nombre deudor ascendentemente");
  $smarty->assign("msg_listar_recibos_007", "Ordena por nombre deudor descendentemente");
  $smarty->assign("msg_listar_recibos_008", "Importe");
  $smarty->assign("msg_listar_recibos_009", "Ordena por importe ascendentemente");
  $smarty->assign("msg_listar_recibos_010", "Ordena por importe descendentemente");
  $smarty->assign("msg_listar_recibos_011", "F. Pago");
  $smarty->assign("msg_listar_recibos_012", "Ref. Adeudo");
  $smarty->assign("msg_listar_recibos_013", "Concepto");
  $smarty->assign("msg_listar_recibos_014", "Volver");
  $smarty->assign("msg_listar_recibos_015", "Cambios multirecibo");
  $smarty->assign("msg_listar_recibos_016", "Excluir");
  $smarty->assign("msg_listar_recibos_017", "Incluir");
  $smarty->assign("msg_listar_recibos_018", "Borrar");
  $smarty->assign("msg_listar_recibos_019", "A�adir recibo");
  $smarty->assign("msg_listar_recibos_020", "Imprimir lista");
  $smarty->assign("msg_listar_recibos_021", "Imprimir recibos");
  $smarty->assign("msg_listar_recibos_022", "Emitir/Enviar recibos");
  $smarty->assign("msg_listar_recibos_023", " del acreedor ");
  $smarty->assign("msg_listar_recibos_024", "Ordena por fechapago ascendentemente");
  $smarty->assign("msg_listar_recibos_025", "Ordena por fechapago descendentemente");
  $smarty->assign("msg_listar_recibos_026", "Ordena por referencia ascendentemente");
  $smarty->assign("msg_listar_recibos_027", "Ordena por referencia descendentemente");
  $smarty->assign("msg_listar_recibos_028", "Modificar recibo");
  $smarty->assign("msg_listar_recibos_029", "Importar recibos");
  $smarty->assign("msg_listar_recibos_030", "Plazo");
  
   //Informacion_adicional_historico
  $smarty->assign("msg_inf_adicional_001", "Datos de la remesa");
  $smarty->assign("msg_inf_adicional_002", "Nombre remesa");
  $smarty->assign("msg_inf_adicional_003", "Importe total");
  $smarty->assign("msg_inf_adicional_004", "N&ordm; de Recibos"); 
  $smarty->assign("msg_inf_adicional_005", "Deudor");   
  $smarty->assign("msg_inf_adicional_006", "Nombre Deudor (OBL.)"); 
  $smarty->assign("msg_inf_adicional_007", "Cuenta"); 
  $smarty->assign("msg_inf_adicional_008", "BIC-SWIFT");   
  $smarty->assign("msg_inf_adicional_009", "Residencia fiscal (OBL.)"); 
  $smarty->assign("msg_inf_adicional_010", "Ref.Mandato");   
  $smarty->assign("msg_inf_adicional_011", "Detalle del Recibo"); 
  $smarty->assign("msg_inf_adicional_012", "Importe (OBL)"); 
  $smarty->assign("msg_inf_adicional_013", "Concepto"); 
  $smarty->assign("msg_inf_adicional_014", "Ref.Adeudo");   
  $smarty->assign("msg_inf_adicional_015", "Fecha de Pago"); 
  $smarty->assign("msg_inf_adicional_016", "Tipo Adeudo");   
  $smarty->assign("msg_inf_adicional_017", "Codificaci�n normalizada del Adeudo (Opcional)"); 
  $smarty->assign("msg_inf_adicional_018", "Categor�a"); 
  $smarty->assign("msg_inf_adicional_019", "Prop�sito");   
  $smarty->assign("msg_inf_adicional_020", "Ir a Vista Ampliada"); 
  $smarty->assign("msg_inf_adicional_021", "Identificaci�n de �ltimo Acreedor(Opcional)");   
  $smarty->assign("msg_inf_adicional_022", "Nombre");   
  $smarty->assign("msg_inf_adicional_023", "Tipo"); 
  $smarty->assign("msg_inf_adicional_024", "Codificaci�n"); 
  $smarty->assign("msg_inf_adicional_025", "C�digo"); 
  $smarty->assign("msg_inf_adicional_026", "Emisor"); 
  $smarty->assign("msg_inf_adicional_027", "ORGANIZACI�N"); 
  $smarty->assign("msg_inf_adicional_028", "PERSONA");   
  $smarty->assign("msg_inf_adicional_029", "Ir a Vista Ampliada"); 
  $smarty->assign("msg_inf_adicional_030", "Informaci�n de Titular de la Domiciliaci�n (Opcional)"); 
  $smarty->assign("msg_inf_adicional_031", "Nombre"); 
  $smarty->assign("msg_inf_adicional_032", "Tipo"); 
  $smarty->assign("msg_inf_adicional_033", "Codificaci�n"); 
  $smarty->assign("msg_inf_adicional_034", "C�digo"); 
  $smarty->assign("msg_inf_adicional_035", "Emisor"); 
  $smarty->assign("msg_inf_adicional_036", "ORGANIZACI�N"); 
  $smarty->assign("msg_inf_adicional_037", "PERSONA");     
  $smarty->assign("msg_inf_adicional_038", "Ir a Vista Ampliada"); 
  $smarty->assign("msg_inf_adicional_039", "Identificaci�n Adicional del Deudor (Opcional)"); 
  $smarty->assign("msg_inf_adicional_040", "Tipo"); 
  $smarty->assign("msg_inf_adicional_041", "Codificaci�n"); 
  $smarty->assign("msg_inf_adicional_042", "C�digo"); 
  $smarty->assign("msg_inf_adicional_043", "Emisor"); 
  $smarty->assign("msg_inf_adicional_044", "ORGANIZACI�N"); 
  $smarty->assign("msg_inf_adicional_045", "PERSONA");   
  $smarty->assign("msg_inf_adicional_046", "Aceptar");   
   //Informacion_adicional
   
   
  //Importar desde recibos
  $smarty->assign("msg_importar_desde_recibos_001", "Importaci�n de recibos de la remesa");
  $smarty->assign("msg_importar_desde_recibos_002", "Volver");
  $smarty->assign("msg_importar_desde_recibos_003", "Importar");
  $smarty->assign("msg_importar_desde_recibos_004", "Archivo a importar");

  //Importar desde remesa excel
  $smarty->assign("msg_importar_remesa_excel_001", "Volver");
  $smarty->assign("msg_importar_remesa_excel_002", "Descargar ejemplo");
  $smarty->assign("msg_importar_remesa_excel_003", "Continuar");
  $smarty->assign("msg_importar_remesa_excel_004", "Importaci�n de fichero en formato Excel");
  $smarty->assign("msg_importar_remesa_excel_005", "�Tiene cabecera el fichero?");
  $smarty->assign("msg_importar_remesa_excel_006", "N�mero de Fila");
  $smarty->assign("msg_importar_remesa_excel_007", "Descripci�n del Error");
  $smarty->assign("msg_importar_remesa_excel_008", "NOMBRE (A)");
  $smarty->assign("msg_importar_remesa_excel_009", "CUENTA BANCARIA (B)");
  $smarty->assign("msg_importar_remesa_excel_010", "BIC (C)");
  $smarty->assign("msg_importar_remesa_excel_011", "DIRECCION (D)");
  $smarty->assign("msg_importar_remesa_excel_012", "LOCALIDAD / CP (E)");
  $smarty->assign("msg_importar_remesa_excel_013", "PROVINCIA (F)");
  $smarty->assign("msg_importar_remesa_excel_014", "PAIS (G)");
  $smarty->assign("msg_importar_remesa_excel_015", "TIPO MANDATO (H)");
  $smarty->assign("msg_importar_remesa_excel_016", "RUM (I)");
  $smarty->assign("msg_importar_remesa_excel_017", "FECHA FIRMA (J)");
  $smarty->assign("msg_importar_remesa_excel_018", "TITULAR (K)");
  $smarty->assign("msg_importar_remesa_excel_019", "IMPORTE (L)");
  $smarty->assign("msg_importar_remesa_excel_020", "CONCEPTO (M)");
  $smarty->assign("msg_importar_remesa_excel_021", "SECUENCIA (N)");
  $smarty->assign("msg_importar_remesa_excel_022", "FECHA COBRO (O)");
  $smarty->assign("msg_importar_remesa_excel_023", "REF. ADEUDO (P)");
  
  //anadir_recibo
  $smarty->assign("msg_anadir_recibo_001", "Adeudos a Consumidores(CORE). A�adir recibo a la remesa");
  $smarty->assign("msg_anadir_recibo_002", "Alta de Deudor");
  $smarty->assign("msg_anadir_recibo_003", "Nuevo Deudor");
  $smarty->assign("msg_anadir_recibo_004", "Acreedor");
  $smarty->assign("msg_anadir_recibo_005", "Datos del Deudor");
  $smarty->assign("msg_anadir_recibo_006", "Nombre (Titular de la cuenta)");
  $smarty->assign("msg_anadir_recibo_007", "Ref. Mandato");
  $smarty->assign("msg_anadir_recibo_008", "Cuenta");
  $smarty->assign("msg_anadir_recibo_009", "BIC_SWIFT");
  $smarty->assign("msg_anadir_recibo_010", "Datos del recibo");
  $smarty->assign("msg_anadir_recibo_011", "Concepto");
  $smarty->assign("msg_anadir_recibo_012", "Importe");
  $smarty->assign("msg_anadir_recibo_013", "Ref.Adeudo");
  $smarty->assign("msg_anadir_recibo_014", "Fecha Pago(dd/mm/aaaa)");
  $smarty->assign("msg_anadir_recibo_015", "Tipo Adeudo");
  $smarty->assign("msg_anadir_recibo_016", "Inf. Adicional");
  $smarty->assign("msg_anadir_recibo_017", "Descartar");
  $smarty->assign("msg_anadir_recibo_018", "Aceptar");
  $smarty->assign("msg_anadir_recibo_019", "Aceptar y a�adir recibo");
  $smarty->assign("msg_anadir_recibo_020", " del acreedor "); 
  $smarty->assign("msg_anadir_recibo_021", "Seleccionar Deudor"); 
  $smarty->assign("msg_anadir_recibo_022", "Titular de la domiciliaci�n"); 
  $smarty->assign("msg_anadir_recibo_023", "Para incluir conceptos con mayor tama�o (hasta 640 caracteres) consulte la "); 
  $smarty->assign("msg_anadir_recibo_024", "siguiente informaci�n"); 

  //modificar_recibo
  $smarty->assign("msg_modificar_recibo_001", "Adeudos a Consumidores(CORE). Adeudo de la remesa");
  $smarty->assign("msg_modificar_recibo_002", "Deudor Seleccionado");
  $smarty->assign("msg_modificar_recibo_003", "Acreedor");
  $smarty->assign("msg_modificar_recibo_004", "Datos del Deudor");
  $smarty->assign("msg_modificar_recibo_005", "Deudor (Titular de la cuenta)");
  $smarty->assign("msg_modificar_recibo_006", "Ref. Mandato");
  $smarty->assign("msg_modificar_recibo_007", "Cuenta");
  $smarty->assign("msg_modificar_recibo_008", "BIC_SWIFT");
  $smarty->assign("msg_modificar_recibo_009", "Datos del recibo");
  $smarty->assign("msg_modificar_recibo_010", "Concepto");
  $smarty->assign("msg_modificar_recibo_011", "Importe");
  $smarty->assign("msg_modificar_recibo_012", "Ref. Adeudo");
  $smarty->assign("msg_modificar_recibo_013", "Fecha Pago(dd/mm/aaaa)");
  $smarty->assign("msg_modificar_recibo_014", "Tipo Adeudo");
  $smarty->assign("msg_modificar_recibo_015", "Inf.Adicional");
  $smarty->assign("msg_modificar_recibo_016", "Descartar");
  $smarty->assign("msg_modificar_recibo_017", "Aceptar");
  $smarty->assign("msg_modificar_recibo_018", " del acreedor ");
  $smarty->assign("msg_modificar_recibo_019", "Informaci�n para el Banco de Espa�a (Balanza de Pagos)");
  $smarty->assign("msg_modificar_recibo_020", "Clase Pago");
  $smarty->assign("msg_modificar_recibo_021", "Cod. Estad�stico");
  $smarty->assign("msg_modificar_recibo_022", "Pa�s Mercanc�a");
  $smarty->assign("msg_modificar_recibo_023", "NOF");
  $smarty->assign("msg_modificar_recibo_024", "ISIN");
  $smarty->assign("msg_modificar_recibo_025", "NIF Emisor");  
  $smarty->assign("msg_modificar_recibo_026", "Plazo");  
  // El mensaje 27 se omite en b2b puesto que no existe el campo de "Motivo de la Devoluci�n/Rechazo" 
  //$smarty->assign("msg_modificar_recibo_027", "Motivo de la Devoluci�n/Rechazo");  
  $smarty->assign("msg_modificar_recibo_028", "* Campos obligatorios");
  $smarty->assign("msg_modificar_recibo_029", "Titular de la domiciliaci�n");
  $smarty->assign("msg_modificar_recibo_030", "emitida");
  $smarty->assign("msg_modificar_recibo_031", "Para incluir conceptos con mayor tama�o (hasta 640 caracteres) consulte la ");
  $smarty->assign("msg_modificar_recibo_032", "siguiente informaci�n");
  
  //confirma_remesa
  $smarty->assign("msg_confirma_remesa_001", "Adeudos a Consumidores(CORE). Confirmaci�n de la emisi�n de la remesa");
  $smarty->assign("msg_confirma_remesa_002", "Fecha de Cargo (dd/mm/aaaa)");
  $smarty->assign("msg_confirma_remesa_003", "Importe total");
  $smarty->assign("msg_confirma_remesa_004", "N�mero de recibos");
  $smarty->assign("msg_confirma_remesa_005", "Clave");
  $smarty->assign("msg_confirma_remesa_006", "Nombre del Fichero:");
  $smarty->assign("msg_confirma_remesa_007", "Descartar");
  $smarty->assign("msg_confirma_remesa_008", "Confirmar");
  $smarty->assign("msg_confirma_remesa_009", " del acreedor ");
  
  //Limpia Datos Acreedor
  $smarty->assign("msg_limpia_datos_001", "Limpiar Datos del Acreedor");
  $smarty->assign("msg_limpia_datos_002", "Seleccionar Acreedor");
  $smarty->assign("msg_limpia_datos_003", "Limpiar");
  //emitir_remesa
  $smarty->assign("msg_emitir_remesa_001", "Adeudos a Consumidores(CORE). Emisi�n de la remesa");
  $smarty->assign("msg_emitir_remesa_002", "Fecha de Cargo (dd/mm/aaaa)");
  $smarty->assign("msg_emitir_remesa_003", "Importe total");
  $smarty->assign("msg_emitir_remesa_004", "N�mero de recibos");
  $smarty->assign("msg_emitir_remesa_005", "Descartar");
  $smarty->assign("msg_emitir_remesa_006", "Aceptar");
  //generar_remesa
  $smarty->assign("msg_generar_remesa_001", "Adeudos a Consumidores(CORE). Resumen de la remesa emitida");
  $smarty->assign("msg_generar_remesa_002", "Acreedor");
  $smarty->assign("msg_generar_remesa_003", "Fecha de cargo");
  $smarty->assign("msg_generar_remesa_004", "Importe total");
  $smarty->assign("msg_generar_remesa_005", "N�mero de recibos");
  $smarty->assign("msg_generar_remesa_006", "Volver");
  $smarty->assign("msg_generar_remesa_007", "Descargar");
  $smarty->assign("msg_generar_remesa_008", "Imprimir Informe");
  $smarty->assign("msg_generar_remesa_009", "Imprimir Recibos");
  //multirecibo
  $smarty->assign("msg_multirecibo_001", "Adeudos a Consumidores(CORE). Cambios multirecibo de la remesa ");
  $smarty->assign("msg_multirecibo_002", "Conceptos");
  $smarty->assign("msg_multirecibo_003", "Ref.Adeudo");
  $smarty->assign("msg_multirecibo_004", "Fecha de Pago (dd/mm/aaaa)");
  $smarty->assign("msg_multirecibo_005", "Tipo Adeudo");
  $smarty->assign("msg_multirecibo_006", "Importe");
  $smarty->assign("msg_multirecibo_007", "Aceptar");
  $smarty->assign("msg_multirecibo_008", "Cancelar");
  //EligeEmisionCore
  $smarty->assign("msg_elige_emision_core_001", "Emisi�n de la remesa");
  $smarty->assign("msg_elige_emision_core_002", "LA EMISI�N CONTIENE ADEUDOS A CUENTAS EN ENTIDADES QUE NO ADMITEN PLAZO COR1 POR LO QUE HAN DE PRESENTARSE EN EL PLAZO CORE. Vd. TIENE DOS OPCIONES:");
  $smarty->assign("msg_elige_emision_core_003", "1.- USAR EL BOT�N <span class='FieldValues'>[Emitir todos los recibos como CORE]</span>");
  $smarty->assign("msg_elige_emision_core_004", "o");
  $smarty->assign("msg_elige_emision_core_005", "2.-EMITIR-ENVIAR POR SEPARADO LOS ADEUDOS CORE Y LOS COR1. PARA ELLO USAR� EL BOT�N <span class='FieldValues'>[Emitir s�lo recibos CORE]</span> O <span class='FieldValues'>[Emitir s�lo recibos COR1]</span> PARA EMITIR LOS DE UN TIPO Y, POSTERIORMENTE, VOLVER� A ENTRAR EN LA APLICACI�N CON EL MISMO ACREEDOR. SE LE CONDUCIR� DIRECTAMENTE A LA EMISI�N DE LOS RECIBOS RESTANTES.");
  $smarty->assign("msg_elige_emision_core_005b", "NOTA: SI NO EMITE LA SEGUNDA PARTE EL MISMO D�A, LOS PLAZOS DE EMISI�N PUEDEN CAMBIAR Y EN ESE CASO TENDR�A QUE REVISAR LOS RECIBOS QUE QUEDAN POR EMITIR. ");
  $smarty->assign("msg_elige_emision_core_006", "PARA M�S INFORMACI�N LEA EL GU�A-F�CIL ARRIBA EN ESTA P�GINA O CONSULTE CON LA ENTIDAD.");
  $smarty->assign("msg_elige_emision_core_007", "Recibos CORE:");
  $smarty->assign("msg_elige_emision_core_008", "Importe total:");  
  $smarty->assign("msg_elige_emision_core_009", "Recibos COR1:");
  $smarty->assign("msg_elige_emision_core_010", "Importe total:");  
  $smarty->assign("msg_elige_emision_core_011", "Descartar");
  $smarty->assign("msg_elige_emision_core_012", "Emitir s�lo recibos CORE");
  $smarty->assign("msg_elige_emision_core_013", "Emitir s�lo recibos COR1");
  $smarty->assign("msg_elige_emision_core_014", "Emitir todos los recibos como CORE");  
  //listar_historico
  $smarty->assign("msg_listar_historico_001", "Adeudos a Consumidores(CORE). Hist�rico de remesas emitidas del acreedor");
  $smarty->assign("msg_listar_historico_002", "Plazo y Nombre de la remesa");
  $smarty->assign("msg_listar_historico_003", "Ordena por remesa ascendentemente");
  $smarty->assign("msg_listar_historico_004", "Ordena por remesa descendentemente");
  $smarty->assign("msg_listar_historico_005", "Fecha de Confecci�n");
  $smarty->assign("msg_listar_historico_006", "Ordena por fecha de emisi�n ascendentemente");
  $smarty->assign("msg_listar_historico_007", "Ordena por fecha de emisi�n descendentemente");
  $smarty->assign("msg_listar_historico_008", "Fecha de Cargo");
  $smarty->assign("msg_listar_historico_009", "Ordena por fecha de cargo ascendentemente");
  $smarty->assign("msg_listar_historico_010", "Ordena por fecha de cargo descendentemente");
  $smarty->assign("msg_listar_historico_011", "Recibos");
  $smarty->assign("msg_listar_historico_012", "Importe total");
  $smarty->assign("msg_listar_historico_013", "Estado Emisi�n");
  $smarty->assign("msg_listar_historico_014", "Descargar");
  $smarty->assign("msg_listar_historico_015", "Buscar");
  $smarty->assign("msg_listar_historico_016", "Imprimir");
  $smarty->assign("msg_listar_historico_017", "Importar Remesa");
  $smarty->assign("msg_listar_historico_018", "Borrar");
  $smarty->assign("msg_listar_historico_019", "Presentaci�n");
  $smarty->assign("msg_listar_historico_020", "Descargar XML");
  $smarty->assign("msg_listar_historico_021", "Descargar");
  $smarty->assign("msg_listar_historico_022", "Puede consultar el estado de las remesas en");
  $smarty->assign("msg_listar_historico_023", "Ficheros->Consulta ficheros enviados");
  
  //listar_historico_recibos
  $smarty->assign("msg_listar_historico_recibos_001", "Fecha de Confecci�n");
  $smarty->assign("msg_listar_historico_recibos_002", "Fecha de Pago");
  $smarty->assign("msg_listar_historico_recibos_003", "Recibos");
  $smarty->assign("msg_listar_historico_recibos_004", "Importe");
  $smarty->assign("msg_listar_historico_recibos_005", "Adeudos a Consumidores(CORE). Lista de recibos de la remesa emitida");
  $smarty->assign("msg_listar_historico_recibos_006", "Nombre Deudor");
  $smarty->assign("msg_listar_historico_recibos_007", "Ordena por referencia ascendentemente");
  $smarty->assign("msg_listar_historico_recibos_008", "Ordena por referencia descendentemente");
  $smarty->assign("msg_listar_historico_recibos_009", "Importe");
  $smarty->assign("msg_listar_historico_recibos_010", "Ordena por titular ascendentemente");
  $smarty->assign("msg_listar_historico_recibos_011", "Ordena por titular descendentemente");
  $smarty->assign("msg_listar_historico_recibos_012", "F. Pago");
  $smarty->assign("msg_listar_historico_recibos_013", "Ref.Adeudo");
  $smarty->assign("msg_listar_historico_recibos_014", "Concepto");
  $smarty->assign("msg_listar_historico_recibos_015", "Volver");
  $smarty->assign("msg_listar_historico_recibos_016", "Imprimir Informe");
  $smarty->assign("msg_listar_historico_recibos_017", "Imprimir Recibos");
  $smarty->assign("msg_listar_historico_recibos_018", " del acreedor ");
  $smarty->assign("msg_listar_historico_recibos_019", "Plazo");
  $smarty->assign("msg_listar_historico_recibos_020", "Ordena por fecha de pago ascendentemente");
  $smarty->assign("msg_listar_historico_recibos_021", "Ordena por fecha de pago descendentemente");
  $smarty->assign("msg_listar_historico_recibos_022", "Modo de presentaci�n");
  //mostrar_recibo
  $smarty->assign("msg_mostrar_recibo_001", "Adeudos a Consumidores(CORE). Recibo ya emitido de la remesa");
  $smarty->assign("msg_mostrar_recibo_002", "Fecha de cargo");
  $smarty->assign("msg_mostrar_recibo_003", "Referencia");
  $smarty->assign("msg_mostrar_recibo_004", "Acreedor/Emisor");
  $smarty->assign("msg_mostrar_recibo_005", "Titular");
  $smarty->assign("msg_mostrar_recibo_006", "Conceptos");
  $smarty->assign("msg_mostrar_recibo_007", "CCC (Cuenta)");
  $smarty->assign("msg_mostrar_recibo_008", "Importe");
  $smarty->assign("msg_mostrar_recibo_009", "Titular CCC");
  $smarty->assign("msg_mostrar_recibo_010", "Domicilio");
  $smarty->assign("msg_mostrar_recibo_011", "C�d. devoluci�n");
  $smarty->assign("msg_mostrar_recibo_012", "Localidad y C.P.");
  $smarty->assign("msg_mostrar_recibo_013", "Ref. interna");
  $smarty->assign("msg_mostrar_recibo_014", "Volver");
  $smarty->assign("msg_mostrar_recibo_015", "Imprimir duplicado");
  $smarty->assign("msg_mostrar_recibo_016", "Inf.Adicional");

  //busquedasCriterios
  $smarty->assign("msg_busquedasCriterios_001", "Adeudos a Consumidores(CORE). B�squeda de documentos por criterios");
  $smarty->assign("msg_busquedasCriterios_002", "Ref. Mandato");
  $smarty->assign("msg_busquedasCriterios_003", "Importe");
  $smarty->assign("msg_busquedasCriterios_004", "Nombre Deudor");
  $smarty->assign("msg_busquedasCriterios_005", "Ref. Adeudo");
  $smarty->assign("msg_busquedasCriterios_006", "Cuenta Deudor");
  $smarty->assign("msg_busquedasCriterios_007", "F. Pago (desde)");
  $smarty->assign("msg_busquedasCriterios_008", "hasta");
  $smarty->assign("msg_busquedasCriterios_009", "Bic_Swift");
  $smarty->assign("msg_busquedasCriterios_010", "F. Confecci�n (desde)");
  $smarty->assign("msg_busquedasCriterios_011", "Aceptar");
  $smarty->assign("msg_busquedasCriterios_012", "Volver");
  $smarty->assign("msg_busquedasCriterios_013", "Formato de fecha dd/mm/aaaa");
  $smarty->assign("msg_busquedasCriterios_014", " del acreedor ");
  //listar_historico_busquedas
  $smarty->assign("msg_listar_historico_busquedas_001", "Por Ref. Mandato");
  $smarty->assign("msg_listar_historico_busquedas_002", "Por Importe");
  $smarty->assign("msg_listar_historico_busquedas_003", "Por Nombre Deudor");
  $smarty->assign("msg_listar_historico_busquedas_004", "Por Ref.Adeudo");
  $smarty->assign("msg_listar_historico_busquedas_005", "Por Cuenta Deudor");
  $smarty->assign("msg_listar_historico_busquedas_006", "Por Bic_swift");
  $smarty->assign("msg_listar_historico_busquedas_007", "F.Pago (Desde)");
  $smarty->assign("msg_listar_historico_busquedas_008", "F.Pago (Hasta)");
  $smarty->assign("msg_listar_historico_busquedas_009", "F.Confecci�n (Desde)");
  $smarty->assign("msg_listar_historico_busquedas_010", "F.Confecci�n (Hasta)");
  $smarty->assign("msg_listar_historico_busquedas_011", "Total recuperados");
  $smarty->assign("msg_listar_historico_busquedas_012", "Adeudos a Consumidores(CORE). Resultado de la b�squeda");
  $smarty->assign("msg_listar_historico_busquedas_013", "Nombre Deudor");
  $smarty->assign("msg_listar_historico_busquedas_014", "Ordena por deudor ascendentemente");
  $smarty->assign("msg_listar_historico_busquedas_015", "Ordena por deudor descendentemente");
  $smarty->assign("msg_listar_historico_busquedas_016", "Importe");
  $smarty->assign("msg_listar_historico_busquedas_017", "Ordena por importe ascendentemente");
  $smarty->assign("msg_listar_historico_busquedas_018", "Ordena por importe descendentemente");
  $smarty->assign("msg_listar_historico_busquedas_019", "F. Pago");
  $smarty->assign("msg_listar_historico_busquedas_020", "Ref.Adeudo");
  $smarty->assign("msg_listar_historico_busquedas_021", "Concepto");
  $smarty->assign("msg_listar_historico_busquedas_022", "Volver");
  $smarty->assign("msg_listar_historico_busquedas_023", " del acreedor ");
  $smarty->assign("msg_listar_historico_busquedas_024", "Plazo");  
  $smarty->assign("msg_listar_historico_busquedas_025", "Ordena por fecha ascendentemente");
  $smarty->assign("msg_listar_historico_busquedas_026", "Ordena por fecha descendentemente");  
 
 //migraOrdenantes
  $smarty->assign("msg_migra_ordenantes_001", "Migraci�n de datos del usuario desde AEBWeb 19");
  $smarty->assign("msg_migra_ordenantes_002", "Se est� migrando la informaci�n del usuario.");  
  $smarty->assign("msg_migra_ordenantes_003", "Por favor, espere...");
  
  $smarty->assign("msg_migra_ordenantes_004", "- Debido a un cambio normativo, <b>a partir de ahora, los adeudos por domiciliaci�n s�lo se podr�n tramitar por la Norma 19.14 SEPA, no podr�n seguir tramit�ndose por la norma 19</b>.");
  $smarty->assign("msg_migra_ordenantes_005", "- Para facilitarle la transici�n, <b>se le est�n migrando a esta aplicaci�n los datos de ordenantes, librados, remesas y recibos desde la aplicaci�n AEBWeb 19</b>. A los nombres de las remesas migradas se les a�adir� '_MG' al final para que las pueda diferenciar.");
  $smarty->assign("msg_migra_ordenantes_006", "- La aplicaci�n <b>AEBWeb 19 se mantendr� como una aplicaci�n de 'solo lectura'</b> para que pueda verificar los datos que se han migrado.");
  $smarty->assign("msg_migra_ordenantes_007", "- <b>Nota:</b> Los datos almacenados en hist�rico de la aplicaci�n AEBWeb 19, no se migrar�n autom�ticamente, si desea conservar alguna remesa ya emitida, puede descargarla desde hist�rico en AEBWeb 19 e importarla desde AEBWeb 19 SEPA.");
  
  $smarty->assign("msg_migra_ordenantes_010", "Migraci�n de datos del usuario desde 'Anticipos de Cr�dito y Gesti�n de Cobros'");
  $smarty->assign("msg_migra_ordenantes_011", "Se est� migrando la informaci�n del usuario.");  
  $smarty->assign("msg_migra_ordenantes_012", "Por favor, espere...");
  
 
  $smarty->assign("msg_migra_ordenantes_013", "- Debido a un cambio normativo, <b>los anticipos no podr�n seguir tramit�ndose por la norma 58</b>.");
  $smarty->assign("msg_migra_ordenantes_014", "- Para facilitarle la transici�n, <b>se le est�n migrando a esta aplicaci�n los datos de ordenantes, deudores, remesas y cr�ditos desde El Cuaderno Online de 'Anticipos de Cr�dito y Gesti�n de Cobros'</b>. A los nombres de las remesas migradas se les a�adir� '.MG' al final para que las pueda diferenciar.");
  $smarty->assign("msg_migra_ordenantes_015", "- <b>El Cuaderno Online de 'Anticipos de Cr�dito y Gesti�n de Cobros' se mantendr� como una aplicaci�n de 'solo lectura'</b> para que pueda verificar los datos que se han migrado.");
  $smarty->assign("msg_migra_ordenantes_016", "- <b>Nota:</b> Los datos almacenados en hist�rico del Cuaderno Online de 'Anticipos de Cr�dito y Gesti�n de Cobros', no se migrar�n autom�ticamente, si desea conservar alguna remesa ya emitida, puede descargarla desde hist�rico del Cuaderno Online de 'Anticipos de Cr�dito y Gesti�n de Cobros' e importarla en esta aplicaci�n.");
  
  
  $smarty->assign("msg_migra_ordenantes_008", "Resumen del proceso de migraci�n");
  $smarty->assign("msg_migra_ordenantes_009", "Continuar");
  
  // avisar_fin_contrato_concepto_ampliado
  $smarty->assign("msg_avisar_fin_contrato_concepto_ampliado_001", "Descartar");
  $smarty->assign("msg_avisar_fin_contrato_concepto_ampliado_002", "Continuar");
  $smarty->assign("msg_avisar_fin_contrato_concepto_ampliado_003", "Aviso de finalizaci�n del contrato de Concepto Ampliado");
  $smarty->assign("msg_avisar_fin_contrato_concepto_ampliado_004", "Ha cancelado el contrato de Concepto Ampliado y como consecuencia se ha eliminado del concepto de todos sus adeudos el texto que superaba los 140 caracteres.");
    
  //eligeTipoAbono
  $smarty->assign("msg_elige_tipo_abono_001", "Elecci�n del modo de presentaci�n");
  $smarty->assign("msg_elige_tipo_abono_002", "Modo de presentaci�n");
  $smarty->assign("msg_elige_tipo_abono_003", "Al cobro");
  $smarty->assign("msg_elige_tipo_abono_004", "A financiar");
  $smarty->assign("msg_elige_tipo_abono_005", "Aceptar");
  $smarty->assign("msg_elige_tipo_abono_006", "Descartar");
  $smarty->assign("msg_elige_tipo_abono_007", "Generar remesa de <span class='FieldValues'>Anticipo de cr�ditos (adeudos directos financiados)</span>. Se requiere l�nea de descuento.");
  $smarty->assign("msg_elige_tipo_abono_008", "Generar remesa de <span class='FieldValues'>Adeudos directos normales (para su gesti�n a vencimiento)</span>. Requiere ser emisor SEPA.");
  
  // funcionesMigraOrdenantes19.php
  $msg_funciones_migrar_ordenantes_19_001 = "Ordenantes migrados del usuario";
  $msg_funciones_migrar_ordenantes_19_002 = "Nombre del ordenante";
  $msg_funciones_migrar_ordenantes_19_003 = "Nif-Sufijo";
  $msg_funciones_migrar_ordenantes_19_004 = "Cuenta";
  $msg_funciones_migrar_ordenantes_19_005 = "-No se ha migrado ning�n ordenante.";  
  
  $msg_funciones_migrar_ordenantes_19_006 = "Librados migrados del usuario";
  $msg_funciones_migrar_ordenantes_19_007 = "Referencia del mandato";
  $msg_funciones_migrar_ordenantes_19_008 = "Nombre del titular";
  $msg_funciones_migrar_ordenantes_19_009 = "IBAN";
  $msg_funciones_migrar_ordenantes_19_010 = "-No se ha migrado ning�n librado.";  
  
  $msg_funciones_migrar_ordenantes_19_011 = "Remesas migradas del usuario";  
  $msg_funciones_migrar_ordenantes_19_012 = "N�mero de remesas: ";  
  $msg_funciones_migrar_ordenantes_19_013 = "-No se ha migrado ninguna remesa.";  
  
  $msg_funciones_migrar_ordenantes_58_001 = "Ordenantes migrados del usuario";
  $msg_funciones_migrar_ordenantes_58_002 = "Nombre del ordenante";
  $msg_funciones_migrar_ordenantes_58_003 = "Nif-Sufijo";
  $msg_funciones_migrar_ordenantes_58_004 = "Cuenta";
  $msg_funciones_migrar_ordenantes_58_005 = "-No se ha migrado ning�n ordenante.";  
  
  $msg_funciones_migrar_ordenantes_58_006 = "Deudores migrados del usuario";
  $msg_funciones_migrar_ordenantes_58_007 = "Ref. mandato";
  $msg_funciones_migrar_ordenantes_58_008 = "Nombre del titular";
  $msg_funciones_migrar_ordenantes_58_009 = "IBAN";
  $msg_funciones_migrar_ordenantes_58_010 = "-No se ha migrado ning�n deudor.";  
  
  $msg_funciones_migrar_ordenantes_58_011 = "Remesas migradas del usuario";  
  $msg_funciones_migrar_ordenantes_58_012 = "N�mero de remesas: ";  
  $msg_funciones_migrar_ordenantes_58_013 = "-No se ha migrado ninguna remesa.";  
  
  //enviar_archivo
  $smarty->assign("msg_enviar_archivo_001", "Adeudos a Consumidores(CORE). Importaci�n de remesas");
  $smarty->assign("msg_enviar_archivo_002", "Archivo a importar");
  $smarty->assign("msg_enviar_archivo_003", "Nombre de la remesa");
  $smarty->assign("msg_enviar_archivo_004", "Importar");
  $smarty->assign("msg_enviar_archivo_005", " del acreedor ");
  $smarty->assign("msg_enviar_archivo_006", "Tama�o m�ximo (9 MB)");
  
  //actualizar_cuentas
  $smarty->assign("msg_actualizar_cuentas_001", "Adeudos entre consumidores(CORE). Actualizaci�n de cuentas de los deudores.");
  $smarty->assign("msg_actualizar_cuentas_002", "Archivo a importar (AEB 72)");
  $smarty->assign("msg_actualizar_cuentas_003", "Volver");
  $smarty->assign("msg_actualizar_cuentas_004", "Importar");
  
  //importar_remesa
  $smarty->assign("msg_importar_remesa_001", "Adeudos a Consumidores(CORE). Resultado de la importaci�n de la remesa ");
  $smarty->assign("msg_importar_remesa_002", "Archivo");
  $smarty->assign("msg_importar_remesa_003", "Nombre de la remesa");
  $smarty->assign("msg_importar_remesa_004", "Estado");
  $smarty->assign("msg_importar_remesa_005", "Recibos importados");
  $smarty->assign("msg_importar_remesa_006", "Resumen del proceso de importaci�n");
  $smarty->assign("msg_importar_remesa_007", "Referencia del Mandato");
  $smarty->assign("msg_importar_remesa_008", "Deudor");
  $smarty->assign("msg_importar_remesa_009", "Recibo");
  $smarty->assign("msg_importar_remesa_010", "Avisos");
  $smarty->assign("msg_importar_remesa_011", "Volver");
  $smarty->assign("msg_importar_remesa_012", "Imprimir");
  $smarty->assign("msg_importar_remesa_013", " del acreedor ");
  $smarty->assign("msg_importar_remesa_014", "Adeudos a Consumidores(CORE). Resultado de la importaci�n.");
  $smarty->assign("msg_importar_remesa_015", "Aviso: Se ha importado una remesa con concepto ampliado.");
  
  //importar_remesa72
  $smarty->assign("msg_importar_remesa_72_001", "Adeudos a Consumidores(CORE). Resultado de la importaci�n del fichero 72.");
  $smarty->assign("msg_importar_remesa_72_002", "Archivo");
  $smarty->assign("msg_importar_remesa_72_003", "Estado");
  $smarty->assign("msg_importar_remesa_72_004", "Cuentas actualizadas");
  $smarty->assign("msg_importar_remesa_72_005", "Datos de los ordenantes le�dos");
  $smarty->assign("msg_importar_remesa_72_006", "Identificador");
  $smarty->assign("msg_importar_remesa_72_007", "Acreedor");
  $smarty->assign("msg_importar_remesa_72_008", "Avisos");  
  $smarty->assign("msg_importar_remesa_72_009", "Datos de los deudores le�dos");  
  $smarty->assign("msg_importar_remesa_72_010", "Referencia");  
  $smarty->assign("msg_importar_remesa_72_011", "Deudor");  
  $smarty->assign("msg_importar_remesa_72_012", "Cuenta Antigua");  
  $smarty->assign("msg_importar_remesa_72_013", "Cuenta Nueva");  
  $smarty->assign("msg_importar_remesa_72_014", "Avisos");  
  $smarty->assign("msg_importar_remesa_72_015", "Volver");  
  $smarty->assign("msg_importar_remesa_72_016", "Imprimir");  
  
  
  /*$smarty->assign("msg_importar_remesa_72_005", "Resumen del proceso de importaci�n");
  $smarty->assign("msg_importar_remesa_72_006", "Referencia del Mandato");
  $smarty->assign("msg_importar_remesa_72_007", "Deudor");
  $smarty->assign("msg_importar_remesa_72_008", "Recibo");
  $smarty->assign("msg_importar_remesa_72_009", "Avisos");
  $smarty->assign("msg_importar_remesa_72_010", "Volver");
  $smarty->assign("msg_importar_remesa_72_011", "Imprimir");
  $smarty->assign("msg_importar_remesa_72_012", " del acreedor ");*/
  
  //Ayuda
  $smarty->assign("msg_ayuda_001", "Adeudos a consumidores (CORE). Ayuda de la aplicaci�n AEBWeb 19 SEPA CORE v. ".$_SESSION["version"]);
  $smarty->assign("msg_ayuda_002", "Asistente");
  $smarty->assign("msg_ayuda_003", "Marque esta opci�n si desea ver el men� contextual y consejos �tiles sobre la pantalla a la vista.");
  $smarty->assign("msg_ayuda_004", "En los asistentes");
  $smarty->assign("msg_ayuda_005", "[Texto]");
  $smarty->assign("msg_ayuda_006", "Campo");
  $smarty->assign("msg_ayuda_007", "indican un bot�n / enlace respectivamente que al pulsar desencadenan una acci�n.");
  $smarty->assign("msg_ayuda_008", "Idioma");
  $smarty->assign("msg_ayuda_009", "Seleccione el idioma en el que podr� trabajar con la aplicaci�n");
  $smarty->assign("msg_ayuda_010", "C�mo crear y emitir r�pidamente la primera remesa de recibos");
  $smarty->assign("msg_ayuda_011", "1� Asigne un nombre al conjunto de recibos con el que va a trabajar ");
  $smarty->assign("msg_ayuda_012", "EJ. CUOTAS PE�A DEPORTIVA LERME�A.");
  $smarty->assign("msg_ayuda_013", "Vaya al men� Remesas y pulse el bot�n <span class='FieldValues'>[Crear remesa]</span>.");
  $smarty->assign("msg_ayuda_014", "2� Se abrir� la pantalla 'Lista de recibos'.");//salto
  $smarty->assign("msg_ayuda_015", "Elabore los recibos a cobrar pulsando <span class='FieldValues'>[A�adir recibo]</span> y siga las instrucciones del asistente. ");
  $smarty->assign("msg_ayuda_016", "3� Emita la remesa para su tramitaci�n por el banco-caja.");
  $smarty->assign("msg_ayuda_017", "Desde la Lista de recibos, pulse el bot�n <span class='FieldValues'>[Emitir/Enviar recibos]</span>.");  
  $smarty->assign("msg_ayuda_018", "Manual completo de la aplicaci�n");
  $smarty->assign("msg_ayuda_019", "En este enlace le proporcionamos un manual completo y detallado de la aplicaci�n en formato PDF.");
  //util/header
  $smarty->assign("msg_header_001", "Acceso no v�lido o caducado");
  $smarty->assign("msg_header_002", "Id.Usuario:");
  $smarty->assign("msg_header_003", "Salir");

  //importaOrdenanteYSusDatos
  $smarty->assign("msg_importaAcreedorYSusDatos_001", "Importaci�n de acreedores y sus datos.");
  $smarty->assign("msg_importaAcreedorYSusDatos_002", "Archivo a importar");
  $smarty->assign("msg_importaAcreedorYSusDatos_003", "Volver");
  $smarty->assign("msg_importaAcreedorYSusDatos_004", "Importar");  
  //Mensajes en m�dulos PHP o en m�dulos sin plantillas HTML

  //mostrar_manual
  $msg_mostrar_manual_001 = "El fichero PDF no existe o la ruta no es correcta";
  $msg_mostrar_manual_002 = "Ruta actual:";
  
  
  //importar_desde_recibos_hlp
  $smarty->assign("importar_desde_recibos_hlp_001", "-Para <span class='FieldValues'>[Importar]</span> los recibos (Norma AEB19 SEPA), emitidos desde esta u otra aplicaci�n a la remesa actual, ha de escribir la ruta al fichero o bien pulsar <span class='FieldValues'>[Examinar]</span> para acceder a un navegador.");
  $smarty->assign("importar_desde_recibos_hlp_002", "-Para regresar a la lista de recibos de la remesa seleccionada, pulse el bot�n <span class='FieldValues'>[Volver]</span>.");
  
  //importar_remesa
  $msg_importar_remesa_001 = "Importado";
  $msg_importar_remesa_002 = "Importe no v�lido, se inserta 0,00.";
  $msg_importar_remesa_003 = "C�digo Postal no v�lido, se inserta a blancos.";
  $msg_importar_remesa_004 = "No importado";
  $msg_importar_remesa_005 = "CCC incorrecta.";
  $msg_importar_remesa_006 = "Referencia o nombre del titular en blanco.";
  $msg_importar_remesa_007 = "Incidencia con la BD.";
  $msg_importar_remesa_008 = "El deudor ya existe con otra CCC.";
  $msg_importar_remesa_009 = "El deudor ya existe.";
  $msg_importar_remesa_010 = "Remesa importada correctamente";
  $msg_importar_remesa_011 = "Remesa con incidencias en su estructura";
  $msg_importar_remesa_012 = "El archivo no es de norma 19, 58 ni 1914 ni tiene formato XML.";
  $msg_importar_remesa_013 = "No se ha podido importar el archivo seleccionado";
  $msg_importar_remesa_014 = "Ya existe una remesa con ese nombre, asigne otro.";
  $msg_importar_remesa_015 = "REM"; // Prefijo del nombre asignado a las remesas importadas desde acreedores.
  $msg_importar_remesa_016 = "Fallo en el fichero. No se encuentra la etiqueta 'CstmrDrctDbtInitn' o 'Document'. Compruebe que el fichero es de la norma adecuada.";
  $msg_importar_remesa_017 = "Fallo en el fichero. No se encuentra la etiqueta 'GrpHdr'.";
  $msg_importar_remesa_018 = "Fallo en la importaci�n. No se ha podido sugerir un sufijo v�lido para el acreedor.";
  $msg_importar_remesa_019 = "Fallo en el fichero. No se encuentra la etiqueta 'InitgPty'.";
  $msg_importar_remesa_020 = "Fallo en el fichero. No se encuentra la etiqueta 'Id' de 'InitgPty'.";
  $msg_importar_remesa_021 = "Fallo en el fichero. No se encuentra la etiqueta 'CdtrSchmeId'.";
  $msg_importar_remesa_022 = "Fallo en el fichero. No se encuentra la etiqueta 'Id' de 'CdtrSchmeId'.";
  $msg_importar_remesa_023 = "Fallo en el fichero. No se encuentra la etiqueta 'PrvtId' de 'Id' de 'CdtrSchmeId'.";
  $msg_importar_remesa_024 = "Fallo en el fichero. No se encuentra la etiqueta 'Othr' de 'PrvtId' de 'Id' de 'CdtrSchmeId'.";
  $msg_importar_remesa_025 = "Fallo en el fichero. El NIF del acreedor dentro de la etiqueta 'CdtrSchmeId' es incorrecto.";
  $msg_importar_remesa_026 = "Fallo en el fichero. El sufijo del presentador dentro de la etiqueta 'GrpHdr' debe tener longitud tres.";
  $msg_importar_remesa_027 = "Fallo en el fichero. El sufijo del presentador dentro de la etiqueta 'GrpHdr' debe ser num�rico.";
  $msg_importar_remesa_028 = "Fallo en el fichero. La etiqueta 'CreDtTm' tiene una fecha incorrecta.";
  $msg_importar_remesa_029 = "Fallo en el fichero. La etiqueta 'NbOfTxs' dentro de 'GrpHdr' tiene un valor incorrecto.";
  $msg_importar_remesa_030 = "Fallo en el fichero. La etiqueta 'CtrlSum' dentro de 'GrpHdr' tiene un valor incorrecto.";
  $msg_importar_remesa_031 = "Fallo en el fichero. La etiqueta 'NbOfTxs' dentro de 'PmtInf' tiene un valor incorrecto.";
  $msg_importar_remesa_032 = "Fallo en el fichero. La etiqueta 'CtrlSum' dentro de 'PmtInf' tiene un valor incorrecto.";
  $msg_importar_remesa_033 = "Fallo en el fichero. La etiqueta 'ReqdColltnDt' tiene una fecha incorrecta.";
  $msg_importar_remesa_034 = "Fallo en el fichero. Falta la etiqueta 'Cdtr' dentro del bloque 'PmtInf'.";
  $msg_importar_remesa_035 = "No se importan los recibos. Los datos del acreedor son incorrectos.";
  $msg_importar_remesa_036 = "Fallo en el fichero. Falta la etiqueta 'Dbtr' dentro del bloque 'DrctDbtTxInf'.";
  $msg_importar_remesa_037 = "La longitud de la cuenta supera los 34 caracteres permitidos.";
  $msg_importar_remesa_038 = "Fallo en el fichero. No se encuentra la etiqueta 'MndtRltdInf' de 'DrctDbtTx' o viene vac�a.";
  $msg_importar_remesa_039 = "Fallo en el fichero. No se encuentra la etiqueta 'DrctDbtTx'.";
  $msg_importar_remesa_040 = "Fallo en la importaci�n. Se ha producido un error al insertar el deudor.";
  $msg_importar_remesa_041 = "No se importan los recibos. Hay datos de deudor incorrectos.";
  $msg_importar_remesa_042 = "Importe err�neo. Se ha sustituido a valor 0,00.";
  $msg_importar_remesa_043 = "El recibo tiene datos incorrectos.";
  $msg_importar_remesa_044 = "Fallo en el fichero. El total de recibos del bloque 'PmtInf' no es correcto.";
  $msg_importar_remesa_045 = "Fallo en el fichero. El total de importes del bloque 'PmtInf' no es correcto.";
  $msg_importar_remesa_046 = "Fallo en la importaci�n. Se ha producido un error al insertar la remesa.";
  $msg_importar_remesa_047 = "Fallo en la importaci�n. Se ha producido un error al insertar un recibo.";
  $msg_importar_remesa_048 = "Fallo en el fichero. El total de recibos del bloque 'GrpHdr' no es correcto.";
  $msg_importar_remesa_049 = "Fallo en el fichero. El total de importes de los recibos no es correcto.";
  $msg_importar_remesa_050 = "Fallo en el fichero. No se encuentra la etiqueta 'PmtMtd' de 'PmtInf' o tiene un valor distinto de 'DD'.";
  $msg_importar_remesa_051 = "Fallo en la importaci�n. Se ha producido un error al insertar el acreedor.";
  $msg_importar_remesa_052 = "Fallo en el fichero. No se encuentra la etiqueta 'PmtTpInf' de 'PmtInf'.";
  $msg_importar_remesa_053 = "Fallo en el fichero. No se encuentra la etiqueta 'SvcLvl' de 'PmtTpInf' de 'PmtInf'.";
  $msg_importar_remesa_054 = "Fallo en el fichero. No se encuentra la etiqueta 'Cd' de 'SvcLvl' de 'PmtTpInf' o tiene un valor distinto de 'SEPA'.";
  $msg_importar_remesa_055 = "Fallo en el fichero. No se encuentra la etiqueta 'LclInstrm' de 'PmtTpInf' de 'PmtInf'.";
  $msg_importar_remesa_056 = "Fallo en el fichero. No se encuentra la etiqueta 'Cd' de 'LclInstrm' de 'PmtTpInf' o tiene un valor distinto de 'CORE', 'COR1' o 'B2B'.";
  $msg_importar_remesa_057 = "Fallo en el fichero. El sufijo del acreedor dentro de la etiqueta 'CdtrSchmeId' debe ser num�rico.";
  $msg_importar_remesa_058 = "Se ha convertido el CCC a IBAN.";
  $msg_importar_remesa_059 = "El acreedor ya existe.";
  $msg_importar_remesa_060 = "El ISO de pa�s no es correcto. ";
  $msg_importar_remesa_061 = "La direcci�n est� vac�a o el pa�s es incorrecto, no se import�. ";
  $msg_importar_remesa_062 = "Prop�sito de recibo err�neo. Se deja vac�o. ";
  $msg_importar_remesa_063 = "Tipo de recibo err�neo. Se deja vac�o. ";
  $msg_importar_remesa_064 = "Fallo en la importaci�n. La referencia del mandato del deudor debe ser �nica.";
  $msg_importar_remesa_065 = "La referencia del mandato del deudor ya existe.";
  $msg_importar_remesa_066 = "Fallo en el fichero. No se encuentra la etiqueta 'PmtInf'.";
  $msg_importar_remesa_067 = "Fallo en el fichero. El tipo de adeudo no es correcto.";
  $msg_importar_remesa_068 = "Fallo en el fichero. La etiqueta 'DtOfSgntr' de 'MndtRltdInf' tiene una fecha incorrecta.";
  $msg_importar_remesa_069 = "Fallo en el fichero. El identificador del acreedor (la etiqueta 'CdtrSchmeId') debe tener 16 posiciones.";
  $msg_importar_remesa_070 = "Fallo en el fichero. El identificador del acreedor no aparece o viene vac�o.";
  $msg_importar_remesa_071 = "Fallo en el fichero. El d�gito de control del identificador del acreedor no es v�lido.";
  $msg_importar_remesa_072 = "Se ha cambiado el sufijo ZZZ por 000. ";
  $msg_importar_remesa_073 = "La cuenta del deudor no es un CCC o IBAN correcto. ";
  $msg_importar_remesa_074 = "No se encontr� el fichero.";
  $msg_importar_remesa_075 = "La fecha de firma no es v�lida y se ha sustituido por 31/10/2009. ";
  $msg_importar_remesa_076 = "El formato del tel�fono es incorrecto. Se deja vac�o. ";
  
  //importar_remesa_72
  $msg_importar_remesa72_001 = "Encontrado";
  $msg_importar_remesa72_002 = "El acreedor ya existe.";
  $msg_importar_remesa72_003 = "No encontrado";
  $msg_importar_remesa72_004 = "No existe el acreedor para ese usuario";
  $msg_importar_remesa72_005 = "Encontrado";
  $msg_importar_remesa72_006 = "Remesa importada correctamente";
  $msg_importar_remesa72_007 = "Remesa con incidencias en su estructura";
  $msg_importar_remesa72_008 = "El archivo no es de norma 72";
  $msg_importar_remesa72_009 = "No se ha podido importar el archivo seleccionado";  

  //Comprueba valores del acreedor al importar (1914)
  $msg_comprueba_valores_ord_importar_001 = "ERROR: El iso del pa�s no es v�lido.";
  $msg_comprueba_valores_ord_importar_002 = "ERROR:Falta el nombre del acreedor.";
  $msg_comprueba_valores_ord_importar_003 = "ERROR: La cuenta del acreedor no es un CCC o IBAN correcto.";
  $msg_comprueba_valores_ord_importar_004 = "ERROR: La cuenta del acreedor no es un IBAN espa�ol.";
  $msg_comprueba_valores_ord_importar_005 = "ERROR: El C�digo de entidad de la cuenta acreedora ha de ser de ABANCA (". $_SESSION["entidades"] . ").";
  $msg_comprueba_valores_ord_importar_006 = "ERROR: El CIF o NIF del acreedor no es correcto.";
  $msg_comprueba_valores_ord_importar_007 = "ERROR: El sufijo debe tener 3 d�gitos.";
  $msg_comprueba_valores_ord_importar_008 = "ERROR: Los datos de domicilio deben ir cumplimentados.";  
  $msg_comprueba_valores_ord_importar_009 = "ERROR: La identificaci�n del acreedor es incorrecta.";  

  //Comprueba valores del ordenante (19)
  $msg_comprueba_valores_ord_importar_010 = "ERROR: Falta el nombre del acreedor.";
  $msg_comprueba_valores_ord_importar_011 = "ERROR: la cuenta del acreedor no es correcta.";
  $msg_comprueba_valores_ord_importar_012 = "ERROR: El C�digo de entidad de la cuenta acreedora ha de ser de ABANCA (". $_SESSION["entidades"] . ").";
  $msg_comprueba_valores_ord_importar_013 = "ERROR: el CIF o NIF del acreedor no es correcto.";
  $msg_comprueba_valores_ord_importar_014 = "ERROR: el sufijo debe tener 3 d�gitos.";
  $msg_comprueba_valores_ord_importar_015 = "ERROR: el sufijo debe ser num�rico.";  
  
  //imprimir.php
  //Se incluyen los textos fijos que se incluyen en las generaciones de pdf

  //Datos del Acreedor
  $msg_imprimir_001 = "Nombre";
  $msg_imprimir_002 = "Cuenta(IBAN)";
  $msg_imprimir_003 = "Residencia fiscal";
  $msg_imprimir_004 = "Nif-Sufijo";
  $msg_imprimir_005 = "Domicilio";
  $msg_imprimir_006 = "Localidad";
  $msg_imprimir_007 = "Provincia";
  $msg_imprimir_008 = "Pa�s";
  $msg_imprimir_009 = "ACREEDOR";


  //Lista de Deudores
  $msg_imprimir_011 = "Referencia del Mandato";
  $msg_imprimir_012 = "Nombre del Titular";
  $msg_imprimir_013 = "IBAN";
  $msg_imprimir_014 = "Procedimiento Adeudo";
  $msg_imprimir_015 = "LISTA DE DEUDORES DEL ACREEDOR";
  $msg_imprimir_016 = "Total:";
  $msg_imprimir_017 = "Deudores";

  //Datos del librado
  $msg_imprimir_018 = "Residencia Fiscal";
  $msg_imprimir_019 = "Tipo de Pago";
  $msg_imprimir_020 = "Referencia del Mandato - Fecha Firma(dd/mm/aaaa)";
  $msg_imprimir_021 = "Procedimiento Adeudo";
  $msg_imprimir_022 = "Domicilio(Tipo y nombre de v�a, n�mero y piso)";
  $msg_imprimir_023 = "Localidad(C.P. y localidad)";
  $msg_imprimir_024 = "Provincia";
  $msg_imprimir_025 = "Pa�s";
  $msg_imprimir_026 = "Tel�fono";
  $msg_imprimir_027 = "E-mail";
  $msg_imprimir_028 = "DEUDOR";

  //Lista de remesas
  $msg_imprimir_029 = "Remesa";
  $msg_imprimir_030 = "Fecha de Creaci�n";
  $msg_imprimir_031 = "Recibos";
  $msg_imprimir_032 = "Importe total";
  $msg_imprimir_033 = "LISTA DE REMESAS DEL ACREEDOR";
  $msg_imprimir_034 = "Total:";
  $msg_imprimir_035 = "remesas";

  //Lista de recibos
  $msg_imprimir_036 = "Nombre Deudor";
  $msg_imprimir_037 = "Importe";
  $msg_imprimir_038 = "F. Pago";
  $msg_imprimir_039 = "Ref. Adeudo";
  $msg_imprimir_040 = "Concepto";
  $msg_imprimir_041 = "LISTA DE RECIBOS DE LA REMESA";
  $msg_imprimir_042 = "Total:";
  $msg_imprimir_043 = "recibos activos";
  $msg_imprimir_044 = "Importe Total:";
  $msg_imprimir_045 = "Nota: [X] indica que el recibo est� inactivo";

  //Lista de hist�rico de remesas
  $msg_imprimir_046 = "Plazo y Nombre de la remesa";
  $msg_imprimir_047 = "F. Emisi�n";
  $msg_imprimir_048 = "Recibos";
  $msg_imprimir_049 = "Importe total";
  $msg_imprimir_050 = "REMESAS EMITIDAS POR EL ACREEDOR";
  $msg_imprimir_051 = "Total:";
  $msg_imprimir_052 = "remesas";

  //Lista de recibos de una remesa del hist�rico
  $msg_imprimir_053 = "Nombre Deudor";
  $msg_imprimir_054 = "Importe";
  $msg_imprimir_055 = "F.Pago";
  $msg_imprimir_056 = "Ref. Adeudo";
  $msg_imprimir_057 = "Referencia del Mandato";
  $msg_imprimir_0570 = "Concepto";
  $msg_imprimir_058 = "Deudor";
  $msg_imprimir_059 = "Recibo";
  $msg_imprimir_060 = "Avisos";
  $msg_imprimir_061 = "Importe Total:";
  $msg_imprimir_062 = "Acreedor";
  $msg_imprimir_063 = "Fecha de Emisi�n";
  $msg_imprimir_064 = "Importe total";
  $msg_imprimir_065 = "Recibos";
  $msg_imprimir_066 = "Estado emisi�n";
  $msg_imprimir_067 = "Nombre";
  $msg_imprimir_068 = "IBAN - BIC(SWIFT)";
  $msg_imprimir_069 = "RESUMEN DE IMPORTACI�N DE LA REMESA";
  
  $msg_imprimir_070 = "Nombre de la remesa";
  $msg_imprimir_071 = "Estado";
  $msg_imprimir_072 = "Recibos importados";
  
  
  $msg_imprimir_073 = "Adeudos que incumplen el plazo (";
  $msg_imprimir_073b = ") entre fechas de presentaci�n y cargo";  
  
  $msg_imprimir_074 = "Nombre deudor";
  $msg_imprimir_075 = "Ref. Adeudo";
  $msg_imprimir_076 = "Importe";
  $msg_imprimir_077 = "Fecha de pago";
  $msg_imprimir_078 = "Recibos ya emitidos (duplicados)";
  $msg_imprimir_079 = "Recibos fuera de secuencia respecto a su emisi�n anterior";
  $msg_imprimir_080 = "Tipo Adeudo";
  
  //Lista de acreedores
  $msg_imprimir_081 = "Nombre del Acreedor";
  $msg_imprimir_082 = "Cuenta";
  $msg_imprimir_083 = "Nif-Sufijo";
  $msg_imprimir_084 = "LISTA DE ACREEDORES";
  $msg_imprimir_085 = "acreedores";
  $msg_imprimir_086 = "Total:";  
  $msg_imprimir_087 = "Plazo";  
  $msg_imprimir_089 = "LISTA DE ACREEDORES ELIMINADOS";  
  $msg_imprimir_090 = "acreedores eliminados";  
  //Lista de recibos
  $msg_imprimir_088 = "Plazo";
  
  $msg_imprimir_091 = "Referencia";
  $msg_imprimir_092 = "Deudor";
  $msg_imprimir_093 = "Cuenta Antigua";
  $msg_imprimir_094 = "Cuenta Nueva";
  $msg_imprimir_095 = "Avisos";
  $msg_imprimir_096 = "RESUMEN DE IMPORTACI�N DE LA REMESA";
  $msg_imprimir_097 = "";
  $msg_imprimir_098 = '';
  $msg_imprimir_099 = "F.Pago";
  $msg_imprimir_100 = "F.Firma";
  $msg_imprimir_101 = "Presentaci�n";
  
  $msg_imprimir_102 = "Recibos cuya fecha de firma es posterior o igual a la fecha de pago";
  $msg_imprimir_103 = "Recibos cuya cuenta es incorrecta";
  $msg_imprimir_104 = "Cuenta";
  
  
  $msg_imprimir_105 = "Referencia del Mandato";
  $msg_imprimir_106 = "Nombre del Titular";
  $msg_imprimir_107 = "IBAN";
  $msg_imprimir_108 = "Cuaderno duplicidad";
  $msg_imprimir_109 = "Deudores con referencia del mandato duplicada en la modalidad opuesta (Core/B2B)";
  
  //Resumen de la importaci�n
  /*$msg_imprimir_057 = "Referencia";
  $msg_imprimir_058 = "Librado";
  $msg_imprimir_059 = "Recibo";
  $msg_imprimir_060 = "Avisos";
  $msg_imprimir_061 = "RESUMEN DE IMPORTACI�N";
  $msg_imprimir_062 = "Nombre de la remesa";
  $msg_imprimir_063 = "Estado";
  $msg_imprimir_064 = "Recibos importados";*/

  //remesa_pdf.php
  //Se incluyen los textos fijos que se incluyen en las generaciones de pdf

  //Si existe resumen de emisi�n
  $msg_remesa_pdf_000 = "DEUDOR";
  $msg_remesa_pdf_001 = "RESUMEN DE LA REMESA EMITIDA";
  $msg_remesa_pdf_002 = "ACREEDOR";
  $msg_remesa_pdf_003 = "Fecha de Emisi�n";
  $msg_remesa_pdf_004 = "Fecha de Cargo";
  $msg_remesa_pdf_005 = "Importe total";
  $msg_remesa_pdf_006 = "RECIBOS";

  //Datos del propio recibo
  $msg_remesa_pdf_007 = "BORRADOR";
  $msg_remesa_pdf_008 = "DUPLICADO";
  $msg_remesa_pdf_009 = "INFORMACI�N SOBRE EL RECIBO";
  $msg_remesa_pdf_010 = "ADEUDAMOS";
  $msg_remesa_pdf_011 = "IMPORTE ORIGEN";
  $msg_remesa_pdf_012 = "ENTIDAD EMISORA";
  $msg_remesa_pdf_013 = "TITULAR DE LA DOMICILIACI�N";
  $msg_remesa_pdf_014 = "IBAN";
  $msg_remesa_pdf_015 = "Fecha de adeudo";
  $msg_remesa_pdf_016 = "Fecha de emisi�n";
  $msg_remesa_pdf_017 = "Concepto";
  $msg_remesa_pdf_018 = "Fecha Valor";
  $msg_remesa_pdf_019 = "Importe";
  $msg_remesa_pdf_020 = "Nif";
  $msg_remesa_pdf_021 = "Nombre";
  $msg_remesa_pdf_022 = "DETALLE DE OPERACIONES";
  $msg_remesa_pdf_023 = "Domicilio";
  $msg_remesa_pdf_024 = "Plaza";
  $msg_remesa_pdf_025 = "Pa�s";
  $msg_remesa_pdf_026 = "Nombre";
  $msg_remesa_pdf_027 = "Cuenta";
  $msg_remesa_pdf_028 = "Residencia";
  $msg_remesa_pdf_029 = "Domicilio";
  $msg_remesa_pdf_032 = "INFORMACI�N ADICIONAL";
  $msg_remesa_pdf_033 = "Cuenta";
  $msg_remesa_pdf_034 = "Persona";
  $msg_remesa_pdf_035 = "C�digo";
  $msg_remesa_pdf_036 = "Emisor del c�digo";
  $msg_remesa_pdf_037 = "TITULAR DE LA DOMICILIACI�N";
  $msg_remesa_pdf_038 = "�LTIMO ACREEDOR";
  $msg_remesa_pdf_039 = "Provincia";
  $msg_remesa_pdf_040 = "Identif. Acreedor";
  $msg_remesa_pdf_041 = "COMO";
  $msg_remesa_pdf_042 = "Estado del adeudo";
  $msg_remesa_pdf_043 = "Ref.Adeudo";
  $msg_remesa_pdf_044 = "Tipo";
  $msg_remesa_pdf_045 = "Prop�sito";
  $msg_remesa_pdf_046 = "Para informar al Banco de Espa�a";  
  $msg_remesa_pdf_047 = "Modo de presentaci�n";
  $msg_remesa_pdf_048 = "Tel�fono";
  $msg_remesa_pdf_049 = "Correo electr�nico";

  //header.php
  //Se incluyen los mensajes din�micos de caducidad o acceso no v�lido
  $msg_header_001 = "No tiene permiso para realizar esta acci�n.";
  $msg_header_002 = "El acceso que desea realizar ha caducado.";

  
    //imprimir_mandato
  $msg_mandato_pdf_001 = "Orden de domiciliaci�n de Adeudo";
  $msg_mandato_pdf_002 = "                   Directo SEPA";
  $msg_mandato_pdf_003 = "Mediante la firma de este formulario de Orden de Domiciliaci�n, Usted autoriza a (A)";
  $msg_mandato_pdf_004 = "a enviar �rdenes a su entidad financiera para adeudar su cuenta y (B) a su entidad financiera para adeudar los importes correspondientes";
  $msg_mandato_pdf_005 = "en su cuenta de acuerdo con las �rdenes de";
  $msg_mandato_pdf_006 = "Como parte de sus derechos, tiene derecho a ser reembolsado por su entidad financiera de acuerdo con los t�rminos y condiciones del"; 
  $msg_mandato_pdf_007 = "contrato suscrito con su entidad financiera. Dicho reembolso deber� reclamarse en un plazo de 8 semanas a partir de la fecha de en que";
  $msg_mandato_pdf_008 = "se realiz� el adeudo en su cuenta. Por favor rellene todos los campos marcados con un *";
  $msg_mandato_pdf_009 = "Su nombre";
  $msg_mandato_pdf_010 =  "*";
  $msg_mandato_pdf_011 = "Su direcci�n";
  $msg_mandato_pdf_012 = "*";	
  $msg_mandato_pdf_013 = "*";
  $msg_mandato_pdf_014 = "*";
  $msg_mandato_pdf_015 = "Su n�mero de";
  $msg_mandato_pdf_016 = "cuenta";
  $msg_mandato_pdf_017 = "*";
  $msg_mandato_pdf_018 = "*";
  $msg_mandato_pdf_019 = "Nombre del";
  $msg_mandato_pdf_020 = "acreedor";
  $msg_mandato_pdf_021 = "*";
  $msg_mandato_pdf_022 = "*";
  $msg_mandato_pdf_023 = "*";
  $msg_mandato_pdf_024 = "*";
  $msg_mandato_pdf_025 = "Tipo de pago";
  $msg_mandato_pdf_026 = "Pago peri�dico";
  $msg_mandato_pdf_027 = "Pago �nico";
  $msg_mandato_pdf_028 = "Localidad donde";
  $msg_mandato_pdf_029 = "firma";
  $msg_mandato_pdf_030 = "Por favor, firme";
  $msg_mandato_pdf_031 = "aqu�";  
  $msg_mandato_pdf_032 = "Nota: En su entidad puede obtener informaci�n adicional sobre sus derechos relativos a esta";
  $msg_mandato_pdf_033 = "orden de domiciliaci�n.";  
  $msg_mandato_pdf_034 = "Como parte de sus derechos, tiene derecho a ser reembolsado por su entidad financiera de acuerdo con los t�rminos y condiciones del"; 
  $msg_mandato_pdf_035 = "contrato suscrito con su entidad financiera. Dicho reembolso deber� reclamarse en un plazo de 8 semanas a partir de la fecha de en que";
  $msg_mandato_pdf_036 = "se realiz� el adeudo en su cuenta. Por favor rellene todos los campos marcados con un *";
  $msg_mandato_pdf_037 = "*";
  $msg_mandato_pdf_038 = "Firma/s";
  $msg_mandato_pdf_039 = "Referencia de la orden de domiciliaci�n � A completar por el acreedor.";
  $msg_mandato_pdf_040 = "Nombre del deudor /de los deudores.";
  $msg_mandato_pdf_041 = "Nombre de la calle y n�mero";
  $msg_mandato_pdf_042 = "C�digo postal Ciudad";
  $msg_mandato_pdf_043 = "Pa�s";
  $msg_mandato_pdf_044 = "Persona en cuyo nombre se realiza el pago";
  $msg_mandato_pdf_045 = "N�mero de cuenta � IBAN";
  $msg_mandato_pdf_046 = "SWIFT BIC";
  $msg_mandato_pdf_047 = "Nombre del acreedor";  
  $msg_mandato_pdf_048 = "Identificador del acreedor";
  $msg_mandato_pdf_049 = "Nombre de la calle y n�mero";
  $msg_mandato_pdf_050 = "C�digo postal Ciudad";
  $msg_mandato_pdf_051 = "Pa�s";
  $msg_mandato_pdf_052 = "Localidad";
  $msg_mandato_pdf_053 = "Fecha";
  $msg_mandato_pdf_054 = "*";
  $msg_mandato_pdf_055 = "*";
  $msg_mandato_pdf_056 = "*";
  $msg_mandato_pdf_057 = "*";  
  
  //Cadenas de rol
  $msg_rol_estandar			= "Est�ndar";
  $msg_rol_supervisor		= "Supervisor";
  $msg_rol_administrador	= "Administrador";
  $msg_rol_desarrollador	= "Desarrollador";
  $msg_rol_backoffice	= "Backoffice";
  
 //Gu�a-burros
  //supervision
  $smarty->assign("msg_supervision_001", "Recargar");
  
  //listado_ordenantes_hlp
  $smarty->assign("msg_listado_ordenantes_hlp_001", "-Para crear o modificar una remesa de adeudos, marque el acreedor con el que quiere trabajar y pulse <span class='FieldValues'>[Confeccionar remesa]</span>.");
  $smarty->assign("msg_listado_ordenantes_hlp_002", "-El acreedor u ordenante es la persona, empresa, etc. que va a emitir los recibos: Ej. PE�A DEPORTIVA LERME�A");
  $smarty->assign("msg_listado_ordenantes_hlp_003", "-El usuario puede operar con uno o m�s acreedores, la entidad tendr� que autorizarlo previamente.");
  $smarty->assign("msg_listado_ordenantes_hlp_004", "-Pulse <span class='FieldValues'>[A�adir]</span> para dar de alta un nuevo acreedor; marque <span class='FieldValues'>[X]</span> un acreedor y pulse <span class='FieldValues'>[Modificar]</span> para cambiar sus datos.");
  $smarty->assign("msg_listado_ordenantes_hlp_005", "-Para importar los datos de un acreedor y su remesa (deudores y recibos) desde un fichero Norma AEB19, AEB58, SEPA plano o SEPA XML (tanto CORE como B2B), pulse <span class='FieldValues'>[Importar datos del acreedor]</span>.");
  $smarty->assign("msg_listado_ordenantes_hlp_006", "-Con <span class='FieldValues'>[Borrar]</span> ya no podr� trabajar con el acreedor seleccionado. Si necesita volver a trabajar con un acreedor borrado, pulse <span class='FieldValues'>[Ver acreedores borrados]</span> y acceder� a una lista, desde la que podr� restaurarlo.");
  $smarty->assign("msg_listado_ordenantes_hlp_007", "-Si su entidad le ha proporcionado un fichero AEB72 con los cambios sufridos en las cuentas deudoras de un ordenante, pulse <span class='FieldValues'>[Actualizar cuentas]</span> para introducir los cambios reportados en el fichero.");
   
  //anadir_ordenante_hlp
  $smarty->assign("msg_anadir_ordenante_hlp_001", "-Un acreedor se identifica por su nombre, cuenta (IBAN), CIF/NIF/NIE y un n�mero de tres cifras. En el portal de ABANCA puedes <a href='http://hermesti.eu/void_0101/index.xhtml?id=0101' target='_blank'><b>calcular el IBAN</b></a> de cualquier cuenta. No podr�n darse de alta dos acreedores con la misma combinaci�n CIF/NIF/NIE - Sufijo.");
  $smarty->assign("msg_anadir_ordenante_hlp_002", "-El nombre completo, datos bancarios, residencia fiscal y domicilio completo del acreedor son obligatorios.");
  $smarty->assign("msg_anadir_ordenante_hlp_003", "-Pulse <span class='FieldValues'>[Aceptar]</span> para introducir al acreedor. Se avisa al usuario si la cuenta (IBAN) es incorrecta o faltan datos obligatorios.");
  $smarty->assign("msg_anadir_ordenante_hlp_004", "-Si necesita volver a trabajar con un acreedor borrado, vaya al listado de acreedores y pulse <span class='FieldValues'>[Ver acreedores borrados]</span>, con lo que acceder� a una lista desde la que podr� restaurarlo.");
	
  //modifica_ordenante_hlp
  $smarty->assign("msg_modifica_ordenante_hlp_001", "-No es posible modificar la combinaci�n CIF/NIF/NIE � Sufijo del acreedor. Si as� lo desea deber� dar de alta un nuevo acreedor.");
  $smarty->assign("msg_modifica_ordenante_hlp_002", "-Al introducir los cambios y pulsar <span class='FieldValues'>[Aceptar]</span> se verificar� que el IBAN es v�lido.");
  $smarty->assign("msg_modifica_ordenante_hlp_003", "-Con <span class='FieldValues'>[Descartar]</span> se ignoran los cambios, respetando lo que hubiera anteriormente.");
    
  //restaura_acreedor_hlp
  $smarty->assign("msg_restaurar_acreedores_hlp_001", "-Desde este men� es posible recuperar acreedores que en el pasado fueron borrados por el usuario.");
  $smarty->assign("msg_restaurar_acreedores_hlp_002", "-Pulse <span class='FieldValues'>[Imprimir]</span> para sacar un informe en PDF con la lista de acreedores borrados por el usuario.");
  $smarty->assign("msg_restaurar_acreedores_hlp_003", "-Para recuperar uno o varios acreedores y poder volver a trabajar con ellos, marque sus casillas <span class='FieldValues'>[x]</span> y pulse <span class='FieldValues'>[Restaurar]</span>.");
  $smarty->assign("msg_restaurar_acreedores_hlp_004", "-Pulse <span class='FieldValues'>[Volver]</span> para regresar a la lista de acreedores del usuario.");
    
  //mostrar_ordenante_hlp
  $smarty->assign("msg_mostrar_acreedor_hlp_001", "-En esta ventana se muestra la informaci�n del acreedor borrado para verificar todos sus datos.");
  $smarty->assign("msg_mostrar_acreedor_hlp_002", "-Pulse el bot�n <span class='FieldValues'>[Volver]</span> para regresar a la lista de acreedores borrados.");
  	
  //anadir_librado_hlp  
  $smarty->assign("msg_anadir_librado_hlp_001", "-La Referencia del Mandato es un dato �NICO en la organizaci�n del acreedor. Ejm: N� de socio, la planta y letra de una vivienda, el n� de contrato de un suministro, etc. No puede repetirse para otro deudor ni debe modificarse una vez asignada; si borra un deudor es recomendable no reutilizar su Referencia.");
  $smarty->assign("msg_anadir_librado_hlp_002", "-Pulse <span class='FieldValues'>[Inf.Adicional]</span> para rellenar la informaci�n extra del deudor.");
  $smarty->assign("msg_anadir_librado_hlp_003", "-Pulse <span class='FieldValues'>[Aceptar y salir]</span> para introducir al deudor o <span class='FieldValues'>[Aceptar y a�adir otro]</span> para seguir a�adiendo deudores. Se avisa al usuario si la cuenta de cargo (CCC o IBAN) es incorrecta o faltan datos obligatorios.");

  //anadir_recibo_hlp
  //$smarty->assign("msg_anadir_recibo_hlp_001", "-Un recibo necesita un titular y un importe. Un importe a cero es v�lido, se mostrar� en la lista pero no se emitir�.");
  $smarty->assign("msg_anadir_recibo_hlp_001", "-Un recibo o adeudo necesita un titular, una referencia, una fecha de pago y un importe.");
  $smarty->assign("msg_anadir_recibo_hlp_002", "-Asigne un titular al recibo pulsando <span class='FieldValues'>[Nuevo deudor]</span> o, si ya existiera, despliegue la lista Nombre - Referencia y selecci�nelo.");
  //$smarty->assign("msg_anadir_recibo_hlp_003", "-�til: si los recibos son parecidos, a��dalos vac�os y de 0 Euros, luego vaya a la lista y use <span class='FieldValues'>[Cambios multirecibo]</span>.");
  $smarty->assign("msg_anadir_recibo_hlp_003", "-Pulse <span class='FieldValues'>[Inf.Adicional]</span> para a�adir datos extra de acreedor/deudor.");
  $smarty->assign("msg_anadir_recibo_hlp_004", "-Pulse <span class='FieldValues'>[Aceptar]</span> para introducir el recibo creado o <span class='FieldValues'>[Aceptar y a�adir recibo]</span> para seguir a�adiendo recibos. <span class='FieldValues'>[Descartar]</span> ignora los datos introducidos volviendo a la lista");
  $smarty->assign("msg_anadir_recibo_hlp_005", "Aviso: Si el concepto supera los 140 caracteres, se enviar� como concepto ampliado. Esto significa que el banco del deudor no notificar� a �ste los 640 caracteres del concepto, sino que le notificar� un enlace web al documento completo, que le permitir� visualizarlo.");
  
    
  //busquedaCriterios_hlp
  //$smarty->assign("msg_busquedaCriterios_hlp_001", "Introduzca como criterios de b�squeda cualquier combinaci�n de los disponibles y pulse <span class='FieldValues'>[Aceptar]</span>. Las fechas de pago y  confecci�n desde y hasta puede introducirlas a mano o elegirlas de los calendarios adjuntos. La Referencia, ha de introducirse completa, en cambio para el Nombre basta con algunos caracteres del comienzo.");
  $smarty->assign("msg_busquedaCriterios_hlp_001", "-Introduzca como criterios de b�squeda cualquier combinaci�n de los disponibles y pulse <span class='FieldValues'>[Aceptar]</span>.");
  $smarty->assign("msg_busquedaCriterios_hlp_002", "-Las fechas de pago y confecci�n desde y hasta puede introducirlas a mano o elegirlas de los calendarios adjuntos.");
  $smarty->assign("msg_busquedaCriterios_hlp_003", "-No es necesario introducir completos los datos para la Referencia y el Nombre, basta con algunos caracteres contenidos en los mismos.");

  //copiar_remesa_hlp
  $smarty->assign("msg_copiar_remesa_hlp_001", "-Introduzca el nombre de la remesa, distinto del de las existentes, pulse <span class='FieldValues'>[Aceptar]</span> y obtendr� una copia id�ntica de la original.");
  $smarty->assign("msg_copiar_remesa_hlp_002", "-Es una forma r�pida de crear para los mismos deudores una remesa extraordinaria y que puede modificar a su antojo.");

  //modificar_remesa_hlp  
  $smarty->assign("msg_modificar_remesa_hlp_001", "-Introduzca el nombre de la remesa, pulse <span class='FieldValues'>[Aceptar]</span> y actualizar� el nombre de la remesa seleccionada.");
  $smarty->assign("msg_modificar_remesa_hlp_002", "-Si pulsa sobre <span class='FieldValues'>[Descartar]</span> no se guardar� ning�n cambio y volver� a la lista de remesas");
  
  //enviar_archivo_hlp  
  $smarty->assign("msg_enviar_archivo_hlp_001", "-Para <span class='FieldValues'>[Importar]</span> ficheros o de recibos (Normas AEB19, 58, SEPA CORE o B2B en formato plano o XML) o Excel emitidos desde esta u otra aplicaci�n ha de asignar un Nombre a la remesa y buscar la ruta al fichero pulsando <span class='FieldValues'>[Examinar]</span>.");
  $smarty->assign("msg_enviar_archivo_hlp_002", "-No se importar�n aquellos acreedores, deudores o recibos a los que le falten datos imprescindibles para la emisi�n.");
  $smarty->assign("msg_enviar_archivo_hlp_003", "-Todos los recibos de la remesa se van a importar a este acreedor. Si la remesa es multiacreedor y desea conservar la relaci�n recibo/acreedor, vaya a Listado de acreedores >> <span class='FieldValues'>[Importar datos del acreedor]</span>.");
  
  //importar_remesa_excel_hlp
  $smarty->assign("msg_importar_remesa_excel_hlp_001", "- Ha elegido importar recibos desde un fichero Excel:");
  $smarty->assign("msg_importar_remesa_excel_hlp_002", "- A continuaci�n, se muestran dos tablas:");
  $smarty->assign("msg_importar_remesa_excel_hlp_003", "<spam style='margin-left: 15px;'>- En la primera te mostramos los posibles errores producidos al validar el fichero.</spam>");
  $smarty->assign("msg_importar_remesa_excel_hlp_004", "<spam style='margin-left: 15px;'>- En la segunda te mostramos el contenido de las tres primeras l�neas del fichero para que puedas comprobar su estructura.</spam>");
  $smarty->assign("msg_importar_remesa_excel_hlp_005", "- El checkbox se debe se�alar s�lo si el documento tiene cabecera.");
  $smarty->assign("msg_importar_remesa_excel_hlp_006", "- En caso de duda o error, ponemos a tu disposici�n un fichero de ejemplo que puedes obtener al pulsar <span class='FieldValues'>[Descargar ejemplo]</span>.");
  $smarty->assign("msg_importar_remesa_excel_hlp_007", "- Para continuar con el proceso de importaci�n pulsa <span class='FieldValues'>[Continuar]</span>.");
  $smarty->assign("msg_importar_remesa_excel_hlp_008", "- Para volver a la pantalla anterior pulsa <span class='FieldValues'>[Volver]</span>.");
  
  //actualizar_cuentas_72  
  $smarty->assign("msg_actualizar_cuentas_72_hlp_001", "-Para <span class='FieldValues'>[Importar]</span> ficheros de Norma AEB72 ha de buscar la ruta al fichero pulsando <span class='FieldValues'>[Examinar]</span>.");
  $smarty->assign("msg_actualizar_cuentas_72_hlp_002", "-Se buscar� en el fichero la cuenta de los deudores del ordenante, y se actualizar� si esta es distinta a la actual.");
  
  //importar_remesa_hlp
  $smarty->assign("msg_importar_remesa_hlp_001", "La pantalla muestra un resumen de la importaci�n y lo sucedido con cada recibo individual. As� ha podido: A) Importarse el Deudor y su Recibo, B) S�lo importarse el Recibo porque el deudor ya exist�a o C) No importarse nada. Aquellos recibos cuyo importe no se adapte al formato requerido, se importar�n con importe a 0,00. Pulse <span class='FieldValues'>[Imprimir]</span> para sacar una copia del informe en papel.");

  //eligeTipoAbono_hlp
  $smarty->assign("msg_elige_tipo_abono_hlp_001", "-Desde este men� podr� elegir el modo en el que emitir� la remesa.");
  $smarty->assign("msg_elige_tipo_abono_hlp_002", "-Elija <span class='FieldValues'>[Adeudos al cobro]</span> o <span class='FieldValues'>[Adeudos a financiar]</span> y acto seguido pulse el bot�n <span class='FieldValues'>[Aceptar]</span> para dar paso a la emisi�n de la remesa.");
  $smarty->assign("msg_elige_tipo_abono_hlp_003", "-Pulse el bot�n <span class='FieldValues'>[Descartar]</span> para volver a la lista de remesas.");
  //listar_historico_busquedas_hlp
  $smarty->assign("msg_listar_historico_busquedas_hlp_001", "-Tiene a la vista los criterios por los que ha buscado y los recibos que los cumplen.");
  $smarty->assign("msg_listar_historico_busquedas_hlp_002", "-Para ver un detalle del recibo, pulse sobre el Nombre de Deudor.");
  $smarty->assign("msg_listar_historico_busquedas_hlp_003", "-Ordene la lista por los campos Nombre, Importe y Fecha de Pago.");

  //listar_historico_hlp
  $smarty->assign("msg_listar_historico_hlp_001", "-Esta pesta�a muestra las remesas emitidas. Que una remesa se haya emitido no significa que se haya tramitado. Puede consultar el estado de las remesas en Ficheros->Consulta ficheros enviados."); 
  $smarty->assign("msg_listar_historico_hlp_002", "-Puede consultar las remesas ya emitidas, bajarlas a su PC en formato SEPA CORE plano y XML con <span class='FieldValues'>[Descargar]</span> y ver e imprimir duplicados de los recibos.");
  $smarty->assign("msg_listar_historico_hlp_003", "-Pulse <span class='FieldValues'>[Buscar]</span> para introducir los criterios que han de cumplir los recibos ya emitidos de cualquier remesa que quiera consultar.");  
  $smarty->assign("msg_listar_historico_hlp_004", "-La lista puede ordenarse por Nombre de la Remesa y Fecha de Confecci�n. Gu�rdela en papel pulsando <span class='FieldValues'>[Imprimir]</span>.");
  $smarty->assign("msg_listar_historico_hlp_005", "-Para ver los recibos de una remesa, pulse sobre el <span class='FieldValues'>Plazo y Nombre de la remesa</span>.");
  $smarty->assign("msg_listar_historico_hlp_006", "-Seleccione una remesa <span class='FieldValues'>[x]</span> y pulse <span class='FieldValues'>[Importar Remesa]</span> para a�adirla a la lista de remesas actuales y poder realizar diversas operaciones sobre ella.");
  $smarty->assign("msg_listar_historico_hlp_007", "-Atenci�n, el n�mero de recibos que figura en la lista es el de los recibos que se han emitido.");

  //listar_historico_recibos_hlp
  //$smarty->assign("msg_listar_historico_recibos_hlp_001", "-Para ver un recibo ya emitido, pulse sobre la <span class='FieldValues'>Referencia</span>. Ordene la lista por los campos Referencia y Titular.");
  $smarty->assign("msg_listar_historico_recibos_hlp_001", "-Para ver un recibo ya emitido, pulse sobre el <span class='FieldValues'>Nombre Deudor</span>.");
  $smarty->assign("msg_listar_historico_recibos_hlp_002", "-Ordene la lista por los campos Nombre Deudor, Importe y Fecha de Pago.");
  $smarty->assign("msg_listar_historico_recibos_hlp_003", "-Con <span class='FieldValues'>[Imprimir informe]</span> obtendr� un resumen de la emisi�n, con <span class='FieldValues'>[Imprimir Recibos]</span>, tras marcarlos <span class='FieldValues'>[x]</span>, sacar� un duplicado.");

  //listar_librados_hlp
  $smarty->assign("msg_listar_librados_hlp_001", "-Los deudores son personas, empresas, etc. que han acordado con el acreedor hacer sus pagos con un recibo. ");
  $smarty->assign("msg_listar_librados_hlp_002", "-La lista muestra los deudores dados de alta por el acreedor, esta puede ordenarse por la Referencia del Mandato o por el Nombre del Titular.");
  $smarty->assign("msg_listar_librados_hlp_003", "-Pulse el bot�n <span class='FieldValues'>[A�adir]</span> para introducir un nuevo deudor; tambi�n puede dar de alta un deudor directamente al tiempo que crea el recibo desde el men� Remesas; para eliminar uno o varios deudores, marque sus casillas <span class='FieldValues'>[x]</span> y pulse <span class='FieldValues'>[Borrar]</span>.");
  $smarty->assign("msg_listar_librados_hlp_004", "-Para modificar los datos de un deudor pulse sobre la <span class='FieldValues'>Referencia del Mandato</span>, sobre el <span class='FieldValues'>Nombre del titular</span> o marque un deudor y pulse <span class='FieldValues'>[Modificar]</span>.");
  
  //listar_ordenante_hlp
  $smarty->assign("msg_listar_ordenante_hlp_001", "-El acreedor u ordenante es la persona, empresa, etc. que va a emitir los recibos: Ej. PE�A DEPORTIVA LERME�A");
  $smarty->assign("msg_listar_ordenante_hlp_002", "-Un acreedor se identifica por su nombre, cuenta (CCC o IBAN), CIF/NIF/NIE y un n�mero de tres cifras.");
  $smarty->assign("msg_listar_ordenante_hlp_003", "-El usuario puede operar con uno o m�s acreedores, la entidad tendr� que autorizarlo previamente.");
  $smarty->assign("msg_listar_ordenante_hlp_004", "-Pulse <span class='FieldValues'>[Imprimir]</span> para sacar una copia a papel con los datos del acreedor.");
  $smarty->assign("msg_listar_ordenante_hlp_005", "-Pulse <span class='FieldValues'>[Cambiar/modificar Acreedor]</span> si quiere trabajar con otro acreedor o si desea actualizar alg�n dato del acreedor con el que est� operando.");
  
  //listar_recibos_hlp
  $smarty->assign("msg_listar_recibos_hlp_001", "-Pulse el bot�n <span class='FieldValues'>[A�adir recibo]</span> para crear uno nuevo. Para modificar uno existente, pulse en la lista sobre el <span class='FieldValues'>Nombre de Deudor</span> o m�rquelo y pulse <span class='FieldValues'>[Modificar recibo]</span>.");
  $smarty->assign("msg_listar_recibos_hlp_002", "-Para a�adir recibos a la remesa desde un fichero normalizado AEB19, 58, 19.14 (CORE) � 19.44 (B2B) o un fichero Excel, pulse <span class='FieldValues'>[Importar recibos]</span>.");  
  $smarty->assign("msg_listar_recibos_hlp_003", "-Interesante: puede no emitir un recibo sin borrarlo de la remesa: marque su casilla <span class='FieldValues'>[x]</span> en la lista y luego pulse <span class='FieldValues'>[Excluir]</span>. Los recibos con importe 0,00 se excluir�n autom�ticamente de la emisi�n.");
  $smarty->assign("msg_listar_recibos_hlp_004", "-Para reactivar un recibo m�rquelo <span class='FieldValues'>[x]</span> y pulse <span class='FieldValues'>[Incluir]</span>; si pulsa <span class='FieldValues'>[Borrar]</span> lo elimina definitivamente.");
  $smarty->assign("msg_listar_recibos_hlp_005", "-Muy �til: podr� hacer de golpe modificaciones en varios recibos, m�rquelos <span class='FieldValues'>[x]</span>en la lista y pulse <span class='FieldValues'>[Cambios multirecibo]</span>.");
  $smarty->assign("msg_listar_recibos_hlp_006", "-Liste en papel un borrador de los recibos:  marque sus casillas <span class='FieldValues'>[x]</span> en la lista y luego pulse <span class='FieldValues'>[Imprimir recibos]</span>.");
  
  //listar_remesas_hlp
  $smarty->assign("msg_listar_remesas_hlp_001", "-Las remesas son grupos de recibos que gestionar� unidos, las identificar� con un nombre y debe existir al menos una. <span class='FieldValues'>[Crear remesa]</span> despliega el men� de incorporaci�n de remesas. As�gne un nombre a la nueva remesa y pulse <span class='FieldValues'>[Crear]</span> para a�adirla al listado.");
  $smarty->assign("msg_listar_remesas_hlp_002", "-El nombre de las remesas importadas desde el men� acreedores se compone de la siguiente manera: REM_Fecha de creaci�n en formato AAAAMMDD_N�mero de remesas importadas para dicho acreedor_Fecha en milisegundos. Marque una remesa <span class='FieldValues'>[X]</span> y pulse <span class='FieldValues'>[Modificar]</span> para introducir un nuevo nombre que le permita identificar mejor dicha remesa.");
  $smarty->assign("msg_listar_remesas_hlp_003", "-Pulse sobre el <span class='FieldValues'>Nombre de la remesa</span> para ver la lista de sus recibos y hacer todo tipo de cambios o m�rque su casilla en la lista y pulse <span class='FieldValues'>[Listar recibos]</span>.");
  $smarty->assign("msg_listar_remesas_hlp_004", "-Use el bot�n <span class='FieldValues'>[Emitir/Enviar]</span> para que la Entidad tramite el cobro de los recibos. <span class='FieldValues'>[Borrar]</span> elimina definitivamente la remesa.");
  $smarty->assign("msg_listar_remesas_hlp_005", "-El bot�n <span class='FieldValues'>[Copiar]</span> es muy �til para crear con rapidez una remesa a partir de otra.");
  $smarty->assign("msg_listar_remesas_hlp_006", "-Un punto rojo al lado del nombre de la remesa indica que esta es err�nea o est� incompleta y no se puede emitir. Revise que ni el importe total de la remesa ni el de alg�n recibo superen el importe 99.999.999,99; que no haya m�s de un recibo para un deudor con mandato �nico y que alguna cuenta deudora no est� a ceros.");
  $smarty->assign("msg_listar_remesas_hlp_007", "-Atenci�n, el n�mero de recibos que figura en la lista es el de los recibos que se pueden emitir.");

  //modificar_librado_hlp
  $smarty->assign("msg_modificar_librado_hlp_001", "-La Referencia del Mandato es un dato �NICO en la organizaci�n del acreedor. Ejm: N� de socio, la planta y letra de una vivienda, el n� de contrato de un suministro, etc. No puede repetirse para otro deudor y no es conveniente modificarlo si no tiene un mandato que lo justifique.");
  //$smarty->assign("msg_modificar_librado_hlp_002", "-Pulse <span class='FieldValues'>[Inf.Adicional]</span> para rellenar la informaci�n extra del deudor.");
  $smarty->assign("msg_modificar_librado_hlp_002", "-Pulse <span class='FieldValues'>[Inf.Adicional]</span> para a�adir o modificar informaci�n adicional al deudor. Esta informaci�n s�lo se mostrar� en los recibos para el deudor que d� de alta a partir de ese momento.");

  //opcionales
  $smarty->assign("msg_opcionales_hlp_001", "-La normativa de adeudos SEPA contempla la inclusi�n de informaci�n 'codificada' de las personas que intervienen en el proceso: Acreedor, �ltimo Acreedor, Titular de la Domiciliaci�n y Deudor. Esta informaci�n servir� para automatizar el tratamiento por las diversas organizaciones intervinientes, si bien de momento carece de inter�s y es opcional.");  
  $smarty->assign("msg_opcionales_hlp_002", "-Los bloques de identificaci�n adicional tienen en com�n el identificar al titular del bloque como Organizaci�n o como Persona.");
  $smarty->assign("msg_opcionales_hlp_003", "-Pulse sobre el bot�n  <span class='FieldValues'>[Aceptar]</span> para guardar esta informaci�n.");

  //confirmar_remesa_hlp
  $smarty->assign("msg_confirmar_remesa_hlp_001", "-Para finalizar el proceso de emisi�n de la remesa, introduzca su clave de firma y pulse <span class='FieldValues'>[Confirmar]</span>.");
  $smarty->assign("msg_confirmar_remesa_hlp_002", "-Dispone de tres intentos para introducir la clave correcta.");
  $smarty->assign("msg_confirmar_remesa_hlp_003", "-<span class='FieldValues'>[Descartar]</span> cancela todo el proceso de emisi�n.");

  //modificar_recibo_hlp
  //$smarty->assign("msg_modificar_recibo_hlp_001", "-Un importe a cero es v�lido, el recibo se mostrar� en la lista pero no se emitir�.El importe m�ximo aceptado por recibo y por remesa es de 99.999.999,99 euros.");
  $smarty->assign("msg_modificar_recibo_hlp_001", "-El importe m�ximo aceptado por recibo y por remesa es de 99.999.999,99 euros.");
  $smarty->assign("msg_modificar_recibo_hlp_002", "-�til: si ha de hacer las mismas modificaciones en varios recibos, vuelva a la lista y use <span class='FieldValues'>[Cambios multirecibo]</span>.");
  $smarty->assign("msg_modificar_recibo_hlp_003", "-Pulse los botones <span class='FieldValues'>[>]</span> o <span class='FieldValues'>[<]</span> para desplazarse sobre los diferentes recibos en caso de haber m�s de uno.");
  $smarty->assign("msg_modificar_recibo_hlp_004", "-Pulse <span class='FieldValues'>[Inf.Adicional]</span> para a�adir datos extra de acreedor/deudor.");
  $smarty->assign("msg_modificar_recibo_hlp_005", "-Pulse <span class='FieldValues'>[Aceptar]</span> para introducir los cambios en el recibo. <span class='FieldValues'>[Descartar]</span> ignora los cambios introducidos volviendo a la lista");
  $smarty->assign("msg_modificar_recibo_hlp_006", "Aviso: Si el concepto supera los 140 caracteres, se enviar� como concepto ampliado. Esto significa que el banco del deudor no notificar� a �ste los 640 caracteres del concepto, sino que le notificar� un enlace web al documento completo, que le permitir� visualizarlo.");
  
  //mostrar_recibo_hlp
  $smarty->assign("msg_mostrar_recibo_hlp_001", "-Puede moverse por los recibos de la lista con los botones <span class='FieldValues'>[<]</span> y <span class='FieldValues'>[>]</span>, e <span class='FieldValues'>[Imprimir  duplicado]</span> del recibo a la vista.");
  $smarty->assign("msg_mostrar_recibo_hlp_002", "-Si los hubiera, puede ver datos extra de acreedor/deudor pulsando <span class='FieldValues'>[Inf.Adicional]</span>.");

  //multirecibo_hlp
  $smarty->assign("msg_multirecibo_hlp_001", "-S�lo cambiar�n en los recibos los campos que haya marcado <span class='FieldValues'>[x]</span>, permaneciendo el resto inalterados.");
  $smarty->assign("msg_multirecibo_hlp_002", "-Introduzca los nuevos detalles y/o el importe y pulse <span class='FieldValues'>[Aceptar]</span>, se actualizar�n en los recibos que haya seleccionado.");
  $smarty->assign("msg_multirecibo_hlp_003", "-<span class='FieldValues'>[Cancelar]</span> descarta los cambios.");

  //errores_emision_hlp
  $smarty->assign("msg_errores_emision_hlp_001", "- Continuar la emisi�n de una remesa con errores puede suponer que la entidad rechace su tramitaci�n:");
  $smarty->assign("msg_errores_emision_hlp_002", "a) Recibos con fecha de pago fuera de rango: La fecha de adeudo de un recibo no puede ser anterior a la fecha en curso y debe existir un plazo m�nimo, en funci�n del tipo de adeudo y la entidad bancaria, entre la fecha de emisi�n y la de adeudo.");
  $smarty->assign("msg_errores_emision_hlp_003", "b) Recibos duplicados: Se informa de que la remesa contiene adeudos con igual importe, referencia y fecha de adeudo que otros emitidos anteriormente, por lo que podr�a darse el caso de duplicidad en la emisi�n.");
  $smarty->assign("msg_errores_emision_hlp_004", "c) Recibos fuera de secuencia respecto a su emisi�n anterior: Se est�n emitiendo recibos cuyo tipo de adeudo causa incoherencia con recibos emitidos anteriormente, p.ej. si es la segunda vez que se emite un adeudo de tipo �nico al mismo deudor, o se est� emitiendo un recibo para un deudor para el que ya se ha emitido un adeudo de tipo �ltimo, o se est� emitiendo un recibo de tipo Primero cuando anteriormente ya se ha emitido un recibo, para el mismo deudor.");
  $smarty->assign("msg_errores_emision_hlp_005", "-Se recomienda al usuario la descarga a su PC de una copia del fichero emitido. La entidad puede limpiar sin previo aviso los ficheros emitidos con varios meses de antig�edad.");
  $smarty->assign("msg_errores_emision_hlp_006", "ERRORES EN LA EMISI�N");
  $smarty->assign("msg_errores_emision_hlp_007", "ADVERTENCIAS EN LA EMISI�N");
  $smarty->assign("msg_errores_emision_hlp_008", "d) Deudores con referencia del mandato duplicada en la modalidad opuesta (Core/B2B): No pueden existir, para un mismo acreedor, dos mandatos (uno CORE y otro B2B) con la misma 'Referencia del Mandato'; se listar�n aquellos deudores que tengan la referencia del mandato duplicada respecto a un deudor del mismo acreedor de la modalidad contraria (CORE/B2B).");

  //importaAcreedorYSusDatos_hlp.html
  $smarty->assign("msg_imp_acreedor_y_datos_hlp_001", "-Para importar los datos de un acreedor, sus deudores y sus recibos desde una remesa en fichero Norma AEB19, AEB58, SEPA plano o SEPA XML (tanto CORE como B2B) pulse <span class='FieldValues'>[Examinar]</span> y localice el archivo de la remesa; una vez seleccionado, pulse <span class='FieldValues'>[Importar]</span>.");
  $smarty->assign("msg_imp_acreedor_y_datos_hlp_002", "-Para regresar al Listado de acredores, pulse <span class='FieldValues'>[Volver]</span>.");

  //importar_desde_recibos_hlp
  $smarty->assign("importar_desde_recibos_hlp_001", "-Para importar los datos de un acreedor, sus deudores y sus recibos desde una remesa en fichero Norma AEB19, AEB58, SEPA plano, SEPA XML (tanto CORE como B2B) o Excel pulse <span class='FieldValues'>[Examinar]</span> y localice el archivo de la remesa; una vez seleccionado, pulse <span class='FieldValues'>[Importar]</span>.");
  $smarty->assign("importar_desde_recibos_hlp_002", "-Para regresar a la Lista de recibos de la remesa, pulse el bot�n <span class='FieldValues'>[Volver]</span>."); 

  //eligeEmisionCORE
  $smarty->assign("eligeEmisionCORE_hlp_001", "-Se llama plazo de presentaci�n a los d�as h�biles que, como m�nimo, han de mediar entre la entrega de los adeudos al banco por el emisor y la fecha en que se har� el cargo al deudor, para que de tiempo a su tramitaci�n. TODAS LAS ENTIDADES ACEPTAN EL PLAZO EST�NDAR O CORE: 7 d�as para adeudos de tipo �nico o primero y 4 d�as para adeudos de tipo intermedio o �ltimo.");
  $smarty->assign("eligeEmisionCORE_hlp_002", "-Se ha normalizado para Espa�a otro plazo m�s corto o COR1, en el que para todos los tipos de adeudo basta con 1 d�a. Las entidades extranjeras y un n�mero reducido de entidades que operan en Espa�a NO ACEPTAN EL PLAZO CORTO, es decir RECHAZAN los adeudos COR1 que les lleguen.");
  $smarty->assign("eligeEmisionCORE_hlp_003", "-Como la normativa no permite enviar-emitir conjuntamente adeudos COR1 y CORE, si la emisi�n contiene adeudos CORE y COR1, la aplicaci�n permite bien la emisi�n por separado de los adeudos de cada tipo (dos emisiones), o emitir en una s�la vez TODOS como CORE. Si todos los adeudos son del mismo tipo CORE o COR1,  la emisi�n no consultar� con el usuario.");
  
  //eligeTipoAbono
  $smarty->assign("eligeTipoAbono_hlp_001", "-Elija <span class='FieldValues'><b>Anticipo de cr�ditos (adeudos directos financiados)</b></span> para que la entidad le anticipe el importe de los recibos. Es necesario disponer de una l�nea de cr�dito. Compruebe el saldo en la cuenta de cr�dito antes de emitir adeudos a financiar.");
  $smarty->assign("eligeTipoAbono_hlp_002", "-Elija <span class='FieldValues'><b>Adeudos directos normales (para su gesti�n a vencimiento)</b></span> para que su entidad gestione el cobro de los recibos en la fecha de vencimiento indicada.");
  $smarty->assign("eligeTipoAbono_hlp_003", "<span class='FieldValues'><b>Importante:</b></span> aunque tenga mandatos CORE, debe obtener mandatos nuevos de sus clientes para poder emitir B2B. De no cumplir este requisito, sus deudores podr�n reclamar las cantidades adeudadas.");
  
  //plazos (Aqu� van los literales usados para mostrar el plazo del adeudo. Pueden ser CORE, COR1 o B2B.
  $smarty->assign("msg_plazo_001", "CORE");
  $smarty->assign("msg_plazo_002", "COR1");
  $smarty->assign("msg_plazo_003", "B2B");
  $msg_plazo_pdf_001 = "CORE";
  $msg_plazo_pdf_002 = "COR1";
  $msg_plazo_pdf_003 = "B2B";
  
  // Migraci�n de 19 a 19SEPA.
  $msg_migracion_de_19_a_19sepa_001 = "C.P. ";
  
  // ------------------------- T O O L T I P S -------------------------------
  
  // listar_acreedores_tooltip
  $smarty->assign("msg_listar_acreedores_tooltip_001", "Pulse <span class='FieldValues'>[A�adir]</span> para dar de alta un nuevo acreedor.");
  $smarty->assign("msg_listar_acreedores_tooltip_002", "Pulse <span class='FieldValues'>[Modificar]</span> para cambiar los datos de un acreedor.");
  $smarty->assign("msg_listar_acreedores_tooltip_003", "Con <span class='FieldValues'>[Borrar]</span> ya no podr� trabajar con el acreedor seleccionado");
  $smarty->assign("msg_listar_acreedores_tooltip_004", "Para crear o modificar una remesa de adeudos, marque el acreedor con el que quiere trabajar y pulse <span class='FieldValues'>[Confeccionar remesa]</span>.");
  $smarty->assign("msg_listar_acreedores_tooltip_005", "Pulse el bot�n <span class='FieldValues'>[Actualizar cuentas]</span> para importar ficheros de Norma AEB72.");
  $smarty->assign("msg_listar_acreedores_tooltip_006", "Para importar los datos de un acreedor y su remesa (deudores y recibos) desde un fichero Norma AEB19, AEB58, SEPA plano, SEPA XML (tanto CORE como B2B) o Excel, pulse <span class='FieldValues'>[Importar datos del acreedor]</span>.");
  $smarty->assign("msg_listar_acreedores_tooltip_007", "Si necesita volver a trabajar con un acreedor borrado, pulse <span class='FieldValues'>[Ver acreedores borrados]</span> y acceder� a una lista, desde la que podr� restaurarlo.");

  //anadir_acreedor_tooltip
  $smarty->assign("msg_anadir_acreedor_tooltip_001", "Pulse <span class='FieldValues'>[Descartar]</span> para volver al listado de acreedores.");
  $smarty->assign("msg_anadir_acreedor_tooltip_002", "Pulse <span class='FieldValues'>[Aceptar]</span> para introducir al acreedor.");
  $smarty->assign("msg_anadir_acreedor_tooltip_003", "Pulse <span class='FieldValues'>[Pa�ses]</span> para seleccionar un pa�s de la lista."); 
  
  //modificar_acreedor_tooltip
  $smarty->assign("msg_modificar_acreedor_tooltip_001", "Pulse <span class='FieldValues'>[Descartar]</span> para volver al listado de acreedores.");
  $smarty->assign("msg_modificar_acreedor_tooltip_002", "Pulse <span class='FieldValues'>[Aceptar]</span> para actualizar el acreedor.");
  $smarty->assign("msg_modificar_acreedor_tooltip_003", "Pulse <span class='FieldValues'>[Pa�ses]</span> para seleccionar un pa�s de la lista.");
  
  //selecciona_pais_tooltip
  $smarty->assign("msg_seleccionar_pais_tooltip_001", "Pulse <span class='FieldValues'>[Vaciar]</span> para dejar en blanco el pa�s.");
  $smarty->assign("msg_seleccionar_pais_tooltip_002", "Pulse <span class='FieldValues'>[Aceptar]</span> para seleccionar el pa�s.");
  $smarty->assign("msg_seleccionar_pais_tooltip_003", "Pulse <span class='FieldValues'>[Descartar]</span> para volver al formulario.");
   
  //restaurar_acreedores_tooltip
  $smarty->assign("msg_restaurar_acreedor_tooltip_001", "Pulse <span class='FieldValues'>[Volver]</span> para regresar a la lista de acreedores del usuario.");
  $smarty->assign("msg_restaurar_acreedor_tooltip_002", "Para recuperar uno o varios acreedores y poder volver a trabajar con ellos, marque sus casillas <span class='FieldValues'>[x]</span> y pulse <span class='FieldValues'>[Restaurar]</span>.");
  
  //mostrar_acreedor_tooltip
  $smarty->assign("msg_mostrar_acreedor_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Volver]</span> para regresar a la lista de acreedores borrados.");  
  
  //importar_remesa_72_tooltip
  $smarty->assign("msg_importar_remesa_72_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Volver]</span> para regresar a la lista de acreedores.");
  
  //importar_desde_acreedores_tooltip
  $smarty->assign("msg_importar_desde_acreedores_tooltip_001", "Para importar los datos de un acreedor, sus deudores y sus recibos desde una remesa en fichero Norma AEB19, AEB58, SEPA plano, SEPA XML (tanto CORE como B2B) o Excel, pulse <span class='FieldValues'>[Examinar]</span> y localice el archivo de la remesa; una vez seleccionado, pulse <span class='FieldValues'>[Importar]</span>.");
  $smarty->assign("msg_importar_desde_acreedores_tooltip_002", "Para regresar al Listado de acreedores, pulse <span class='FieldValues'>[Volver]</span>.");
  
  //actualizar_cuentas_tooltip
  $smarty->assign("msg_actualizar_cuentas_tooltip_001", "Para <span class='FieldValues'>[Importar]</span> ficheros de Norma AEB72 ha de buscar la ruta al fichero pulsando <span class='FieldValues'>[Examinar]</span>.");
  $smarty->assign("msg_actualizar_cuentas_tooltip_002", "Para regresar al Listado de acreedores, pulse <span class='FieldValues'>[Volver]</span>.");
  
  //importar_remesa_tooltip
  $smarty->assign("msg_importar_remesa_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Volver]</span> para regresar al listado de recibos.");
  $smarty->assign("msg_importar_remesa_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[Volver]</span> para regresar al listado de acreedores.");
  $smarty->assign("msg_importar_remesa_tooltip_003", "Pulse el bot�n <span class='FieldValues'>[Volver]</span> para regresar al men� de importaci�n.");
    
  //listar_librados_tooltip
  $smarty->assign("msg_listar_librados_tooltip_001", "Para modificar los datos de un deudor pulse sobre el Nombre o seleccione uno y pulse <span class='FieldValues'>[Modificar]</span>.");
  $smarty->assign("msg_listar_librados_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[A�adir]</span> para introducir un nuevo deudor.");
  $smarty->assign("msg_listar_librados_tooltip_003", "Para eliminar uno o varios, marque sus casillas <span class='FieldValues'>[x]</span> y pulse <span class='FieldValues'>[Borrar]</span>.");
  
  //anadir_librado_tooltip
  $smarty->assign("msg_anadir_librado_tooltip_001", "Pulse <span class='FieldValues'>[Pa�ses]</span> para seleccionar un pa�s de la lista.");
  $smarty->assign("msg_anadir_librado_tooltip_002", "Pulse <span class='FieldValues'>[Inf.Adicional]</span> para a�adir informaci�n adicional al deudor.");
  $smarty->assign("msg_anadir_librado_tooltip_003", "Pulse <span class='FieldValues'>[Descartar]</span> para volver al listado de deudores.");
  $smarty->assign("msg_anadir_librado_tooltip_004", "Pulse <span class='FieldValues'>[Aceptar y a�adir otro]</span> para seguir a�adiendo deudores.");
  $smarty->assign("msg_anadir_librado_tooltip_005", "Pulse <span class='FieldValues'>[Aceptar y salir]</span> para introducir al deudor.");
  
  //modificar_librado_tooltip
  $smarty->assign("msg_modificar_librado_tooltip_001", "Pulse <span class='FieldValues'>[Pa�ses]</span> para seleccionar un pa�s de la lista.");
  $smarty->assign("msg_modificar_librado_tooltip_002", "Pulse <span class='FieldValues'>[Inf.Adicional]</span> para a�adir o modificar informaci�n adicional al deudor.");
  $smarty->assign("msg_modificar_librado_tooltip_003", "Pulse <span class='FieldValues'>[Descartar]</span> para volver al listado de deudores.");
  $smarty->assign("msg_modificar_librado_tooltip_004", "Pulse <span class='FieldValues'>[Aceptar]</span> para actualizar los datos del deudor.");
  
   //enviar_archivo_tooltip
  $smarty->assign("msg_enviar_archivo_tooltip_001", "Para <span class='FieldValues'>[Importar]</span> ficheros de recibos (Normas AEB19, 58, SEPA CORE o B2B en formato plano o XML) o Excel emitidos desde esta u otra aplicaci�n ha de asignar un Nombre a la remesa y buscar la ruta al fichero pulsando <span class='FieldValues'>[Examinar]</span>.");
  
  //listar_historico_tooltip
  $smarty->assign("msg_listar_historico_tooltip_001", "Si pulsa <span class='FieldValues'>[Borrar]</span> elimina la remesa definitivamente.");  
  $smarty->assign("msg_listar_historico_tooltip_002", "Pulse <span class='FieldValues'>[Descargar]</span>, descargar� un archivo ZIP, cuyo contenido ser� un fichero XML, si se emiti� XML, o dos ficheros, uno en formato plano (Q1P) y otro en XML si se emiti� en plano (Q1P).");
  $smarty->assign("msg_listar_historico_tooltip_003", "Pulse <span class='FieldValues'>[Importar remesa]</span> para volver a utilizar una remesa que en su d�a fue emitida.");
  $smarty->assign("msg_listar_historico_tooltip_004", "Pulse <span class='FieldValues'>[Buscar]</span> para introducir los criterios que han de cumplir los recibos ya emitidos de cualquier remesa que quiera consultar.");
  
  //busquedasCriterios_tooltip
  $smarty->assign("msg_busquedasCriterios_tooltip_001", "Pulse <span class='FieldValues'>[Volver]</span> para ver la lista de remesas del hist�rico.");  
  $smarty->assign("msg_busquedasCriterios_tooltip_002", "Introduzca como criterio de b�squeda cualquier combinaci�n de los disponibles y pulse <span class='FieldValues'>[Aceptar]</span>.");
  
   //listar_historico_busquedas_tooltip
  $smarty->assign("msg_listar_historico_busquedas_tooltip_001", "Pulse <span class='FieldValues'>[Volver]</span> para introducir los criterios de b�squeda nuevamente.");    
  
  //listar_historico_recibos_tooltip
  $smarty->assign("msg_listar_historico_recibos_tooltip_001", "Pulse <span class='FieldValues'>[Volver]</span> para ver la lista de remesas del hist�rico.");    
  
  // mostrar_recibo_tooltip
  $smarty->assign("msg_mostrar_recibo_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[<]</span> para retroceder al anterior recibo de la lista.");
  $smarty->assign("msg_mostrar_recibo_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[>]</span> para avanzar al siguiente recibo de la lista.");
  $smarty->assign("msg_mostrar_recibo_tooltip_003", "Pulse <span class='FieldValues'>[Volver]</span> para ver la lista de recibos del hist�rico.");
  $smarty->assign("msg_mostrar_recibo_tooltip_004", "Pulse <span class='FieldValues'>[Inf.Adicional]</span> para consultar los datos adicionales de acreedor/deudor.");
  
  //listar_remesas_tooltip
  $smarty->assign("msg_crear_remesa_tooltip_001", "Para crear una remesa as�gnele un nombre que la identifique con claridad y pulse <span class='FieldValues'>[Crear]</span>.");
  $smarty->assign("msg_crear_remesa_tooltip_002", "Oculta el men� de alta de remesas.");
  $smarty->assign("msg_listar_remesas_tooltip_001", "Pulse <span class='FieldValues'>[Listar recibos]</span> para ver la lista de sus recibos y hacer todo tipo de cambios.");
  $smarty->assign("msg_listar_remesas_tooltip_002", "Pulse <span class='FieldValues'>[Emitir]</span> para que la Entidad tramite el cobro de los recibos.");
  $smarty->assign("msg_listar_remesas_tooltip_003", "<span class='FieldValues'>[Borrar]</span> elimina definitivamente la remesa.");
  $smarty->assign("msg_listar_remesas_tooltip_004", "Pulse <span class='FieldValues'>[Modificar]</span> para cambiar el nombre de la remesa.");
  $smarty->assign("msg_listar_remesas_tooltip_005", "El bot�n <span class='FieldValues'>[Copiar]</span> es muy �til para crear con rapidez una remesa a partir de otra.");

  //modificar_remesa_tooltip
  $smarty->assign("msg_modificar_remesa_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Descartar]</span> para regresar al listado de remesas sin hacer cambios.");
  $smarty->assign("msg_modificar_remesa_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[Aceptar]</span> para confirmar la modificaci�n.");
  
  //copiar_remesa_tooltip
  $smarty->assign("msg_copiar_remesa_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Descartar]</span> para regresar al listado de remesas sin hacer cambios.");
  $smarty->assign("msg_copiar_remesa_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[Aceptar]</span> y obtendr� una copia id�ntica de la original.");
  
  //listar_recibos_tooltip
  $smarty->assign("msg_listar_recibos_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[A�adir recibo]</span> para crear uno nuevo.");
  $smarty->assign("msg_listar_recibos_tooltip_002", "Para modificar un recibo existente pulse <span class='FieldValues'>[Modificar recibo]</span>.");
  $smarty->assign("msg_listar_recibos_tooltip_003", "Pulse <span class='FieldValues'>[Importar recibos]</span> para a�adir recibos a la remesa desde un fichero Norma AEB19, AEB58, SEPA plano, SEPA XML (tanto CORE como B2B) o Excel.");
  $smarty->assign("msg_listar_recibos_tooltip_004", "Puede no emitir un recibo sin borrarlo de la remesa pulsando <span class='FieldValues'>[Excluir]</span>.");
  $smarty->assign("msg_listar_recibos_tooltip_005", "Para reactivar un recibo pulse <span class='FieldValues'>[Incluir]</span>.");
  $smarty->assign("msg_listar_recibos_tooltip_006", "Si pulsa <span class='FieldValues'>[Borrar]</span> elimina el recibo definitivamente.");
  $smarty->assign("msg_listar_recibos_tooltip_007", "Podr� hacer de golpe modificaciones en varios recibos, pulse <span class='FieldValues'>[Cambios multirecibo]</span>.");
  $smarty->assign("msg_listar_recibos_tooltip_008", "Pulse <span class='FieldValues'>[Emitir]</span> para que la Entidad tramite el cobro de los recibos activos de la lista.");
  $smarty->assign("msg_listar_recibos_tooltip_009", "Pulse <span class='FieldValues'>[Volver]</span> para ver la lista de remesas.");
  
  // anadir_recibo_tooltip
  $smarty->assign("msg_anadir_recibo_tooltip_001", "Asigne un titular al recibo pulsando <span class='FieldValues'>[Nuevo deudor]</span>.");
  $smarty->assign("msg_anadir_recibo_tooltip_002", "Pulse <span class='FieldValues'>[Pa�ses]</span> para seleccionar un pa�s de la lista.");
  $smarty->assign("msg_anadir_recibo_tooltip_003", "Pulse <span class='FieldValues'>[Aceptar y a�adir recibo]</span> para continuar a�adiendo recibos.");
  $smarty->assign("msg_anadir_recibo_tooltip_004", "Pulse <span class='FieldValues'>[Aceptar]</span> para introducir el recibo creado.");
  $smarty->assign("msg_anadir_recibo_tooltip_005", "Pulse <span class='FieldValues'>[Inf.Adicional]</span> para a�adir datos adicionales de acreedor/deudor.");
  $smarty->assign("msg_anadir_recibo_tooltip_006", "<span class='FieldValues'>[Descartar]</span> ignora los datos introducidos volviendo a la lista.");
  
  // modificar_recibo_tooltip
  $smarty->assign("msg_modificar_recibo_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[<]</span> para retroceder al anterior recibo de la lista.");
  $smarty->assign("msg_modificar_recibo_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[>]</span> para avanzar al siguiente recibo de la lista.");
  $smarty->assign("msg_modificar_recibo_tooltip_003", "Pulse <span class='FieldValues'>[Aceptar]</span> para guardar los cambios en el recibo.");
  $smarty->assign("msg_modificar_recibo_tooltip_004", "Pulse <span class='FieldValues'>[Inf.Adicional]</span> para modificar los datos adicionales de acreedor/deudor.");
  $smarty->assign("msg_modificar_recibo_tooltip_005", "<span class='FieldValues'>[Descartar]</span> ignora los datos introducidos volviendo a la lista.");
  
   //multirecibo_tooltip
  $smarty->assign("msg_multirecibo_tooltip_001", "<span class='FieldValues'>[Descartar]</span> cancela los cambios.");
  $smarty->assign("msg_multirecibo_tooltip_002", "Introduzca los nuevos detalles y pulse <span class='FieldValues'>[Aceptar]</span>. Se actualizar�n los valores en los recibos que haya seleccionado.");
  
  //importar_desde_recibos_tooltip
  $smarty->assign("msg_importar_desde_recibos_tooltip_001", "Para importar los datos de los deudores y sus recibos desde una remesa en fichero Norma AEB19, AEB58, SEPA plano, SEPA XML (tanto CORE como B2B) o Excel, pulse <span class='FieldValues'>[Examinar]</span> y localice el archivo de la remesa; una vez seleccionado, pulse <span class='FieldValues'>[Importar]</span>.");
  $smarty->assign("msg_importar_desde_recibos_tooltip_002", "Para regresar al Listado de recibos, pulse <span class='FieldValues'>[Volver]</span>.");
 
  //importar_remesa_excel_tooltip
  $smarty->assign("msg_importar_remesa_excel_tooltip_001", "Para volver a la pantalla anterior, pulse <span class='FieldValues'>[Volver]</span>.");
  $smarty->assign("msg_importar_remesa_excel_tooltip_002", "Para descargar el fichero de ejemplo, pulse <br><span class='FieldValues'>[Descargar ejemplo]</span>.");
  $smarty->assign("msg_importar_remesa_excel_tooltip_003", "Para continuar con el procespo de importaci�n, pulse <span class='FieldValues'>[Continuar]</span>.");
 
  //eligeEmisionCORE_tooltip
  $smarty->assign("msg_eligeEmisionCORE_tooltip_001", "Pulse <span class='FieldValues'>[Descartar]</span> para cancelar la emisi�n.");
  $smarty->assign("msg_eligeEmisionCORE_tooltip_002", "Para enviar por separado los adeudos CORE, pulse <span class='FieldValues'>[Emitir s�lo recibos CORE]</span>.");
  $smarty->assign("msg_eligeEmisionCORE_tooltip_003", "Pulse <span class='FieldValues'>[Emitir s�lo recibos COR1]</span> para emitir s�lo los recibos COR1.");
  $smarty->assign("msg_eligeEmisionCORE_tooltip_004", "Pulse <span class='FieldValues'>[Emitir todos los recibos como CORE]</span> para emitir todos los recibos de la remesa como CORE.");
  
  //emitirCOREDesdeAcreedores_tooltip
  $smarty->assign("msg_emitirCOREDesdeAcreedores_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Emitir/Enviar]</span> para dar paso a la generaci�n de la parte restante de la remesa.");
  $smarty->assign("msg_emitirCOREDesdeAcreedores_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[No volver a recordar]</span> para que la aplicaci�n no le vuelva a preguntar si quiere emitir estos recibos pendientes. Se descartar� esta emisi�n y se entrar� a AEBWeb con normalidad.");
  
  //eligeTipoAbono_tooltip
  $smarty->assign("msg_eligeTipoAbono_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Aceptar]</span> para confirmar la emisi�n de la remesa.");
  $smarty->assign("msg_eligeTipoAbono_tooltip_002", "Pulse el bot�n <span class='FieldValues'>[Descartar]</span> para cancelar la emisi�n de la remesa.");
  
  //migraOrdenantesA1914_tooltip
  $smarty->assign("msg_migraOrdenantesA1914_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Continuar]</span> para ver la lista de acreedores.");
  
  //migraOrdenantesA1914AF_tooltip
  $smarty->assign("msg_migraOrdenantesA1914AF_tooltip_001", "Pulse el bot�n <span class='FieldValues'>[Continuar]</span> para ver la lista de acreedores.");
  
?>