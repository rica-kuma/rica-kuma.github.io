  <!--series-titleの定義-->
  <?php
                class Menu {
                private $title;
                private $image;
                private $price;
                private $orderCount = 0;
                
                public function __construct($title,$image,$price) {
                    $this->title = $title;
                    $this->image = $image;
                    $this->price = $price;

                }
                
                public function getTitle(){
                    return $this->title;
                }
                public function getImage(){
                    return $this->image;
                }
                public function getPrice(){
                    return $this->price;
                }

                public function getOrderCount(){
                    return $this->orderCount;
                }

                public function setOrderCount($orderCount){
                   $this->orderCount=$orderCount;
                }
                 

                public function getTaxInPrice(){
                    return floor ($this->price*1.1);
                    }
                
                public static function findByTitle($tops, $title) {
                    foreach ($tops as $top) {
                      if ($top->getTitle() == $title) {
                        return $top;
                      }
                    }
                  }
                 
                
                public static function findBySecondTitle($seconds1, $title) {
                    foreach ($seconds1 as $second1) {
                      if ($second1->getTitle() == $title) {
                        return $second1;
                      }
                    }
                  }

                public static function findBySecond2Title($seconds2, $title) {
                    foreach ($seconds2 as $second2) {
                      if ($second2->getTitle() == $title) {
                        return $second2;
                      }
                    }
                  }
                
                public static function findBySecond3Title($seconds3, $title) {
                    foreach ($seconds3 as $second3) {
                      if ($second3->getTitle() == $title) {
                        return $second3;
                      }
                    }
                  } 

                public function getTotalPrice(){
                    return $this->getTaxInPrice()*$this->orderCount;
                  }
                
            }

           
    ?>
          