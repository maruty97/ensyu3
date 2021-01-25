<?php
$items=[
    ['id'=>'1', 'name'=>'pencil', 'price'=>'100', 'stock'=>'78', 'sales'=>'47'],
    ['id'=>'2', 'name'=>'pen', 'price'=>'150', 'stock'=>'12', 'sales'=>'30'],
    ['id'=>'3', 'name'=>'case', 'price'=>'500', 'stock'=>'12', 'sales'=>'20'],
    ['id'=>'4', 'name'=>'note', 'price'=>'200', 'stock'=>'97', 'sales'=>'100']
    ];
    
    $count=0;
    $stockorder=[];

    
    while($count<count($items)){
        $tmp=null;
       
        foreach($items as $item){
            //flag変数を準備する。0の場合はstockorderに登録されていない。1の場合はstockorderに登録されている。
            $flag =0;
            //stockorderに登録されているか処理。登録されている場合は、stockorderを１に変更
            if(empty($stockorder)==false){
                foreach($stockorder as $stock){
                    if($stock['id']==$item['id']){
                        $flag=1;
                    }
                }
            }
        
            //１以外の場合、入れ替え作業を実施
            if($flag!=1){
                if($tmp ===null){
                    $tmp=$item;
                }else{
                    if($tmp['stock'] < $item['stock']){
                        $tmp = $item;
                    }
                }
            }
        }
        
        $stockorder[]=$tmp;
        $count++;
    }
    
    //在庫が多い順に表示
    foreach($stockorder as $stock){
        echo $stock['name'].'の在庫は'.$stock['stock'].'です。'."\n";    
    }
    

    //在庫が多い順にソートして、商品名(name)と在庫(stock)内容を表示。array_multisortを使用した場合
    foreach($items as $key => $value){
        $stock2[$key] = $value['stock'];
    }
    array_multisort($stock2,SORT_DESC,$items);
    print_r($items);

?>

<?php
//在庫が少ない商品名(name)を表示してください。
$items=[
    ['id'=>'1', 'name'=>'pencil', 'price'=>'100', 'stock'=>'78', 'sales'=>'47'],
    ['id'=>'2', 'name'=>'pen', 'price'=>'150', 'stock'=>'12', 'sales'=>'30'],
    ['id'=>'3', 'name'=>'case', 'price'=>'500', 'stock'=>'12', 'sales'=>'20'],
    ['id'=>'4', 'name'=>'note', 'price'=>'200', 'stock'=>'97', 'sales'=>'100']
    ];

    foreach($items as $key => $value){
        $stock3[$key] = $value['stock'];
    }
        array_multisort($stock3,SORT_ASC,$items);
        print_r($items);
?>    

<?php
//・売上(price*sales)が高い順に表示してください。
$items=[
    ['id'=>'1', 'name'=>'pencil', 'price'=>'100', 'stock'=>'78', 'sales'=>'47'],
    ['id'=>'2', 'name'=>'pen', 'price'=>'150', 'stock'=>'12', 'sales'=>'30'],
    ['id'=>'3', 'name'=>'case', 'price'=>'500', 'stock'=>'12', 'sales'=>'20'],
    ['id'=>'4', 'name'=>'note', 'price'=>'200', 'stock'=>'97', 'sales'=>'100']
    ];
foreach($items as $key => $value){
    $stock4[$key]=$value['price']*$value['sales'];
}
    array_multisort($stock4,SORT_DESC,$items);
    print_r($items);


?>

<?php
//・商品名(name)に‘pen’という文字が含まるものについて、商品名(name)と価格(price)を表示してください。
$items=[
    ['id'=>'1', 'name'=>'pencil', 'price'=>'100', 'stock'=>'78', 'sales'=>'47'],
    ['id'=>'2', 'name'=>'pen', 'price'=>'150', 'stock'=>'12', 'sales'=>'30'],
    ['id'=>'3', 'name'=>'case', 'price'=>'500', 'stock'=>'12', 'sales'=>'20'],
    ['id'=>'4', 'name'=>'note', 'price'=>'200', 'stock'=>'97', 'sales'=>'100']
    ];



?>