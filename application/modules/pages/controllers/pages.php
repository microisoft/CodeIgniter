<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MX_Controller {

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
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            array(      'page_url' => 'test',
                        'page_title' => 'test'),
            );


        $this->load->view('pages_index', $data);

    }
    public function show()
    {
        $news_id = $this->uri->segment(3, 0);
        if (isset ($news_id) and $news_id != false ){

           echo 'isset :'.$news_id;

        }else {
            show_error('test', $status_code = 404, 'Ooooops!');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */