<?php
	$data = [];
 	foreach ($queryRecords->result() as $value){
		$id = $value->codigo_paciente;
		$documento = $value->documento;
		$documento2 = '<span class="text-xs text-dark">'.$value->documento.'</span>'; 
		$hc = '<span class="text-xs text-dark">'.$value->hc.'</span>';
		$apellido = '<span class="text-xs text-dark">'.$value->apellido.'</span>';
		$nombre = '<span class="text-xs text-dark">'.$value->nombre.'</span>';
		$direccion = '<span class="text-xs text-dark">'.$value->direccion.'</span>';
		$telefono = '<span class="text-xs text-dark">'.$value->telefono.'</span>';
		$fecha_nacimiento = '<span class="text-xs text-dark">'.$value->fecha_nacimiento.'</span>';
		$sexo = $value->sexo;
		if($sexo == "F") {
			$sexo = '<i class="fas fa-female fa-1x text-center text-pink "></i>';
		}
		else if ($sexo == "M") {
			$sexo = '<i class="fas fa-child fa-1x text-primary"></i>';
		}
		$estado_civil = '<span class="text-xs text-dark">'.$value->estado_civil.'</span>';

		$datosBtn = [];
		//$historias = '<a href="'.base_url().'administracion/historia/'.$documento.'" type="button" class="btn btn-danger rounded-circle btn-sm" title="Historias"> <li class="fas fa-folder-open"></li> </a>';
		$historias = '<a class="icon icon-shape icon-sm me-2 bg-gradient-info shadow mx-1" href="'.base_url().'administracion/historia/'.$documento.'"><i class="fas fa-folder-open text-white opacity-10"></i></a>';
        if($this->session->userdata("rol") == "Administrador" ||  $this->session->userdata("rol") == "Enfermera" || $this->session->userdata("rol") == "Doctor"){
			$eliminar = '<a class="icon icon-shape icon-sm me-2 bg-gradient-danger shadow mx-3" href="'.base_url().'administracion/eliminarpaciente/'.$id.'"><i class="fas fa-times text-white opacity-10"></i></a>';
			$editar = '<a class="icon icon-shape icon-sm me-2 bg-gradient-primary shadow mx-1" href="'.base_url().'administracion/editarpaciente/'.$documento.'" target="blank"><i class="fas fa-pen text-white opacity-10"></i></a>';

			$btns1 = '<div class="row">'.$eliminar.'</div>';
			$btns2 = '<div class="row">'.$editar.'</div>';
			$btns3 = '<div class="row">'.$historias.'</div>';
		}
		else if( $this->session->userdata("rol") == "Laboratorista" || $this->session->userdata("rol") == "Patologo"){
			$eliminar = '';
			$editar = '';

			$btns1 = '<div class="row">'.$eliminar.'</div>';
			$btns2 = '<div class="row">'.$editar.'</div>';
			$btns3 = '<div class="row">'.$historias.'</div>';
		}
		else {
			$btns = "<div style='display:block;width:100%;' class='text-center'>".$historias."</div>";	
		}

		
		$data[] = [$btns1, $btns2, $btns3, $documento2, $hc, $apellido, $nombre, $direccion, $telefono, $fecha_nacimiento,$sexo,$estado_civil ];
 	}

	$json_data = array(
		"draw" => intval($params['draw']),   
		"recordsTotal" => intval($totalRecords),  
		"recordsFiltered" => intval($totalRecords),
		"data" => $data
	);

	echo json_encode($json_data);
