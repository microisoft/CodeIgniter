<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

    function __construct(){


        $this->load->library('parser');


    }


	public function index()
	{

        $data['auth_users_list'] =  modules::run('pages');


        $this->parser->parse('welcome_message', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */