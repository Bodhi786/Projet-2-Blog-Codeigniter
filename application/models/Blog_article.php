<?php




class Blog_article extends CI_Model {
    
    public function get_last_ten_entries() { 
        
                $query = $this->db->get('base_article', 10); 
                return $query->result(); 
                }
    
    
    

    public function get_article(){
        
//    $sql = "SELECT *
//    FROM base_article
//    LEFT JOIN
//    img_article ON base_article.id_article = img_article.id_article
//    INNER JOIN
//    base_categorie ON base_article.id_categorie = base_categorie.id_categorie
//    INNER JOIN
//    base_auteur ON base_article.id_auteur = base_auteur.id_auteur
//    WHERE base_article.visible =0
//    ORDER BY RAND() LIMIT 20";
//        
        
    $this->db->select('*');
    $this->db->from('base_article');
    $this->db->join('img_article', 'img_article.id_article = base_article.id_article', 'left');
    $this->db->join('base_categorie', 'base_categorie.id_categorie = base_article.id_categorie');
    $this->db->join('base_auteur', 'base_auteur.id_auteur = base_article.id_auteur');
    $this->db->where('base_article.visible', 0);
    
    $query = $this->db->get();
//    echo $this->db->last_query();
        
    return $query->result();
    }
    
    
    
    
    public function articleUnique($id_article){
        
    $this->db->select('*');
    $this->db->from('base_article');
    $this->db->join('img_article', 'img_article.id_article = base_article.id_article', 'left');
    $this->db->join('base_categorie', 'base_categorie.id_categorie = base_article.id_categorie');
    $this->db->join('base_auteur', 'base_auteur.id_auteur = base_article.id_auteur');
    $this->db->where('base_article.visible', 0);
    $this->db->where('base_article.id_article', $id_article);
        
    
    $query = $this->db->get();
//    echo $this->db->last_query();
        
    return $query->result();
    }
    
    
    
    

}

?>