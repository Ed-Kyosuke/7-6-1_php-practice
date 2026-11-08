<?php
$original_price = 5000;
$discount_rate = 0.2;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
$number = 7;
$age=25;
$is_member = true;
$is_student = true;
$score = 100;

echo "元の価格：" . $original_price . "円<br>";
echo "割引率：" . $discount_rate*100 . "%<br>";
echo "<strong>割引後価格：" . $final_price . "円</strong><br>";

if ($number % 2 == 0) {
    echo "{$number}は偶数です";
} else {
    echo "{$number}は奇数です";
}

if ($age>=18 && $is_member) {
    echo "割引が適用されます<br>";
}
if ($age>=65 || $is_student = true) {
    echo "シニア・学生割引が適用されます<br>";
}

echo "初期スコア：{$score}点<br>";
$score += 50;
echo "ボーナス後：{$score}点<br>";
$score -=30;
echo "ダメージ後：{$score}点<br>";
$score *= 2;
echo "最終スコア：{$score}点<br>";
