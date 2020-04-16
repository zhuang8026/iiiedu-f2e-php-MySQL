<?php
// OOP 物件导向
// PHP的物件有4種定義變數的可用範圍
// 這些定義方法分別是 static 、 public 、 private 、 protected
// 而使用範圍由大到小剛好也是
// static(靜態變數) > public(公有變數) > protected > private(私有變數)
// https://newaurora.pixnet.net/blog/post/190301967-static%E8%AE%8A%E6%95%B8%E3%80%81public%E8%AE%8A%E6%95%B8%E3%80%81private%E8%AE%8A%E6%95%B8%E3%80%81protected%E8%AE%8A

class MyCar {
    // private key => 私有变数
    // private values => 不可变动的是值 ，请记住，是 值 !!!
    private $wheels; 
    private $seats;
    private $color;
    private $doors;
    private $brand;
    private $name;

    //建構子 => 构造函数
    // public => 公有变数
    // public values => 值可随意更改
    // "->"   => 是使用方法命令
    public function __construct(){
        $this->wheels = 4;      // 设定不可以改动的值
        $this->seats = 4;       // 设定不可以改动的值
        $this->color = 'red';   // 设定不可以改动的值
        $this->doors = 5;       // 设定不可以改动的值
    }

    /**
     * 說明: 取得車子詳細資訊
     * 回傳型別: Object 
     */
    // public => 
    public function getCarDetail(){
        $obj = [];
        $obj['wheels'] = $this->wheels;
        $obj['seats'] = $this->seats;
        $obj['color'] = $this->color;
        $obj['doors'] = $this->doors;
        $obj['brand'] = $this->brand;
        return $obj;
    }

    /**
     * 說明: 設定廠牌
     * 回傳型別: (不傳回值)
     */
    public function setBrand($strBrand){
        $this->brand = $strBrand; // $strBrand => "Toyota"
    }

    public function setName($name){
        $this->name = $name; // $strBrand => "Toyota"
    }

    public function getName(){
        return $this->name; 
    }

    //解構子
    public function __destruct(){}
}

$objCar = new MyCar();                  //創造 MyCar 類別的物件 $objCar
$objCar->setBrand('Toyota');            //設定廠牌名稱
$objDetail = $objCar->getCarDetail();   //取得 $objCar 的詳細資訊

$objCar->setName('william');
echo $objCar->getName();        // 改变私有变数的方法，必须使用class 中的public function方法
echo $objCar->name;             // 1.报错 2.不使用 $name，是因为 $objCar 已经在使用了，所以使用构造函数的变数不需要加 “$”

unset($objCar);                         //消滅 $objCar 物件
?>
<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
</head>
<body>

<pre>
<?php
    print_r($objDetail);
?>
</pre>

</body>
</html>