<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;

class Article extends CI_Controller {

	private $_client;
	function __construct(){
        parent::__construct();
        $this->API="http://127.0.0.1:8000/article/";
        $this->_client = new Client();
        $this->load->library('session');
        
    }
    
	public function index()
	{
		$responseP = $this->_client->get($this->API.'data/publish', [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json']
	    ]); 
       	
       	$responseD = $this->_client->get($this->API.'data/draft', [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json']
	    ]); 

	    $responseT = $this->_client->get($this->API.'data/trash', [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json']
	    ]); 

        $data['articleP'] = json_decode($responseP->getBody(), true); 
        $data['articleD'] = json_decode($responseD->getBody(), true); 
        $data['articleT'] = json_decode($responseT->getBody(), true); 

        
		$this->load->view('index',$data);
	}

	public function add()
	{
		$this->load->view('add');
	}

	public function add_post($status){
		$data = array(
                'Title'      =>  $this->input->post('title_',true),
                'Content'      =>  $this->input->post('content_',true),
                'Category'=>  $this->input->post('category_',true),
                'Status'=>  array($status),
                'Created_date'=>  date("Y-m-d H:i:s"),
                'Updated_date'=>  date("Y-m-d H:i:s")
            );
		
	    $response = $this->_client->post($this->API, [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
	        'body'    => json_encode($data)
	    ]); 

            if($response->getStatusCode()==200)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('index.php/article');
		
	}

	public function edit($id)
	{	
		$response = $this->_client->get($this->API.$id, [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json']
	    ]); 
        $data['article'] = json_decode($response->getBody(), true); 
		$this->load->view('edit',$data);
	}

	public function edit_post($id,$status){
		$data = array(
                'Title'      =>  $this->input->post('title_',true),
                'Content'      =>  $this->input->post('content_',true),
                'Category'=>  $this->input->post('category_',true),
                'Status'=>  array($status),
                'Created_date'=>  date("Y-m-d H:i:s"),
                'Updated_date'=>  date("Y-m-d H:i:s")
            );
	
	
	    $response = $this->_client->put($this->API.$id, [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
	        'body'    => json_encode($data)
	    ]); 

            if($response->getStatusCode()==200)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('index.php/article');
		
	}

	public function delete($id)
	{	
		$data = array(
                'Status'=>  array('trash')
            );

		$response = $this->_client->put($this->API.'trash/'.$id, [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
	        'body'    => json_encode($data)
	    ]); 

		
		if($response->getStatusCode()==200)
            {
                $this->session->set_flashdata('hasil','Hapus Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Hapus Data Gagal');
            }
            redirect('index.php/article');
	}

	public function preview()
	{	
		$response = $this->_client->get($this->API.'data/publish', [
	        'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json']
	    ]); 
        $data['article'] = json_decode($response->getBody(), true); 
		$this->load->view('preview',$data);
	}

}
