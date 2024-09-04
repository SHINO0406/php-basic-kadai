<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai016</title>
 </head>
 
 <body>
    <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }

             public function show_price() {
                echo $this-> price. '<br>';

            }
         }


         
 
         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             private $name;
             private $height;
             private $weight;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }

             public function show_height() {
                echo $this->height . '<br>';
            }
         }

         // インスタンス化する
         $Food = new Food('tomato', 250);
 
         print_r($Food);
         echo '<br>';
        // インスタンス化する
         $Animal = new Animal('cat', 300 , 150);        
         print_r($Animal);
         echo '<br>';

         $Food->show_price();
         $Animal->show_height();

         ?>
     </p>
</body>

</html>