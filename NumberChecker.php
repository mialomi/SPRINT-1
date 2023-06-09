<?php
class NumberChecker  {


	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
$number1 = new NumberChecker(10);
echo ($number1->isEven());
echo ($number1->isPositive());
?>
