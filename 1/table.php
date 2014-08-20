<?php
header("Content-type: text/html; charset=utf-8"); 
$a = array();
// 教学工作情况
$a[0]['type'] = '教学工作情况';
$a[0]['content'][0]['value']         = '教学工作量';
$a[0]['content'][0]['dec'][0]['val'] = '完成基本工作量每年360学时为70分';
$a[0]['content'][0]['dec'][0]['rule'][0] = '超过基本工作量没学时加1分，不足10学时，按四舍五入方式计算';
$a[0]['content'][0]['dec'][0]['rule'][1] = '未满基本工作量没学时扣1分，不足10学时，按四舍五入方式计算';

$a[0]['content'][1]['value']  = '教学质量';
$a[0]['content'][1]['dec'][0]['val'] = '教学质量被所在学校评为“优秀”';
$a[0]['content'][1]['dec'][0]['rule'][0] = '加1分';

$a[0]['content'][2]['value']  = '工作态度';
$a[0]['content'][2]['dec'][0]['val'] = '工作态度被所在学校评为“优秀”';
$a[0]['content'][2]['dec'][0]['rule'][0] = '加1分';

$a[0]['content'][3]['value'] = '学生评价';
$a[0]['content'][3]['dec'][0]['val'] = '学生评价为“优秀”';
$a[0]['content'][3]['dec'][0]['rule'][0] = '加1分';

$a[0]['content'][4]['value'] = '指导学生比赛获奖';
$a[0]['content'][4]['dec'][0]['val'] = '国家或教育部一等奖、二等奖、三等奖';
$a[0]['content'][4]['dec'][0]['rule'][0] = '分别加10分、6分、3分';
$a[0]['content'][4]['dec'][1]['val'] = '省市级一等奖、二等奖、三等奖';
$a[0]['content'][4]['dec'][1]['rule'][0] = '分别加5分、3分、2分';
$a[0]['content'][4]['dec'][2]['val'] = '校级一等奖、二等奖、三等奖';
$a[0]['content'][4]['dec'][2]['rule'][0] = '分别加3分、2分、1分';

$a[0]['content'][5]['value'] = '个人奖励';
$a[0]['content'][5]['dec'][0]['val'] = '被所在国教育部评为“优秀”志愿者';
$a[0]['content'][5]['dec'][0]['rule'][0] = '加5分';

// 教研成果
$a[1]['type'] = '教研成果';
$a[1]['content'][0]['value'] = '论文';
$a[1]['content'][0]['dec'][0]['val'] = '在公开出版的核心期刊上发表汉语教学或志愿者项目相关论文';
$a[1]['content'][0]['dec'][0]['rule'][0] = '第一作者每篇加5分';
$a[1]['content'][0]['dec'][0]['rule'][1] = '第二作者每篇加2分';
$a[1]['content'][0]['dec'][0]['rule'][2] = '第三作者每篇加1分';

$a[1]['content'][0]['dec'][1]['val'] = '在公开出版的普通期刊上发表汉语教学或志愿者项目相关论文';
$a[1]['content'][0]['dec'][1]['rule'][0] = '第一作者每篇加2分';
$a[1]['content'][0]['dec'][1]['rule'][1] = '第二作者每篇加1分';

// 课外活动
$a[2]['type'] = '课外活动';
$a[2]['content'][0]['value'] = '团队协作';
$a[2]['content'][0]['dec'][0]['val'] = '团队协作精神被锁在学校评为优秀';
$a[2]['content'][0]['dec'][0]['rule'][0] = '加1分';

$a[2]['content'][1]['value'] = '中国文化活动';
$a[2]['content'][1]['dec'][0]['val'] = '作为负责人组织1次全校性中国文化活动';
$a[2]['content'][1]['dec'][0]['rule'][0] = '每次加1分';

$a[2]['content'][1]['dec'][1]['val'] = '参与1次全校行中国文化活动';
$a[2]['content'][1]['dec'][1]['rule'][0] = '每次加0.5分';

// 行为规范
$a[3]['type'] = '行为规范';
$a[3]['content'][0]['value'] = '志愿者管理规定遵守情况';
$a[3]['content'][0]['dec'][0]['val'] = '严重违反志愿者管理规定';
$a[3]['content'][0]['dec'][0]['rule'][0] = '每次至少扣2分';

$a[3]['content'][1]['value'] = '所在学校校纪校规遵守情况';
$a[3]['content'][1]['dec'][0]['val'] = '严重违反学校校纪校规';
$a[3]['content'][1]['dec'][0]['rule'][0] = '每次扣2分';

$a[3]['content'][2]['value'] = '所在国法律遵守情况';
$a[3]['content'][2]['dec'][1]['val'] = '违反所在国法律';
$a[3]['content'][2]['dec'][1]['rule'][0] = '根据情节轻重扣10-30分';
//echo '<pre>';
//print_r($a);
$jxgzl[] = $a[0]['content'][0]['dec'][0];
echo '<pre>';
$aa[] = $a[0];
$lbarraysum1 = $a[0]['content'][0]['dec'][0]['rule'];
$lbarraysum2 = $a[0]['content'][1]['dec'][0]['rule'];
$lbarraysum3 = $a[0]['content'][2]['dec'][0]['rule'];
$lbarraysum4 = $a[0]['content'][3]['dec'][0]['rule'];
$lbarraysum5 = $a[0]['content'][4]['dec'][0]['rule'];
$lbarraysum6 = $a[0]['content'][4]['dec'][1]['rule'];
$lbarraysum7 = $a[0]['content'][4]['dec'][2]['rule'];
$lbarraysum8 = $a[0]['content'][5]['dec'][0]['rule'];
$lbarraysum = count($lbarraysum1) + count($lbarraysum2) + count($lbarraysum3) + count($lbarraysum4) + count($lbarraysum5) + count($lbarraysum6) + count($lbarraysum7) + count($lbarraysum8);
$lbarray[] = array_merge($lbarraysum1, $lbarraysum2, $lbarraysum3, $lbarraysum4, $lbarraysum5, $lbarraysum6, $lbarraysum7, $lbarraysum8);
//echo $arraysum.'<br />';
echo '<pre>';
print_r($a);
?>
<caption align="center">国家汉办汉语教师志愿者履职考评表3</caption>
<table border="1" cellpadding="0" cellspacing="0" width="100%" valign="middle">
  <tr>
    <td width="35%">加分或扣分</td>
    <td width="13%">评分</td>
  </tr>
  <tr>
<?php $i=0;
while ($i < $lbarraysum) {
  echo '<td>';
  echo '</td>';
  $i++;
}

?>
  </tr>
