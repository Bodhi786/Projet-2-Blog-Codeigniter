<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    
    
    
     public function __construct()
     {
         parent::__construct();
        
                //$this->load->database();
         $this->load->model ('blog_article');
//         $this->load->library('calendar');
         $this->load->helper ('function');
        }

//	fonction page index par defaut
	public function index(){
        
        $data['resultat_requete_sql'] = $this->blog_article->get_last_ten_entries();
        
        $data['message'] = "bonjour Lucas";
        $data['message_internaute'] = "votre log est faux";
        
        
		$this->load->view('page1',$data);
//        $this->output->enable_profiler(TRUE);
        
	}
    
    
    
    public function listearticle(){
        
        $data['article_photo_auteur'] = $this->blog_article->get_article();
        
        $this->load->view('template/header.php');
        $this->load->view('page2',$data);
        $this->load->view('template/footer.php');
   
    }
    
    
    
    
    public function articleUnique(){
        
        $id_article = $this->uri->segment(3);
        
        $data['article_complet'] = $this->blog_article->articleUnique($id_article);
            
        $this->load->view('template/header.php');
        $this->load->view('page3',$data);
        $this->load->view('template/footer.php');
        
    }
    
    
}