<?php
namespace app\index\controller;

use think\facade\Log;
use think\Controller;
use pay\PayFactory;
use app\index\repository\UserRepository;
use app\common\model\User;
use encryption\Crypts;

class Index extends Controller
{
	
	protected $repository;
	
	public function __construct()
	{
		//$this->repository = new UserRepository(User);
	}
	

    public function index()
    {
        
		return PayFactory::name('alipayf')->transfer('100');	
	
	}
	
	
	//测试
	public function test()
	{
		
		$crypts =  new  Crypts;
		$dd =  encrypt(4444);
		
		echo $dd;
		
		echo decrypt($dd);
		
		
	}

   

   
}
