<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
class testController extends Controller
{
    private $city;
    private $mobile;
    private $data=[];
    private $products;

    public function index()
    {
        return view(view:'test');  
    } 
    public function blog()
    {
        $this->city='Dhaka';
        $this->mobile='01760282102';
        $this->data= [
            0 => [
                "name"=> "aminur",
                "city"=>"Dhaka",
                "mobile"=>"123456",
            ],
            1 => [
                "name"=> "rajon",
                "city"=>"Mirpur",
                "mobile"=>"123456",
            ],
            2 => [
                "name"=> "aminur",
                "city"=>"Lalbag",
                "mobile"=>"123456",
            ],
        ];

        return view('blog',[
            'aminur'=> $this->city, 
            'joy'=> $this->mobile, 
            'rajon'=>$this->data]);
    }
    public function about()
    {
        $this->products=Product:: getAllProduct();
        //return $this->products;

        return view('about',['products'=>$this->products]);
    }
    public function contact()
    {
        return view(view: 'contact');
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if($item['id']==$id)
            {
                return view('detail', ['data'=> $item]);
            }
        }
       
    }
  
}
