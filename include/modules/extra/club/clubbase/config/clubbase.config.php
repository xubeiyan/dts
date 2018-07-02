<?php

namespace clubbase
{
	//最大可选择的称号数目（第一个数值为普通称号，第二个数值为特殊称号）
	//玩家可以从这些称号中任选一个作为自己的称号
	$max_club_choice_num = Array(2,2);
	
	//称号编号列表
	//格式为 称号编号 => 称号描述，称号描述包含3个域，type，probability, 和skills
	//type: 0表示普通称号，1表示特殊称号
	//probability: 称号出现的相对几率
	//基准相对几率应为100，相对几率应为整数，一个称号在玩家的一个选择中出现的实际概率是它的相对几率/所有该类（普通/特殊）称号相对几率之和
	//skills: 获得这个称号时获得的技能编号列表（一个array）
	$clublist = Array();
	
	//称号名称
	//clubinfo格式 称号编号 => 称号名称
	//请在各个称号里进行赋值，这里只写注释代表哪个数字已经被某个模块占用了
	$clubinfo = Array(
		0=>'无',
		//1 街头霸王
		//2 见敌必斩
		//3 狙击鹰眼
		//4 灌篮高手
		//5 拆弹专家
		//9 超能力者
		//6 宛如疾风
		//8 黑衣组织
		//7 锡安成员
		//10 高速成长
		//11 富家子弟
		12=>'全能骑士',
		//13 根性兄贵
		//14 肌肉兄贵
		//15=>'<span class="L5 b">L5状态</span>',
		16=>'冥土追魂',
		//17 走路萌物
		//18 天赋异禀
		//19 铁拳无敌
		//20 宝石骑士
		//21 最强大脑
		//24 亡灵骑士
		//94 解离攻坚
		//95 解离副手
		//96 解离辅助
		//97 装逼战士,
		98=>'换装迷宫',
		//99 第一形态
	);
	
	//称号特性说明
	//clubdesc格式 称号编号 => 称号说明
	//会影响帮助以及技能列表里这个称号的特性
	//请在各个称号里进行赋值，这里只写注释代表哪个数字已经被某个模块占用了
	$clubdesc_a = Array();
	
	//同上，不过这是在帮助页面显示的。部分称号有区别
	$clubdesc_h = Array();

	//各称号技能名称
	$clubskillname = Array();
}

?>