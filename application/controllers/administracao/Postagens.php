<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Postagens extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->view('administracao/nova_postagem');
    }

    public function adicionar() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt_titulo', 'TITULO','required');
        $this->form_validation->set_rules('txt_texto', 'TEXTO' ,'required');

        if ($this->form_validation->run()) {

            $data['titulo'] = $this->input->post('txt_titulo');
            $data['texto'] = $this->input->post('txt_texto');

            if ($this->db->insert('postagens', $data)) {
                redirect(base_url('administracao/postagens'));

            } else {

                print 'Não foi possivel acessar o banco de dados';

            }

        } else {

            $this->index();
        }
     }
}