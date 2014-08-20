<?php 
	class Person
	{
		private $height;
		private $weight;
		private $name;
		private $sex;

		public function __construct($name, $sex, $weight, $height)
		{
			$this->name = $name;
			$this-> sex   =$sex;
			$this->weight = $weight;
			$this->height = $height;
		}

		public function setName($name)
		{
			$this->name = $name;
		}
		public function getName()
		{
			return $this-> name;
		}

	}
	$person = new Person('wangwu', 'man', 80, 170);
	$person1 = new Person('zhaosi', 'woman', );
	//$person-> setName('lisi') ;
	//echo $person-> getName();
	print_r($person);




	?>