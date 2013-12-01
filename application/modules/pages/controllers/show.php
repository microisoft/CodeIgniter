<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show extends MX_Controller {

    function __construct(){

        parent::__construct();



    }


    public function index()
    {

        $data['pages_list'] = array(

            array(      'page_url' => 'test',
                'page_title' => 'test'),
            array(      'page_url' => 'test',
                'page_title' => 'test'),
            array(      'page_url' => 'test',
                'page_title' => 'test')
            );


        $this->load->view('pages_index', $data);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */