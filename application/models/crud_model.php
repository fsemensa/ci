<?php if ( ! defined ('BASEPATH')) exit ('No direct script access allowed');

class Crud_model extends CI_model{
	
	public function do_insert($dados=NULL){
		if ($dados!=NULL):
			$this->db->insert('tbl_usuarios',$dados);
			$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso');
			redirect('crud_controller/create');
		endif;
	}
	

	
}
