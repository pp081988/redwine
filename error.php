<?php

/*
错误代码			解释
10001			频繁请求，约束时间内不执行动作
10002			文章评论写入失败
10003			写入文章评论ID字段失败
10004			写入评论表中点赞用户ID失败
10005			更新评论表点赞+1失败
10006			评论回复的用户不存在
10007			对文章表中的Like或Dislike的增加更新失败
10008			已经点击过Like或Dislike，拒绝在现有状态下点击Like或Dislike
10009			重复点击Like或Dislike时更新删减已有文章表ID时出错
10010			写入USERS表Like或Dislike时失败
10011			对文章表中的Like或Dislike的减少更新失败
10012			评论内容为空
10013			提交产品分类添加时没有选择添加位置
10014			写入分类时失败
*/