<?php  

// class Abid{

// 	public $Eyes = 2;
// 	public $Hand = 2;


// 	function Eyeincrement(){
// 		echo $this->Eyes+1; 
// 	}

// 	function Eyedecrement(){
// 		echo $this->Eyes-1;
// 	}
// }

// $AbidObj = new Abid;

// $AbidObj2 = new Abid;

// $AbidObj->Eyeincrement();

// $AbidObj->Eyedecrement();

// echo $AbidObj->Hand=4;

// echo $AbidObj2->Hand;


//Inheritance
// class WashingMachine{
// 	private $Blades;
// 	protected $Speeed;
// 	public $Power_Consumption;

// 	function IncreaseBlade(){
// 	echo $this->Blades++;
// 	}

// 	function getBladeValue(){
// 		return $this->Blades;
// 	}

// 	function DecreaseBlade(){
// 	echo $this->Blades--;
// 	}

// 	function __construct($a,$b,$c){
// 		//echo "Here Constructor Called by Itself";
// 		echo $this->Blades=$a;
// 		echo $this->Speeed=$b;
// 		echo $this->Power_Consumption=$c;
// 	}

// }

// class WashingMachineVer2 extends WashingMachine{
// 	public $Weight;
// 	function getSpeedValue(){
// 		return $this->Speeed;
// 	}

// }

// $Obj2 = new WashingMachineVer2(5,6,'40Watt//');

// $Obj2->Weight='10';

// echo $Obj2->getSpeedValue();

//$Obj->Blades;


//Abstract Class

// abstract class Car{
// 	public $name;
// 	public function __construct($name){
// 		return $this->name = $name;
// 	}
// 	abstract public function intro(): string;
// }

// class Audi extends Car{
// 	public function intro(): string{
// 		return "Hello My Car name is $this->name!";
// 	}
// }

// class BMW extends Car{
// 	public function intro(): string{
// 		return "Hello My Car name is $this->name!";
// 	}
// }

// class Lamborgini extends Car{
// 	public function intro(): string{
// 		return "Hello My Car name is $this->name!";
// 	}
// }

// $ObjAudi = new Audi('Audi');
// echo $ObjAudi->intro();
// echo "<br>";

// $ObjBMW = new BMW('BMW');
// echo $ObjBMW->intro();
// echo "<br>";


//Abstract Class Example2

// abstract class Parenclass{
// 	abstract public function prefix($name);
// }

// class ChildClass extends Parenclass{
// 	public function prefix($name){
// 		if($name == 'Shaikh Abid'){
// 			$prefix =  'Mr.';
// 		}elseif($name = 'Shaikh Arfa'){
// 			$prefix = 'Mrs.';
// 		}else{
// 			$prefix = '';
// 		}
// 		return "{$prefix}{$name}";
// 	}
// }

// $Objchildclass = new ChildClass;

// echo $Objchildclass->prefix('Shaikh Arfa');



//Abstract Class Example3

// abstract class Parenclass{
// 	abstract public function prefix($name);
// }

// class ChildClass extends Parenclass{
// 	public function prefix($name,$seperator = '.',$greeting = 'Dear'){
// 		if($name = 'Shaikh Abid'){
// 			$prefix = 'Mr';
// 		}elseif($name = 'Shaikh Arfa'){
// 			$prefix = 'Mrs';
// 		}else{
// 			$prefix = '';
// 		}
// 		return "{$greeting} {$prefix}{$seperator} {$name}";
// 	}
// }

// $Objchildclass = new ChildClass;

// echo $Objchildclass->prefix('Shaikh Arfa');



//Interface

// interface a{
// 	public function a();
// }

// interface b{
// 	public function b();
// }

// class demo implements a,b{
// 	public function a(){
// 		echo "Function a called";
// 	}

// 	public function b(){
// 		echo "Function b called";
// 	}
// }

// $Obj = new demo;

// $Obj->a();
// $Obj->b();



//Static variable and method

// class Home{
// 	public static $name = 'Hello';

// 	public static function getName($a){
// 		echo self::$name=$a;
// 	}
// }
// echo Home::$name;

// $Obj = new Home;

//Static 
// class doamin{
// 	public static function getWebsiteName(){
// 		return "www.abid.com";
// 	}
// }

// class doamin3 extends doamin{
// 	public $websitename;

// 	public function __construct(){
// 		$this->websitename = parent::getWebsiteName();
// 	}
// }

// $Obj = new doamin3;
// echo $Obj->websitename;


//Late Static Binding

// class DB{
// 	protected static $name = "db_name";

// 	public static function Insert(){
// 		return "SELECT * FROM" .static::$name;
// 	} 
// 	public static function Update(){
// 		return "UPDATE".static::$name ."SET WHERE usernane = " .static::$name;
// 	} 
// }


// class Demo extends DB{
// 	protected static $name = "Abid";
// }

// $Obj = new Demo();

// echo $Obj->Insert();



//Inheritance demo

// class Parent1{
// 	public $num;
// 	function __construct(){
// 		 $this->num=5;
// 		//echo "Parent Constructor";
// 	}
// }

// class Child extends Parent1{
// 	function __construct(){
// 		parent::__construct();
// 		echo "Child Constructor Called";
		
// 		$this->num=10;
// 	}
// }

// $Obj = new Child;
// echo $Obj->num;


//Static
// class class1{
// 	static public $num=10;
// 	static function fun1(){
// 		slef::$num;
// 	}
// }
// //class1::$num=20;
// echo class1::$num;



//Trait Example

trait class1{
	public function fun1(){
		echo "Fun1 first called";
	}
}

trait class2{
	public function fun1(){
		echo "Fun1 second trait class called";
	}
}


class class3 {
	use class1,class2{
		class1::fun1 insteadof class2;
		class2::fun1 as fun2;
	}
	
}

$Obj = new class3;
$Obj->fun2 ();




















?>