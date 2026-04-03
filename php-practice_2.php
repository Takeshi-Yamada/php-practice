<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
//問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . "です。\n";
//問題2
foreach ($personalInfos as $index => $info) {
    echo $index+1 . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . "です。\n";
}
//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
  $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1


class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function getInfo() {
        return '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . "です。\n";
    }

    public function attend($lang)
    {
        echo $this->studentName . 'は' . $lang . 'の授業に参加しました。学籍番号：' . $this->studentId . "\n";
    }
}

$yamada = new Student(120, '山田');
echo $yamada->getInfo();

// Q4 オブジェクト-2
$yamada->attend('PHP');

// Q5 定義済みクラス
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');

$date1 = new DateTime();
$date2 = new DateTime('1992-4-25');

$diff = $date1->diff($date2);
echo 'あの日から' . $diff->days . '日経過しました';

?>