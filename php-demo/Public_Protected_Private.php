<?php
class Tee{
    public $name = "MLB";//có thể truy cập từ bất kì đâu trong chương trình
    protected $color = "green" ;//chỉ có thể truy cập từ bên trong hoặc lớp kế thừa
    private $size = "L";// chỉ có thể truy cập từ bên trong class hiện được định nghĩa

    const VERSION = 1;//  chỉ có thể được gán giá trị một lần và không thể thay đổi giá trị

    public function check(){
        echo self::VERSION;//dùng để tham chiếu đến class hiện tại (Tee)
    }
}
class TeeChild extends Tee{
    public function echoProperty(){
        echo $this->color;
        // echo $this->size; Không thể truy cập
    }
}
$newTee = new Tee();
$newTee2 = new TeeChild();
echo $newTee->check();
echo $newTee2->echoProperty();
