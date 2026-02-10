<?php
// Q1 変数と文字列
$name = '山田';
echo '私の名前は' . $name . 'です。';

// Q2 四則演算
$num = 5 * 4;
echo "$num \n";
echo $num / 2;

// Q3 日付操作
echo '現在時刻は' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'Windows';
if ($device === 'Windows') {
  echo '使用OSは、windowsです。';
} else {
  if ($device === 'Mac') {
    echo '使用OSは、Macです。';
  } else {
    echo 'どちらでもありません。';
  }
}

// Q5 条件分岐-2 三項演算子
$age = 20;
echo ($age < 18 ) ? '未成年です。' : '成人です。';

// Q6 配列
$kanto = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '茨城県', '群馬県'];
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kencho = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($kencho as $prefecture => $capital) {
  echo $capital. "\n";
}

// Q8 連想配列-2
foreach ($kencho as $prefecture => $capital) {
  if($prefecture === '埼玉県') {
    echo $prefecture . 'の県庁所在地は、' . $capital . 'です。';
  }
}

// Q9 連想配列-3
$kencho['愛知県'] = '名古屋市';
$kencho['大阪府'] = '大阪市';
foreach ($kencho as $prefecture => $capital) {
  if(in_Array($prefecture, $kanto)) {
    echo $prefecture . 'の県庁所在地は、' . $capital . "です。\n";
  } else {
    echo $prefecture . "は関東地方ではありません。\n";
  }
}

// Q10 関数-1



// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>