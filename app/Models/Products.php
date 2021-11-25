<?php namespace App\Models;
use CodeIgniter\Model;

class Products extends Model
{
   protected $DBGroup = 'default';

   protected $table = 'products';
   protected $primaryKey = 'pro_id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['product_name','created_date','updated_date','deleted'];
   protected $createdField = 'created_date';
   protected $updatedField = 'updated_date';

   function product_detail($data){
        if(!empty($data) && is_array($data)){
            $query = $this->db->query("SELECT products.pro_id, products.product_name, products.product_alias_name, products.product_category, products_price.product_base_price, products_price.product_sell_price 
                                        FROM products AS products 
                                        INNER JOIN products_price AS products_price ON products_price.pro_id = products.pro_id AND products_price.deleted = 0 
                                        WHERE products.deleted = 0 AND products.product_alias_name = '".$data['id']."'"); 
            return $query->getResultArray();
        }
   }

   function product_image($data){
    if(!empty($data) && is_array($data)){
        $query = $this->db->query("SELECT products_image.product_image_thumbnail, products_image.product_image 
                                    FROM products_image AS products_image 
                                    INNER JOIN products AS products ON products.pro_id = products_image.pro_id AND products.deleted = 0 
                                    WHERE products_image.deleted = 0 AND products_image.pro_id= ".$data['pro_id']." AND products.product_alias_name = '".$data['product_alias_name']."'"); 
        return $query->getResultArray();
    }
}
}