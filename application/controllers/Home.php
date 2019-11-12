<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/15/2019
 * Time: 1:18 PM
 */

class Home extends CI_Controller {

    public function index()
    {
        $data['page_load'] = 'home';
        $this->load->view('includes/template',$data);

    }

    public function services()
    {
        $data['page_load'] = 'services';
        $this->load->view('includes/template',$data);
    }

    public function about()
    {
        $data['page_load'] = 'about';
        $this->load->view('includes/template',$data);
    }

    public function contact()
    {
        $data['page_load'] = 'contact';
        $this->load->view('includes/template',$data);
    }

    public function article()
    {
        $data['page_load'] = 'article-page';
        $this->load->view('includes/template',$data);
    }
}
