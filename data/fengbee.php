<?php  
	$type = $_REQUEST['type'];//首页幻灯
	$str = "";
	if ($type == 'home_banner') {
		$str='{
    "resultCode": "0000",
    "response": [
        {
            "id": "1228",
            "image": "https://simg.fengbee.cn/upload/zjAvatar/b_rrwxyzpzn.jpg",
            "platform": "0",
            "grade2": null,
            "action": "5",
            "album_id": "343805852",
            "url": "https://h5.youzan.com/v2/goods/2ofarki8yo661?ps=360",
            "browser": "0",
            "param_type": "0",
            "rank": "1",
            "create_time": "2017-07-20 15:02:56",
            "status": "1",
            "app_ver": "0.0.0"
        },
        {
            "id": "1227",
            "image": "https://simg.fengbee.cn/upload/zjAvatar/b_fbdyrxbds.jpg",
            "platform": "0",
            "grade2": null,
            "action": "7",
            "album_id": "0",
            "url": "http://www.fengbee.cn/bar_post?post_id=1200",
            "browser": "0",
            "param_type": "0",
            "rank": "2",
            "create_time": "2017-07-18 10:50:00",
            "status": "1",
            "app_ver": "0.0.0"
        },
        {
            "id": "1226",
            "image": "https://simg.fengbee.cn/upload/zjAvatar/b_sjqdhd.jpg",
            "platform": "0",
            "grade2": null,
            "action": "23",
            "album_id": "0",
            "url": "https://wx.fengbee.cn/campaign_summersignindex",
            "browser": "0",
            "param_type": "0",
            "rank": "3",
            "create_time": "2017-07-14 17:06:30",
            "status": "1",
            "app_ver": "6.7.1"
        },
        {
            "id": "1224",
            "image": "https://simg.fengbee.cn/upload/zjAvatar/b_ccndchl.jpg",
            "platform": "0",
            "grade2": null,
            "action": "18",
            "album_id": "12222",
            "url": "",
            "browser": "0",
            "param_type": "0",
            "rank": "4",
            "create_time": "2017-07-14 11:50:28",
            "status": "1",
            "app_ver": "6.5.0"
        },
        {
            "id": "1225",
            "image": "https://simg.fengbee.cn/upload/zjAvatar/b_sjyhymfskc.jpg",
            "platform": "0",
            "grade2": null,
            "action": "24",
            "album_id": "0",
            "url": "",
            "browser": "0",
            "param_type": "0",
            "rank": "5",
            "create_time": "2017-07-14 17:06:04",
            "status": "1",
            "app_ver": "6.7.1"
        }
    ],
    "msg": "成功"
}';
	}elseif ($type == "home_list") {//首页其他内容
		$str = '{
    "resultCode": "0000",
    "response": {
        "nowaudios": [
            {
                "theday": "2017-07-15",
                "year": "2017",
                "month": "07",
                "day": "15",
                "week": "周六",
                "audios": [
                    {
                        "id": "8378",
                        "name": "Excuse me?! 与黑人问号脸",
                        "size": "3.24",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/k-0712-excuseme.mp3",
                        "hours": "212",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1021_k-0712-excuseme.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/k-0712-excuseme.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1021_k-0712-excuseme.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1021/k-0712-excuseme.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2fzky.jpg"
                    },
                    {
                        "id": "8355",
                        "name": "假期的理想和现实",
                        "size": "1.52",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0715.mp3",
                        "hours": "125",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0715.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0715.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0715.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0715.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg"
                    },
                    {
                        "id": "8380",
                        "name": "爱乐之城—写给浪漫和梦想的情书",
                        "size": "2.94",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/aiyuezhicheng.mp3",
                        "hours": "249",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_aiyuezhicheng.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/aiyuezhicheng.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_aiyuezhicheng.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/aiyuezhicheng.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/kdyxyydc.jpg"
                    }
                ],
                "periods": [
                    {
                        "code": 2,
                        "name": "早读",
                        "time": "04:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_morning_pic.png"
                    },
                    {
                        "code": 3,
                        "name": "午听",
                        "time": "10:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_noon_pic.png"
                    },
                    {
                        "code": 5,
                        "name": "晚修",
                        "time": "19:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_evening_pic.png"
                    }
                ],
                "istoday": 0
            },
            {
                "theday": "2017-07-16",
                "year": "2017",
                "month": "07",
                "day": "16",
                "week": "周日",
                "audios": [
                    {
                        "id": "8379",
                        "name": "不好意思..请问..麻烦您了...",
                        "size": "2.06",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/k-0712-pardon.mp3",
                        "hours": "135",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1021_k-0712-pardon.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/k-0712-pardon.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1021_k-0712-pardon.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1021/k-0712-pardon.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2fzky.jpg"
                    },
                    {
                        "id": "8256",
                        "name": "暑期做了这，还怕开学测验成绩不理想吗？",
                        "size": "6.84",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi0714.mp3",
                        "hours": "596",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_mingshi0714.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi0714.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_mingshi0714.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/mingshi0714.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/msjt_n.jpg"
                    },
                    {
                        "id": "8362",
                        "name": "关于暑假学习休息两不误的行动清单",
                        "size": "4.72",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1033/lizhigaokao.mp3",
                        "hours": "411",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1033_lizhigaokao.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1033/lizhigaokao.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1033_lizhigaokao.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1033/lizhigaokao.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/khlzzl.jpg"
                    }
                ],
                "periods": [
                    {
                        "code": 2,
                        "name": "早读",
                        "time": "04:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_morning_pic.png"
                    },
                    {
                        "code": 3,
                        "name": "午听",
                        "time": "10:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_noon_pic.png"
                    },
                    {
                        "code": 5,
                        "name": "晚修",
                        "time": "19:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_evening_pic.png"
                    }
                ],
                "istoday": 0
            },
            {
                "theday": "2017-07-17",
                "year": "2017",
                "month": "07",
                "day": "17",
                "week": "周一",
                "audios": [
                    {
                        "id": "8372",
                        "name": "正能量早餐|过好今天，为明天做准备",
                        "size": "1.63",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/guohaojintianmeimingtianzuozhunbei.mp3",
                        "hours": "135",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_guohaojintianmeimingtianzuozhunbei.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/guohaojintianmeimingtianzuozhunbei.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_guohaojintianmeimingtianzuozhunbei.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/guohaojintianmeimingtianzuozhunbei.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg"
                    },
                    {
                        "id": "3687",
                        "name": "赵丽颖：我的努力配得上我的运气",
                        "size": "6.49",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/mxlzgzhaoliying0725.mp3",
                        "hours": "283",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_mxlzgzhaoliying0725.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/mxlzgzhaoliying0725.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_mxlzgzhaoliying0725.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/mxlzgzhaoliying0725.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/mxlzg.jpg"
                    },
                    {
                        "id": "8356",
                        "name": " 防沉溺游戏须先筑牢“身份防火墙”",
                        "size": "1.96",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/fangchenmiyouxi.mp3",
                        "hours": "163",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_fangchenmiyouxi.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/fangchenmiyouxi.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_fangchenmiyouxi.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/fangchenmiyouxi.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zwscttd_2017_1.jpg"
                    }
                ],
                "periods": [
                    {
                        "code": 2,
                        "name": "早读",
                        "time": "04:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_morning_pic.png"
                    },
                    {
                        "code": 3,
                        "name": "午听",
                        "time": "10:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_noon_pic.png"
                    },
                    {
                        "code": 5,
                        "name": "晚修",
                        "time": "19:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_evening_pic.png"
                    }
                ],
                "istoday": 0
            },
            {
                "theday": "2017-07-18",
                "year": "2017",
                "month": "07",
                "day": "18",
                "week": "周二",
                "audios": [
                    {
                        "id": "8373",
                        "name": "元气早餐|英文歌精选——The Show",
                        "size": "2.84",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/theshow.mp3",
                        "hours": "241",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_theshow.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/theshow.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_theshow.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/theshow.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg"
                    },
                    {
                        "id": "3640",
                        "name": "高中究竟长什么样子的？",
                        "size": "4.2",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1038/sgz1001.mp3",
                        "hours": "314",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1038_sgz1001.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1038/sgz1001.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1038_sgz1001.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1038/sgz1001.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/gy100w.jpg"
                    },
                    {
                        "id": "8358",
                        "name": "格雷戈里：用一生找寻自己",
                        "size": "2.9",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/geleigeli.mp3",
                        "hours": "252",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1041_geleigeli.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/geleigeli.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1041_geleigeli.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1041/geleigeli.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zwscttd_2017_1.jpg"
                    }
                ],
                "periods": [
                    {
                        "code": 2,
                        "name": "早读",
                        "time": "04:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_morning_pic.png"
                    },
                    {
                        "code": 3,
                        "name": "午听",
                        "time": "10:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_noon_pic.png"
                    },
                    {
                        "code": 5,
                        "name": "晚修",
                        "time": "19:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_evening_pic.png"
                    }
                ],
                "istoday": 0
            },
            {
                "theday": "2017-07-19",
                "year": "2017",
                "month": "07",
                "day": "19",
                "week": "周三",
                "audios": [
                    {
                        "id": "8374",
                        "name": "早餐加油站|朋友圈中的九种人你是哪一种呢？",
                        "size": "3.78",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/pengyouquan9zhongren.mp3",
                        "hours": "322",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_pengyouquan9zhongren.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/pengyouquan9zhongren.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_pengyouquan9zhongren.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/pengyouquan9zhongren.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg"
                    },
                    {
                        "id": "2538",
                        "name": "复旦大学：我们是一所自由的高校",
                        "size": "5.96",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/daxue20160212.mp3",
                        "hours": "520",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_daxue20160212.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/daxue20160212.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_daxue20160212.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/daxue20160212.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xjxzkdx.jpg"
                    },
                    {
                        "id": "8357",
                        "name": "历史正剧逆袭二次元青年爱上宏大叙事",
                        "size": "2.37",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/lishizhengjunixi.mp3",
                        "hours": "199",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_lishizhengjunixi.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/lishizhengjunixi.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_lishizhengjunixi.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/lishizhengjunixi.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zwscttd_2017_1.jpg"
                    }
                ],
                "periods": [
                    {
                        "code": 2,
                        "name": "早读",
                        "time": "04:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_morning_pic.png"
                    },
                    {
                        "code": 3,
                        "name": "午听",
                        "time": "10:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_noon_pic.png"
                    },
                    {
                        "code": 5,
                        "name": "晚修",
                        "time": "19:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_evening_pic.png"
                    }
                ],
                "istoday": 0
            },
            {
                "theday": "2017-07-20",
                "year": "2017",
                "month": "07",
                "day": "20",
                "week": "周四",
                "audios": [
                    {
                        "id": "8375",
                        "name": "早餐加油站|吃货必备的美食形容词你知道哪几个？",
                        "size": "1.91",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/chihuobibeidanci.mp3",
                        "hours": "159",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_chihuobibeidanci.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/chihuobibeidanci.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_chihuobibeidanci.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/chihuobibeidanci.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg"
                    },
                    {
                        "id": "2537",
                        "name": "上海财经大学：你若来上财，必成高富帅",
                        "size": "4.79",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/daxue20160211.mp3",
                        "hours": "418",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_daxue20160211.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/daxue20160211.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_daxue20160211.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/daxue20160211.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xjxzkdx.jpg"
                    },
                    {
                        "id": "8359",
                        "name": "汪化：真正热爱的事情从来不会晚",
                        "size": "2.68",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/wnaghua.mp3",
                        "hours": "233",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1041_wnaghua.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/wnaghua.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1041_wnaghua.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1041/wnaghua.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zwscttd_2017_1.jpg"
                    }
                ],
                "periods": [
                    {
                        "code": 2,
                        "name": "早读",
                        "time": "04:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_morning_pic.png"
                    },
                    {
                        "code": 3,
                        "name": "午听",
                        "time": "10:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_noon_pic.png"
                    },
                    {
                        "code": 5,
                        "name": "晚修",
                        "time": "19:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_evening_pic.png"
                    }
                ],
                "istoday": 0
            },
            {
                "theday": "2017-07-21",
                "year": "2017",
                "month": "07",
                "day": "21",
                "week": "周五",
                "audios": [
                    {
                        "id": "8376",
                        "name": "正能量早餐|真正的人生赢家是将手中的坏牌打好",
                        "size": "1.77",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3",
                        "hours": "147",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_km0_zhenzhengderenshengyingjia.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_km0_zhenzhengderenshengyingjia.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg"
                    },
                    {
                        "id": "8360",
                        "name": "一路行走",
                        "size": "2.8",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/yiluqinaxing.mp3",
                        "hours": "243",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1041_yiluqinaxing.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/yiluqinaxing.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1041_yiluqinaxing.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1041/yiluqinaxing.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zwscttd_2017_1.jpg"
                    },
                    {
                        "id": "8377",
                        "name": "Style - 你霉的freestyle",
                        "size": "8.56",
                        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/t-0712-style-gao.mp3",
                        "hours": "560",
                        "rank": "1",
                        "urls": [
                            "http://mp3.fengbee.cn/@_upload_mp3_tcid1021_t-0712-style-gao.mp3",
                            "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/t-0712-style-gao.mp3"
                        ],
                        "urlsHttps": [
                            "https://smp3.fengbee.cn/@_upload_mp3_tcid1021_t-0712-style-gao.mp3",
                            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1021/t-0712-style-gao.mp3"
                        ],
                        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/tinggexueen.jpg"
                    }
                ],
                "periods": [
                    {
                        "code": 2,
                        "name": "早读",
                        "time": "04:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_morning_pic.png"
                    },
                    {
                        "code": 3,
                        "name": "午听",
                        "time": "10:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_noon_pic.png"
                    },
                    {
                        "code": 5,
                        "name": "晚修",
                        "time": "19:00",
                        "icon": "https://simg.fengbee.cn/upload/now/now_evening_pic.png"
                    }
                ],
                "istoday": 1
            }
        ],
        "weekbanners": [
            {
                "id": "20",
                "image": "https://simg.fengbee.cn/upload/zjAvatar/1500004609_419186.png",
                "platform": "0",
                "action": "5",
                "album_id": "343226714",
                "url": "https://h5.youzan.com/v2/goods/3eu86b9uogmsp?ps=360",
                "browser": "0",
                "param_type": "0",
                "rank": "1",
                "create_time": "2017-07-14 11:56:49",
                "status": "1"
            }
        ],
        "shortcutlist": [
            {
                "name": "志愿填报",
                "icon": "https://simg.fengbee.cn/upload/now/1495163298_596821.png"
            },
            {
                "name": "小卖部",
                "icon": "https://simg.fengbee.cn/upload/now/1496204207_985332.png"
            },
            {
                "name": "签到",
                "icon": "https://simg.fengbee.cn/upload/now/shortcut_icon_3.png"
            },
            {
                "name": "互动区",
                "icon": "https://simg.fengbee.cn/upload/now/1493892490_496582.png"
            }
        ],
        "shortcutlist2": [
            {
                "name": "小卖部",
                "icon": "https://simg.fengbee.cn/upload/now/1496204207_985332.png",
                "action": "5",
                "browser": "0",
                "url": "",
                "param1": "0",
                "param2": ""
            },
            {
                "name": "签到",
                "icon": "https://simg.fengbee.cn/upload/now/shortcut_icon_3.png",
                "action": "23",
                "browser": "0",
                "url": "https://wx.fengbee.cn/campaign_summersignindex",
                "param1": "0",
                "param2": ""
            },
            {
                "name": "互动区",
                "icon": "https://simg.fengbee.cn/upload/now/1493892490_496582.png",
                "action": "7",
                "browser": "0",
                "url": "https://wx.fengbee.cn/bar_index",
                "param1": "0",
                "param2": ""
            }
        ]
    },
    "msg": "成功"
}';
	}elseif ($type == "banner_first_detail") {
		$str = '{
    "resultCode": "0000",
    "response": {
        "goodsdetail": {
            "desc_type": "1",
            "num_iid": "343805852",
            "pic_desc_pre": "<p style=\'margin-top: 5px; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Helvetica, \' stheiti=\'\' stxihei\',=\'\' \'microsoft=\'\' jhenghei\',=\'\' yahei\',=\'\' tohoma,=\'\' arial;=\'\' font-size:0.34rem;=\'\' text-align:=\'\' center;\'=\'\'><strong>注意注意！！</strong></p><p style=\'margin-top: 5px; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Helvetica, \' stheiti=\'\' stxihei\',=\'\' \'microsoft=\'\' jhenghei\',=\'\' yahei\',=\'\' tohoma,=\'\' arial;=\'\' font-size:0.34rem;\'=\'\'><span style=\'font-family: 微软雅黑, sans-serif;\'>本商品当前为<span style=\'color: red;\'>【预售商品】</span>！</span></p><p style=\'margin-top: 5px; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Helvetica, \' stheiti=\'\' stxihei\',=\'\' \'microsoft=\'\' jhenghei\',=\'\' yahei\',=\'\' tohoma,=\'\' arial;=\'\' font-size:0.34rem;\'=\'\'><span style=\'font-family: 微软雅黑, sans-serif;\'>7</span><span style=\'font-family: 微软雅黑, sans-serif;\'>月20日-7月23日预售期间</span><strong><span style=\'font-size:0.41rem; font-family: 微软雅黑, sans-serif; color: red;\'>特价29.9元</span></strong><span style=\'font-family: 微软雅黑, sans-serif;\'>，结束后即恢复原价！明信片将在</span><strong><span style=\'font-size:0.41rem; font-family: 微软雅黑, sans-serif; color: red;\'>7</span></strong><strong><span style=\'font-size:0.41rem; font-family: 微软雅黑, sans-serif; color: red;\'>月24日</span></strong><span style=\'font-family: 微软雅黑, sans-serif;\'>进行发货！已购买的蜂友请耐心等待~！</span></p><p style=\'margin-top: 5px; margin-bottom: 1em; color: rgb(0, 0, 0); font-size: 0.68rem;\' stheiti=\'\' stxihei\',=\'\' \'microsoft=\'\' jhenghei\',=\'\' yahei\',=\'\' tohoma,=\'\' arial;=\'\' font-size:0.34rem;\'=\'\'><font face=\'微软雅黑, sans-serif\' style=\'\'><span style=\'font-size: 0.51rem;\'>预售期间购买还能获得</span><font><span style=\'color: rgb(255, 0, 0);\'><strong>冉冉亲笔签名</strong></span>！！!</font></font><font face=\'微软雅黑, sans-serif\'><span style=\'color: rgb(255, 0, 0);\'>​</span></font></p><p style=\'margin-top: 5px; margin-bottom: 1em; color: rgb(0, 0, 0); font-family: Helvetica, \' stheiti=\'\' stxihei\',=\'\' \'microsoft=\'\' jhenghei\',=\'\' yahei\',=\'\' tohoma,=\'\' arial;=\'\' font-size:0.34rem;\'=\'\'><span style=\'font-size:0.3rem; font-family: 微软雅黑, sans-serif;\'>PS</span><span style=\'font-size:0.3rem; font-family: 微软雅黑, sans-serif;\'>：这是蜂背第一次尝试推出【主播实物周边】~为了控制成本和库存，我们小心翼翼，希望各位蜂友都能支持你的爱豆！这样蜂背才有可能推出其他主播的周边哦！</span></p>        <p><br></p>",
            "pic_desc": "<p></p>        <p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500535605.jpg\' alt=\'冉冉心情明信片商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500535610.jpg\' alt=\'冉冉心情明信片商品详情图2\' style=\'font-size:0.26rem; max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500535615.jpg\' alt=\'冉冉心情明信片商品详情图3\' style=\'font-size:0.26rem; max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500535620.jpg\' alt=\'冉冉心情明信片商品详情图4\' style=\'font-size:0.26rem; max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500535623.jpg\' alt=\'冉冉心情明信片商品详情图5\' style=\'font-size:0.26rem; max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500535627.jpg\' alt=\'冉冉心情明信片商品详情图6\' style=\'font-size:0.26rem; max-width: 100%;\'><br></p><p><br></p>",
            "avatar": "https://sstore.fengbee.cn/goods/avatar/1500477876_6932_xinqing.jpg",
            "name": "【预售】冉の心情卡片（7月24日发货！）",
            "stock": "518",
            "type": "0",
            "is_sendmail": "0",
            "is_virtual": "0",
            "freight": "0",
            "buy_limit": "0",
            "price": "29.9",
            "spec_list": []
        }
    },
    "msg": "成功"
}';
	}

	elseif ($type == 'message') {//消息（左上角邮件）
		$str = '{
    "resultCode": "0000",
    "response": {
        "userMessages": [],
        "broadcastMessages": [
            {
                "id": "127",
                "user_id": -1,
                "type": "-1",
                "title": "系统消息",
                "avatar": "https://simg.fengbee.cn//upload/message/system.png",
                "content": "冉冉心情有声明信片，开放预售！7月20日-7月23日预售期间，专享【特价29.9元】，附赠【冉冉亲笔签名】！点击此消息马上抢购！",
                "action": "5",
                "browser": "0",
                "url": "",
                "grade": "1000",
                "platform": "0",
                "param1": "343805852",
                "param2": "",
                "create_time": "2017-07-20 17:45:57",
                "is_read": 0
            },
            {
                "id": "108",
                "user_id": -1,
                "type": "-1",
                "title": "系统消息",
                "avatar": "https://simg.fengbee.cn//upload/message/system.png",
                "content": "快乐暑假，签到有奖！活动期间，根据累计签到的天数，最多能获得3份不同的精美奖品，甚至还能在小卖部免单任选！！",
                "action": "23",
                "browser": "0",
                "url": "https://wx.fengbee.cn/campaign_summersignindex",
                "grade": "1000",
                "platform": "0",
                "param1": "0",
                "param2": "",
                "create_time": "2017-07-14 17:59:35",
                "is_read": 0
            },
            {
                "id": "101",
                "user_id": -1,
                "type": "-1",
                "title": "系统消息",
                "avatar": "https://simg.fengbee.cn//upload/message/system.png",
                "content": "【拯救单词】都知道英语单词很重要，就是背不完！蜂背单词魔鬼训练营正式上线啦！第一期仅限100名，拒绝懒癌，10天就能拿下高考核心词汇！",
                "action": "5",
                "browser": "0",
                "url": "https://h5.youzan.com/v2/showcase/goods?alias=3eu86b9uogmsp&ps=360",
                "grade": "1000",
                "platform": "0",
                "param1": "343226714",
                "param2": "",
                "create_time": "2017-07-14 15:06:06",
                "is_read": 0
            },
            {
                "id": "82",
                "user_id": -1,
                "type": "-1",
                "title": "系统消息",
                "avatar": "https://simg.fengbee.cn//upload/message/system.png",
                "content": "温馨提示：音频专辑“高考古诗文高分攻略”第四条音频“两大方法，找准古诗思想情感”蜂背团做了部分修改，请已购买的蜂友，及时下载更新哦！谢谢你的支持。",
                "action": "-1",
                "browser": "0",
                "url": "",
                "grade": "1000",
                "platform": "0",
                "param1": "0",
                "param2": "",
                "create_time": "2017-05-11 10:29:45",
                "is_read": 0
            }
        ]
    },
    "msg": "成功"
}';
	}elseif ($type == "store") {//小卖部
		$str = '{
    "resultCode": "0000",
    "response": {
        "columninfo": [
            {
                "id": "1",
                "name": "最新上架",
                "goodsinfo": [
                    {
                        "goodsname": "【预售】冉の心情卡片（7月24日发货！）",
                        "goodsprice": "29.90",
                        "goodsprice1": "39.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1500477876_6932_xinqing.jpg",
                        "gid": "343805852",
                        "goodstype": "1"
                    },
                    {
                        "goodsname": "单词魔鬼训练营【第一期已售罄，8月4日第二期上架哦！】",
                        "goodsprice": "99.00",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1500000446_1427_xunlianying.jpg",
                        "gid": "343226714",
                        "goodstype": "1"
                    },
                    {
                        "goodsname": "2017全国高考作文真题分析及备考建议",
                        "goodsprice": "6.99",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1497603547_3084_gkzuwspt.jpg",
                        "gid": "340954963",
                        "goodstype": "1"
                    },
                    {
                        "goodsname": "2018高考白皮书 （2017高考试2018备考建议）",
                        "goodsprice": "9.99",
                        "goodsname1":"运费： 免运费",
                        
                        "goodsname2":"剩余：  248",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1497603987_6827_gkbpsspt.jpg",
                        "gid": "340715023",
                        "goodstype": "1"
                    }
                ]
            },
            {
                "id": "2",
                "name": "周末PPT",
                "goodsinfo": [
                    {
                        "goodsname": "蜜蜂物理课内部独家PPT（选修3-2）",
                        "goodsprice": "19.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1496651354_9394_spt32.jpg",
                        "gid": "336992944",
                        "goodstype": "2"
                    },
                    {
                        "goodsname": "蜜蜂物理课内部独家PPT（必修二）",
                        "goodsprice": "19.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1484900965_7506_wlppt2-.jpg",
                        "gid": "323837557",
                        "goodstype": "2"
                    },
                    {
                        "goodsname": "蜜蜂数学课内部独家PPT（必修二）",
                        "goodsprice": "19.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/数学ppt2.jpg",
                        "gid": "302368328",
                        "goodstype": "2"
                    },
                    {
                        "goodsname": "蜜蜂数学课内部独家PPT（必修四）",
                        "goodsprice": "19.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/数学ppt4.jpg",
                        "gid": "310047907",
                        "goodstype": "2"
                    }
                ]
            },
            {
                "id": "3",
                "name": "蜂背好物",
                "goodsinfo": [
                    {
                        "goodsname": "蜂背高分杯【颜色随机发】",
                        "goodsprice": "39.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1491031909_7489_sxb.jpg",
                        "gid": "332637537",
                        "goodstype": "3"
                    },
                    {
                        "goodsname": "高Fun随学卡",
                        "goodsprice": "49.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1488509730_6448_sxkspt.jpg",
                        "gid": "327220131",
                        "goodstype": "3"
                    }
                ]
            },
            {
                "id": "4",
                "name": "电子书",
                "goodsinfo": [
                    {
                        "goodsname": "【电子书】作文素材天天读（2017上半年刊）",
                        "goodsprice": "6.99",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1496388407_2881_2017sbnk.jpg",
                        "gid": "338772414",
                        "goodstype": "4"
                    },
                    {
                        "goodsname": "高考不得不背的80句万能作文名言",
                        "goodsprice": "9.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1484964869_5364_bdbb80tmy.jpg",
                        "gid": "323774742",
                        "goodstype": "4"
                    },
                    {
                        "goodsname": "【电子书】2016高考蜂背五大热播节目文稿典藏合集",
                        "goodsprice": "19.90",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/2016热播节目文稿合集.jpg",
                        "gid": "311485990",
                        "goodstype": "4"
                    },
                    {
                        "goodsname": "【电子书】《民国大家》2016纪念文稿合集",
                        "goodsprice": "6.99",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/民国大家2016纪念文稿合集.jpg",
                        "gid": "311441169",
                        "goodstype": "4"
                    }
                ]
            },
            {
                "id": "5",
                "name": "励志壁纸",
                "goodsinfo": [
                    {
                        "goodsname": "【第二辑】蜂背主题励志壁纸（24张）",
                        "goodsprice": "6.99",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/蜂背手机壁纸-2.jpg",
                        "gid": "315326901",
                        "goodstype": "5"
                    },
                    {
                        "goodsname": "蜂背主题励志壁纸（24张）",
                        "goodsprice": "6.99",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/蜂背手机壁纸-1.jpg",
                        "gid": "271950613",
                        "goodstype": "5"
                    }
                ]
            },
            {
                "id": "6",
                "name": "蜂背救助金",
                "goodsinfo": [
                    {
                        "goodsname": "蜂背救助金",
                        "goodsprice": "5.20",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/蜂背救助金.jpg",
                        "gid": "310139384",
                        "goodstype": "6"
                    },
                    {
                        "goodsname": "1朵鲜花",
                        "goodsprice": "1.00",
                        "goodsimg": "https://sstore.fengbee.cn/goods/avatar/1488523827_9389_rose1.jpg",
                        "gid": "327391139",
                        "goodstype": "6"
                    }
                ]
            }
        ],
        "bannerlist": [
            {
                "bImg": "https://simg.fengbee.cn/upload/youazanbanner/1500535802_938362.jpg",
                "bUrl": "https://wx.fengbee.cn/store_goodsdetail.html?gid=343805852"
            },
            {
                "bImg": "https://simg.fengbee.cn/upload/youazanbanner/1500005086_946328.jpg",
                "bUrl": "store_goodsdetail?gid=343226714"
            },
            {
                "bImg": "https://simg.fengbee.cn/upload/youazanbanner/1496635370_810075.jpg",
                "bUrl": "store_goodsdetail?gid=327220131"
            }
        ],
        "banner_config": {
            "duration": 300,
            "interval": 2500
        }
    },
    "msg": "成功"
}';
	}elseif ($type == "prodectList") {//小卖部-商品列表（点击最新上架）
		$str = file_get_contents('https://wx.fengbee.cn/store_jsongoodslist');
	}
	elseif ($type == "proDetail") {//商品详情
		$proId = $_REQUEST['proId'];//商品id，对应商品列表中的goodsid
		$str = file_get_contents('https://wx.fengbee.cn/store_jsongoodsdetail?num_iid='.$proId);
	}elseif ($type == 'interact_top') {//互动-顶部
		$str = file_get_contents('https://wx.fengbee.cn/bar_jsonindexheader?product_id=1000');
	}elseif ($type == 'interact_list') {//互动列表
		$pageIndex = $_REQUEST['pageIndex'];
		if ($pageIndex == 1) {
			$str = file_get_contents('https://wx.fengbee.cn/bar_jsonpostlist?page_size=5&product_id=1000');
		}elseif ($pageIndex == 1) {
			$str = file_get_contents('https://wx.fengbee.cn/bar_jsonpostlist?post_id=1220&page_size=5&product_id=1000');
		}elseif ($pageIndex == 2) {
			$str = file_get_contents('https://wx.fengbee.cn/bar_jsonpostlist?post_id=1217&page_size=5&product_id=1000');
		}
		
	}elseif ($type == 'interact_detail') {//互动详情
		$post_id = $_REQUEST['post_id'];//文章id
		$str = file_get_contents('https://wx.fengbee.cn/bar_jsonpostrecord?pid='.$post_id);
	}elseif ($type == "interact_comment") {//互动详情-评论
		$post_id = $_REQUEST['post_id'];//文章id
		$pageIndex = $_REQUEST['pageIndex'];
		$str = file_get_contents('https://wx.fengbee.cn/bar_jsonreplylist?pid='.$post_id.'&page_num='.$pageIndex.'&page_size=5');
	}elseif ($type == 'sign_in') {//签到
		$str = 'https://wx.fengbee.cn/campaign_summersignindex';
	}elseif ($type == "get_audio") {//获取音频
		$audio_id = $_REQUEST['audioId'];//视频id，早读：8376，午听：8360，晚修：8377
		if ($audio_id == 8376) {
			$str = '{
    "resultCode": "0000",
    "response": {
        "id": "8376",
        "name": "正能量早餐|真正的人生赢家是将手中的坏牌打好",
        "size": "1.77",
        "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3",
        "hours": "147",
        "rank": "1",
        "urls": [
            "http://qicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3",
            "http://mp3.fengbee.cn/@_upload_mp3_km0_zhenzhengderenshengyingjia.mp3"
        ],
        "urlsHttps": [
            "https://sqicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3",
            "https://smp3.fengbee.cn/@_upload_mp3_km0_zhenzhengderenshengyingjia.mp3"
        ],
        "album_id": "480",
        "album_name": "早餐英语",
        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
        "content": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/Lyric.css\'><p><span style=\'font-size:24px;\'><strong>正能量早餐|真正的人生赢家是将手中的坏牌打好</strong></span></p><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><a target=\'_blank\' href=\'https://wx.fengbee.cn/bar_link?id=150\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500193221.jpg\' alt=\'b_dcmgxly\' style=\'max-width:100%;\' class=\'\'></a></p><p><br></p><p><a target=\'_blank\' href=\'https://wx.fengbee.cn/bar_link?id=159\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500539637.jpg\' alt=\'蜂背代言人选拔大赛 1\' style=\'max-width:100%;\' class=\'\'></a></p><p><br></p><p><br></p><p><br></p><p>“Life is not always a matter of holding good cards, but sometimes,\r\nplaying a poor hand well.”</p><p style=\'text-align: right; \'>— Jack London, Writer</p><p>「人生不只是握有一付好牌，有时候也是把一副坏牌打好。」–\r\n杰克‧伦敦 (作家)</p><p>杰克‧伦敦\r\n(1876-1916) 是美国现实主义作家，畅销小说 Call of the Wild(野性的呼唤) 及 White Fang (白牙) 的作者，他也是名记者及社会运动家，支持社会主义及工会的建立。</p><p>有的时候我们会忍不住羡慕别人的生活多么美好，尤其是在自己遭遇一些不太好的事情的时候，这种心理落差会更加明显。这个时候我们会怎么改变自己的命运呢？等待水逆的过去？转发锦鲤？这样或那样的方法听起来有些不切实际，事实上也确实只是给我们一些心理慰藉，要改变现状，一条锦鲤可不够。</p><p>杰克伦敦把人生比作一副牌，有的时候手里是一副好牌，但“Life is not always a matter of holding good cards”，总是有抓到坏牌的时候。所以这个时候我们应该做的，是“playing a poor hand well”，通过自己的努力把坏牌达成好牌，将现状改善，这才是我们生活的意义所在。</p><p><br></p></div><p><br></p><br/><br/><p style=\'text-align:left;\'><span style=\'color:#726f6f;line-height:1;\'>本音频内容为广州蜂背网络科技有限公司版权所有，未经许可不得转载使用。</span></p><br/>"
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 6360) {
			$str = '{
    "resultCode": "0000",
    "response": {
        "id": "8360",
        "name": "一路行走",
        "size": "2.8",
        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/yiluqinaxing.mp3",
        "hours": "243",
        "rank": "1",
        "urls": [
            "http://qicow.fengbee.cn/@/upload/mp3/tcid1041/yiluqinaxing.mp3",
            "http://mp3.fengbee.cn/@_upload_mp3_tcid1041_yiluqinaxing.mp3"
        ],
        "urlsHttps": [
            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1041/yiluqinaxing.mp3",
            "https://smp3.fengbee.cn/@_upload_mp3_tcid1041_yiluqinaxing.mp3"
        ],
        "album_id": "404",
        "album_name": "作文素材天天读2017上半年特辑",
        "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zwscttd_2017_1.jpg",
        "content": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/Lyric.css\'><p><span style=\'font-size:24px;\'><strong>一路行走</strong></span></p><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><a target=\'_blank\' href=\'https://wx.fengbee.cn/bar_link?id=150\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500193387.jpg\' alt=\'b_dcmgxly\' style=\'max-width:100%;\' class=\'\'></a></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><br></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><a target=\'_blank\' href=\'https://wx.fengbee.cn/bar_link?id=159\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500539735.jpg\' alt=\'蜂背代言人选拔大赛 1\' style=\'max-width:100%;\' class=\'\'></a></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'><br></span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'><br></span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'><br></span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>@蜂背 夜歌</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>绵延的山，与云相攘，黛色的云，与山相融，一路上，跨越了晴空万里的距离，走入这大山的怀抱。雨，越来越大，从淅淅沥沥，到嘀嗒作响，到瓢泼倾盆，眼前的景色鲜嫩欲滴，又渐渐变得迷离，白茫茫一片，已分不清是雾还是雨。</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>确实很有趣，走过这一片峭壁悬崖，来到人间烟火，雨又停了，暖暖的阳光，照在身上，天上白云层层叠叠，哪里有雨的痕迹？路上的尘土随车轮起伏消散，让人一下子茫然，刚刚真的下雨了吗？三五朋友聚在一起，嬉笑打闹，明朗的阳光照在年轻灿烂的脸上，仿佛发光的水晶般，让人赏心悦目，小憩一下，继续出发。</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>一望无垠的绿色出现在眼前，镶嵌着点点白色，流动的羊群，拂动的微风，湿润的触感，香甜的气息，一起迎面而来，这样静谧的绿，恬淡的白，迷蒙的青，古拙的灰，让生命不经意间变得静悄，万年的大地横亘在眼前，沧海桑田的时过境迁，我们曾经来过这里，一起。</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>路蜿蜒前进，看不到尽头，像一条白练，交织在这绿色的大地上，起伏的路，犹如大海，让船儿颠簸沉浮，我们向着前方，苍翠深沉的群山，进发，头顶的云，越来越厚，墨泼一般的颜色，越来越低，见多了晴朗耀眼的一览众山小，这样的天，这样的山，在我眼中有着别样的魅力。</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>走到一半，小雨就懒洋洋的飘了下来，山上的溪流开始变大，水声哗哗作响。</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>安全起见，大家开始下山。下山的路，是惊险的。雨势不减，地面上水泡此起彼伏，水雾腾起，眼前开始变得水汽四漫，窗外的树被风吹的折了腰，黄色的沙石混着雨水从峭壁间直流而下，不时有拳头大的石块滚落。</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>老天，好像一个闹脾气的小孩，哭了，又笑了，哭哭笑笑，着实让人无法捉摸，这样的天，今生第一次遇到，心里多的只是新奇，和欢喜。</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>（摘自《读者》，有删减）</span></p><br><p><br></p></div><p><br></p><br/><br/><p style=\'text-align:left;\'><span style=\'color:#726f6f;line-height:1;\'>本音频内容为广州蜂背网络科技有限公司版权所有，未经许可不得转载使用。</span></p><br/>"
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 8377) {
			$str = '{
    "resultCode": "0000",
    "response": {
        "id": "8377",
        "name": "Style - 你霉的freestyle",
        "size": "8.56",
        "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/t-0712-style-gao.mp3",
        "hours": "560",
        "rank": "1",
        "urls": [
            "http://qicow.fengbee.cn/@/upload/mp3/tcid1021/t-0712-style-gao.mp3",
            "http://mp3.fengbee.cn/@_upload_mp3_tcid1021_t-0712-style-gao.mp3"
        ],
        "urlsHttps": [
            "https://sqicow.fengbee.cn/@/upload/mp3/tcid1021/t-0712-style-gao.mp3",
            "https://smp3.fengbee.cn/@_upload_mp3_tcid1021_t-0712-style-gao.mp3"
        ],
        "album_id": "167",
        "album_name": "听歌学英语",
        "album_avatar": "<link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/Lyric.css\'><p><span style=\'font-size:24px;\'><strong>Style - 你霉的freestyle</strong></span></p><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><a target=\'_blank\' href=\'https://wx.fengbee.cn/bar_link?id=150\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500193620.jpg\' alt=\'b_dcmgxly\' style=\'max-width:100%;\' class=\'\'></a></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><br></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><a target=\'_blank\' href=\'http://www.fengbee.cn/bar_post?post_id=1200\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500539799.jpg\' alt=\'蜂背代言人选拔大赛 1\' style=\'text-indent: 21pt; max-width: 100%;\' class=\'\'></a></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'><br></span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'><br></span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>@蜂背 季辰</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>1. style </span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>1）组成复合词：</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>a.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>hairstyle 发型</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>lifestyle 生活方式</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>b.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>-style (与名词、形容词连用构成形容词)表示“…风格的”，“有…特征的”，(或者构成副词）表示“以…方式”</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>例如：</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>...the development of a Western-style political system.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>西式政治体系的建立</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>...a hearty country-style dinner.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>丰盛的乡村大餐</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Guests have been asked to dress 1920s-style.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>客人们被要求打扮成 20 世纪 20 年代的样子。</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>2）名词，表示“行为方式，风度，风格，款式”</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>常见搭配：</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>with style 有风度地，时尚地 (stylish) </span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>例如：</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>*I was greeted with great style. </span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>*The team played with style. </span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>in the style of sb/sth. 具有…的风格</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>in/out of style  流行/过时</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>3) 动词，表示“设计;使具有…风格”</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>His thick blond hair had just been styled before his trip.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>他在旅行前刚把浓密的金发修剪了一番。</span></p><br><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>2. Fading off you, it s been a while since I have been heard from you</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>你渐渐远去，已经许久没有你的消息</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>fade off 逐渐变弱，褪色</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>fade </span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>1）褪色：</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>All colour fades — especially under the impact of direct sunlight...</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>所有颜色都会褪色——尤其是在阳光直射下。</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>2）(光线)逐渐暗淡;(声音)逐渐减弱</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Her footsteps faded away down the staircase. 她的脚步声逐渐在楼下远去。</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>The voice on the radio faded out. 广播声渐渐小了。</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>3）(记忆)逐渐模糊;(感情)逐渐变淡</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>...fading memories of better days.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>对美好时光的日渐模糊的记忆</span></p><br><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>歌词：</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Style - Taylor Swift</span></p><br><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Midnight, you come and pick me up,no headlight</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>午夜梦长 你来接我,车灯黯淡</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Long drive, could end in burning flames or paradise</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>前路漫漫 或许会在天堂的火光中燃烧殆尽</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Fading off you, it s been a while since I have been heard from you</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>渐渐消失的你 就像从未来过</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>I should just tell you to leave cause I</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我早应该让你离开 因为我</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Know exactly where it leads but I</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我很清楚我们的结局 但我</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Watch us go round and round each time</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>只能看着我们被爱情耍的团团转</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>You got that James Dean day dream look in your eye</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>你的眼神不羁 就像是詹姆斯·迪恩年少轻狂</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And I got that red lip classic thing that you like</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>而我红唇似火 一副你最钟情的古典模样</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And when we go crashing down, we come back in every time.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>每当我们愈演愈烈之时 我们又和好如初</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Cause we never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>因为我们天作之合</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>We never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我们的爱永不过时</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>You got that long hair, slicked back, white T-shirt.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>你留着长发 梳得整整齐齐 穿着白色恤衫</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And I got that good girl thing and a tight little skirt,</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我则穿着紧身短裙 宛如邻家女孩</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And when we go crashing down, we come back in every time.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>每当我们支离破碎之时 我们又和好如初</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Cause we never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>因为我们天作之合</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>We never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我们的爱永不过时</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>So it goes,he can t keep his wild eyes on the road</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>故事仍在上演,他的眼神炽热 却游离在路况之外</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Takes me home,lights are off, he s taking off his coat</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>载我回家,灯光熄灭 他脱下了外套</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>I say I heard that you been out and about with some other girl</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我说 我听说了 你和其他女孩的轶事</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Some other girl</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>其他女孩</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>He says, what you ve heard it s true but I</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>他说 你说的都是真的 但是我</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Can t stop thinking about you and I</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>所想的都是能够与你相依</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>I said I ve been there too a few times</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我说 这类话我早就听得不厌烦了</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Cause You got that James Dean day dream look in your eye</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>你的眼神不羁 就像是詹姆斯·迪恩年少轻狂</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And I got that red lip classic thing that you like</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>而我红唇似火 一副你最钟情的古典模样</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And when we go crashing down, we come back in every time.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>每当我们愈演愈烈之时 我们又和好如初</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Cause we never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>因为我们天作之合</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>We never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我们的爱永不过时</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>You got that long hair, slicked back, white T-shirt.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>你留着长发 梳得整整齐齐 穿着白色恤衫</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And I got that good girl fig and a tight little skirt,</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我则穿着紧身短裙 宛如邻家女孩</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And when we go crashing down, we come back in every time.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>每当我们支离破碎之时 我们又和好如初</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Cause we never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>因为我们天作之合</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>We never go out of style.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我们的爱永不过时</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Take me home,just take me home,just take me home</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>带我回家,只是带我回家就好,带我回家吧</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>You got that James Dean day dream look in your eye</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>你的眼神不羁 就像是詹姆斯·迪恩年少轻狂</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And I got that red lip classic thing that you like</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>而我红唇似火 一副你最钟情的古典模样</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>And when we go crashing down, we come back in every time.</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>每当我们愈演愈烈之时 我们又和好如初</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>Cause we never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>因为我们天作之合</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>We never go out of style</span></p><p class=\'MsoNormal\' style=\'text-indent:21.0pt;\'><span style=\'font-family:宋体;font-size:16px;\'>我们的爱永不过时</span></p><br><br><br><br><p><br></p></div><p><br></p><br/><br/><p style=\'text-align:left;\'><span style=\'color:#726f6f;line-height:1;\'>本音频内容为广州蜂背网络科技有限公司版权所有，未经许可不得转载使用。</span></p><br/>"
    },
    "msg": "成功"
}';
		}
	}
	elseif ($type == "getUserInfo") {//获取用户信息
		$str = '{
	"resultCode": "0000",
	"response": {
		"user": {
			"id": 2650479,
			"address": null,
			"nickname": "\u8702\u53cb_2650479",
			"gender": 1,
			"grade": null,
			"avatar": null,
			"province": 1,
			"grade2": 1000,
			"grade3": 0
		},
		"show_dlg": true
	},
	"msg": "\u6210\u529f"
}';
	}elseif ($type == 'discovery') {//发现
		$str = '{
    "resultCode": "0000",
    "response": [
        {
            "title": "精 品 课 程",
            "icon": "https://simg.fengbee.cn/upload/column/fx_ffkc_6.png",
            "albums": [
                {
                    "id": "479",
                    "name": "像学霸一样读高一",
                    "description": "成功，从高一开始。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015214.jpg\' alt=\'像学霸一样读高一商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015219.jpg\' alt=\'像学霸一样读高一商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015225.jpg\' alt=\'像学霸一样读高一商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015229.jpg\' alt=\'像学霸一样读高一商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015234.jpg\' alt=\'像学霸一样读高一商品详情图5\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015238.jpg\' alt=\'像学霸一样读高一商品详情图6\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015242.jpg\' alt=\'像学霸一样读高一商品详情图7\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "1. 小主你好！欢迎来到高中生的世界！",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "1",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "1",
                    "is_allowbatch": 0,
                    "goods": {
                        "price": "19.90",
                        "youzan_url": "https://h5.youzan.com/v2/showcase/goods?alias=2xe14j5kz5zqh&ps=360",
                        "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑",
                        "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=343536676",
                        "num_iid": "343536676"
                    },
                    "anchor": null
                },
                {
                    "id": "432",
                    "name": "1小时速成英语发音",
                    "description": "Sam和Shawn两位老师，用轻松幽默的对话方式帮你嘴对嘴，从根部纠正发音。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>听说考试就要到，</font></p><p><font color=\'#808080\'>开口就是中式口音无缘高分？</font></p><p><font color=\'#808080\'>没有遇到好老师，发音总是“怪怪的？”</font></p><p><font color=\'#808080\'>如果你还在浓重口音的汪洋大海中挣扎</font></p><p><font color=\'#808080\'>赶紧学习《1小时速成英语发音》课程吧！</font></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>Sam和Shawn两位老师，</font></p><p><font color=\'#808080\'>用轻松幽默的对话方式</font></p><p><font color=\'#808080\'>帮你嘴对嘴，从根部纠正发音。</font></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>打开节目列表，可以试听哦！</font></p></div>",
                    "intro_title": "介绍",
                    "latest": "1小时，跟中式口音说bye bye",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/1xsscyyfy.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "1",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "1",
                    "is_allowbatch": 0,
                    "goods": {
                        "price": "19.90",
                        "youzan_url": "https://h5.youzan.com/v2/goods/366kwvx3foe0p?ps=360",
                        "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑",
                        "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=327376647",
                        "num_iid": "327376647"
                    },
                    "anchor": null
                },
                {
                    "id": "470",
                    "name": "小蜜蜂老师读《如何高效学习》",
                    "description": "小蜜蜂老师带你读《如何高效学习》，帮你成为学神。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>学习是一种能力，需要我们学习</font></p><p><span style=\'text-align: right;\'><font color=\'#808080\'>——小蜜蜂老师读《如何高效学习》</font></span></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>你是否经常抱怨自己的学习没什么效率，明明花了很多的时间在学习上，但分数还是不见涨；而且每次学习新知识，就会把旧的、学过的忘掉，知识形成不了系统，很苦恼......</font></p><p><font color=\'#808080\'>不怕，小蜜蜂老师带你读《如何高效学习》，帮你成为学神。</font></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "【小蜜蜂】8. 多加练习才可以掌握",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xmf_rhgxxx.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "1",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": {
                        "price": "6.99",
                        "youzan_url": "https://h5.youzan.com/v2/goods/2fnymyfcuwj9l?ps=360",
                        "description": "仅需6.99元，小蜜蜂老师帮你成为学神！",
                        "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340482953",
                        "num_iid": "340482953"
                    },
                    "anchor": null
                }
            ],
            "type": "99",
            "shortcut_rank": "110",
            "rank": "110"
        },
        {
            "title": "高一专属课堂",
            "icon": "https://simg.fengbee.cn/upload/column/fx_ebkt_6.png",
            "albums": [
                {
                    "id": "289",
                    "name": "升高一必听100问",
                    "description": "汇总你升高一最想知道的100个问题答案！每周六更新~",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>刚升高中很迷茫？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>高中生活究竟是什么样子的？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>高一，我将会遇到什么样的奇葩遭遇？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>高一新开学我跟不上怎么办？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>......</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>关于高一，你想知道的！都在这里！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>逢周六更新</font></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "高中究竟长什么样子的？",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gy100w.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "480",
                    "name": "早餐英语",
                    "description": "这个暑假每顿早餐都是充实的！跟着蜂背在每顿早餐时间，学点英语！（逢周一到周五更新）",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font size=\'3\' color=\'#808080\'>每天你的早餐时间是否随便吃点就过去了？</font></p><p><font size=\'3\' color=\'#808080\'>你知道每个早餐的时间利用起来，</font></p><p><font size=\'3\' color=\'#808080\'>我们会有很大的进步呢！</font></p><p><font size=\'3\' color=\'#808080\'>&nbsp;这个暑假，跟着蜂背！</font></p><p><font size=\'3\' color=\'#808080\'>每天一顿早餐的时间，</font></p><p><font size=\'3\' color=\'#808080\'>轻松掌握地道英语表达！</font></p><p>逢周一到周五更新。</p></div>",
                    "intro_title": "介绍",
                    "latest": "早餐加油站|吃货必备的美食形容词你知道哪几个？",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "483",
                    "name": "读懂诗人才懂诗歌鉴赏",
                    "description": "诗歌总是读不懂？来，听听TA的故事你就懂了。（逢周一、三、五更新）",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>诗歌总是读不懂？</p><p>总是不知道为什么诗人在“无病呻吟”？</p><p>那是因为你不懂他们！</p><p>听听他们的故事，</p><p>读懂诗人！</p><p><font color=\'#808080\'>你就能读懂那些“晦涩”的诗歌了！</font></p><p><font color=\'#808080\'>逢周一、三、五更新。</font></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "平淡田园里一颗躁动的心——陶渊明",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ddsrcdsgjs.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                }
            ],
            "type": "505",
            "shortcut_rank": "100",
            "rank": "100"
        },
        {
            "title": "课 本 录 音",
            "icon": "https://simg.fengbee.cn/upload/column/fx_kbly_6.png",
            "subjects": [
                {
                    "id": "1",
                    "name": "语文",
                    "rank": "1",
                    "status": "1",
                    "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/yuwen.jpg",
                    "is_bei": "1"
                },
                {
                    "id": "3",
                    "name": "英语",
                    "rank": "2",
                    "status": "1",
                    "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/yingyu.jpg",
                    "is_bei": "1"
                },
                {
                    "id": "4",
                    "name": "政治",
                    "rank": "3",
                    "status": "1",
                    "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/zhengzhi.jpg",
                    "is_bei": "1"
                },
                {
                    "id": "9",
                    "name": "生物",
                    "rank": "4",
                    "status": "1",
                    "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/shengwu.jpg",
                    "is_bei": "0"
                },
                {
                    "id": "7",
                    "name": "历史",
                    "rank": "5",
                    "status": "1",
                    "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/lishi.jpg",
                    "is_bei": "0"
                },
                {
                    "id": "6",
                    "name": "化学",
                    "rank": "6",
                    "status": "1",
                    "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/huaxue.jpg",
                    "is_bei": "0"
                }
            ],
            "type": 3,
            "shortcut_rank": "90",
            "rank": "90"
        },
        {
            "title": "轻 松 幽 默",
            "icon": "https://simg.fengbee.cn/upload/column/fx_ymgx_6.png",
            "albums": [
                {
                    "id": "273",
                    "name": "逗你开心",
                    "description": "这不是个正经的节目，单纯为了逗你开心，每周五更新。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>这不是个正经的节目，</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>只是单纯的为了逗你开心。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>每周五更新~</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>参与互动：</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>在互动区找到冉冉“逗你开心”的帖子</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>并评论就有机会在节目中出现了哦</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><a href=\'https://wx.fengbee.cn/bar_link?id=144\' target=\'_blank\'><font color=\'#808080\'>&gt;&gt;&gt;点我跳到互动区&lt;&lt;&lt;</font></a></p><p><br></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "假期的理想和现实",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "1",
                        "name": "冉冉",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535422_263836.png"
                    }
                },
                {
                    "id": "397",
                    "name": "Hello 女生",
                    "description": "那些大家不好意思告诉你的小秘密，我们都会在这跟你分享哦！（已完结）",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>那些大家不好意思告诉你的小秘密</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>我们都会在这跟你分享哦！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>已完结</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>点击上方阿宝老师头像可以加入阿宝老师粉丝会，获得专属特权哦~</font></p><p><font color=\'#808080\'>赶紧来加入吧！</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><br></p><p><br></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "夏天能送我个大长腿么？",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/hellons.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "5",
                        "name": "阿宝老师",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535579_440443.png"
                    }
                },
                {
                    "id": "437",
                    "name": "蜂背爆一爆",
                    "description": "蜂友们！你想知道关于老师主播们的独家内幕都在这里！（已完结）",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>小蜜蜂是怎么练就9科男神的地位？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>葵花老师现实中也是常常鼓舞人心的吗？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>除了做节目，阿宝老师还会经常和大淑老师吵架吗？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>冉冉是暖了全蜂背的超级男神吗？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>本专辑给你逐个爆一爆！</font></p></div>",
                    "intro_title": "介绍",
                    "latest": "哎哟喂！音频下载不了你还敢叫程序猿吗？",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fbbyb.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                }
            ],
            "type": "5",
            "shortcut_rank": "80",
            "rank": "80"
        },
        {
            "title": "情 感 励 志",
            "icon": "https://simg.fengbee.cn/upload/column/fx_qglz_6.png",
            "albums": [
                {
                    "id": "247",
                    "name": "高考励志倒数",
                    "description": "用智慧陪你高考扫除高考不适。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>用智慧陪你高考扫除高考不适。</p>",
                    "intro_title": "介绍",
                    "latest": "致奔赴考场的你：带上骄傲，等你凯旋！",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gklzds.jpg",
                    "praise": "2931",
                    "play": "827162",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "2",
                        "name": "葵花老师",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535458_729363.png"
                    }
                },
                {
                    "id": "378",
                    "name": "葵花励志专栏",
                    "description": "葵花老师原创文章，逢周六更新",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>葵花老师原创文章；</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>逢周六更新！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>点击上方葵花老师头像可以加入葵花老师粉丝会，获得专属特权哦~</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>赶紧来加入吧！</font></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "关于暑假学习休息两不误的行动清单",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/khlzzl.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "2",
                        "name": "葵花老师",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535458_729363.png"
                    }
                },
                {
                    "id": "230",
                    "name": "明星励志馆",
                    "description": "细数明星背后的励志故事，逢周末更新。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>细数明星背后的励志故事，逢周末更新。</font></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "唐嫣：关于我们的事 你们统统都猜错",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/mxlzg.jpg",
                    "praise": "3821",
                    "play": "58291",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                }
            ],
            "type": "8",
            "shortcut_rank": "70",
            "rank": "70"
        },
        {
            "title": "学 霸 经 验",
            "icon": "https://simg.fengbee.cn/upload/column/fx_xbjy_6.png",
            "albums": [
                {
                    "id": "90",
                    "name": "学霸の提分技能",
                    "description": "学霸独家学习心得大揭秘！",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>学霸独家学习心得大揭秘！</p>",
                    "intro_title": "介绍",
                    "latest": "650分学霸教你克服高三不适症",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                    "praise": "1987",
                    "play": "59588",
                    "rank": "5",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "307",
                    "name": "学霸是这样炼成的！",
                    "description": "有关学霸们的励志故事~已完结",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>有关学霸们的励志故事~已完结</font></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "张沛文：我的复读之路",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xbszylcd.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "244",
                    "name": "学姐学长侃大学",
                    "description": "来自北上广一线名校的学姐学长给大家侃大学啦！",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>来自北上广一线名校的学姐学长给大家侃大学啦！</p>",
                    "intro_title": "介绍",
                    "latest": "华南理工大学：校长是习大大背后的女人",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xjxzkdx.jpg",
                    "praise": "49021",
                    "play": "899021",
                    "rank": "15",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "6",
                        "name": "季辰",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535606_613445.png"
                    }
                }
            ],
            "type": "10",
            "shortcut_rank": "60",
            "rank": "60"
        },
        {
            "title": "原 创 资 料",
            "icon": "https://simg.fengbee.cn/upload/column/fx_yczl_6.png",
            "materials": [
                {
                    "id": "49",
                    "name": "【电子书】作文素材天天读（2017上半年刊）",
                    "avatar": "https://sstore.fengbee.cn/goods/avatar/1496388407_2881_2017sbnk.jpg",
                    "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523421_519765.jpg",
                    "description": "《作文素材天天读》2017上半年99期节目全部文字稿",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>《作文素材天天读》2017上半年99期节目全部文字稿</p><p><br></p></div>",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "create_time": "2017-07-20 12:03:41",
                    "type": "0",
                    "num_iid": "338772414",
                    "is_paid": 0,
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/27588da49rant?ps=360",
                    "goods_description": "原创资料需购买解锁，仅需6.99元",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=338772414",
                    "is_invite": 0,
                    "is_invite3": 0
                },
                {
                    "id": "8",
                    "name": "蜜蜂数学课内部独家PPT（必修五）",
                    "avatar": "https://sstore.fengbee.cn/goods/avatar/数学ppt5.jpg",
                    "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523821_167190.jpg",
                    "description": "蜜蜂数学课内部独家PPT（必修五）",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532913.jpg\' alt=\'蜜蜂数学（必修五）商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532917.jpg\' alt=\'蜜蜂数学（必修五）商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532920.jpg\' alt=\'蜜蜂数学（必修五）商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532923.jpg\' alt=\'蜜蜂数学（必修五）商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532929.jpg\' alt=\'蜜蜂数学（必修五）商品详情图5\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532933.jpg\' alt=\'蜜蜂数学（必修五）商品详情图6\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532939.jpg\' alt=\'蜜蜂数学（必修五）商品详情图7\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "create_time": "2017-07-20 14:43:51",
                    "type": "0",
                    "num_iid": "310050334",
                    "is_paid": 0,
                    "price": "19.90",
                    "youzan_url": "https://h5.koudaitong.com/v2/goods/3no0nc5e1ncax?ps=360",
                    "goods_description": "原创资料需购买解锁，仅需19.9元",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=310050334",
                    "is_invite": 0,
                    "is_invite3": 0
                },
                {
                    "id": "52",
                    "name": "2017全国高考作文真题分析及备考建议",
                    "avatar": "https://sstore.fengbee.cn/goods/avatar/1497603547_3084_gkzuwspt.jpg",
                    "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500530653_410009.jpg",
                    "description": "内含2017高考作文真题分析及备考建议",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>内含2017高考作文真题分析及备考建议</p><p><br></p></div>",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "create_time": "2017-07-20 14:04:13",
                    "type": "0",
                    "num_iid": "340954963",
                    "is_paid": 0,
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/3emumuwqah5gp",
                    "goods_description": "仅需6.99元，让你提前拿下高考作文！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340954963",
                    "is_invite": 0,
                    "is_invite3": 0
                }
            ],
            "type": "399",
            "shortcut_rank": "50",
            "rank": "50"
        },
        {
            "title": "校 园 故 事",
            "icon": "https://simg.fengbee.cn/upload/column/fx_xygs_6.png",
            "albums": [
                {
                    "id": "274",
                    "name": "那些时光",
                    "description": "耳朵里的那些心跳回忆，逢周六更新。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>耳朵里的那些心跳回忆，逢周六更新。</font></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "姑娘，这年头谁还没点故事",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                    "praise": "28732",
                    "play": "76213",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "384",
                    "name": "我们的故事",
                    "description": "欢迎到“互动区”滚动置顶帖写下你的故事。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>欢迎到互动区滚动置顶帖写下你的故事。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>如何投稿：首页-互动区-顶栏滚动到最右可见“写我们的故事”。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><a href=\'https://wx.fengbee.cn/bar_link?id=144\' target=\'_blank\'><font color=\'#808080\'>&gt;&gt;&gt;点我立即到达互动区&lt;&lt;&lt;</font></a></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p><br></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "再见了，深爱的王学长",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/wmdgs.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "1",
                        "name": "冉冉",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535422_263836.png"
                    }
                },
                {
                    "id": "438",
                    "name": "蜂友互助",
                    "description": "蜂友们有困难，我们这里来帮忙！（逢周一、三、五、七更新）",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>蜂友们有困难，我们这里来帮忙！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>日常学习生活当中</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>我们不免会遇到学习的烦恼、友情的困惑、家庭的烦扰......</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>在蜂背的大家庭里，我们一起来帮忙解决这些苦恼吧......</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>节目逢周一、三、五、七更新</font></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "我应该怎么道歉，她才会原谅我？",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fyhz.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                }
            ],
            "type": "15",
            "shortcut_rank": "40",
            "rank": "40"
        },
        {
            "title": "晚 安 心 情",
            "icon": "https://simg.fengbee.cn/upload/column/fx_waxq_6.png",
            "albums": [
                {
                    "id": "281",
                    "name": "蜂背悄悄话",
                    "description": "冉冉陪你分享成长路上的喜怒哀乐，提问请到“我的”页面，互动区发帖。（第一季已完结）",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>冉冉陪你分享成长路上的喜怒哀乐，提问请到首页，点击互动区。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>（第一季已完结）</font></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "有梦，却抓不住梦",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fbqqx.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "1",
                        "name": "冉冉",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535422_263836.png"
                    }
                },
                {
                    "id": "163",
                    "name": "晚安歌单",
                    "description": "用最动听的旋律和声音跟你道晚安。已完结。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>用最动听的旋律和声音跟你道晚安。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>已完结。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><span style=\'color: rgb(128, 128, 128);\'><br></span></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><span style=\'color: rgb(128, 128, 128);\'>点击上方季辰头像可以加入季辰粉丝会，获得专属特权哦~</span></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'></p><p><font color=\'#808080\'>赶紧来加入吧！</font></p><p><br></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "给十五岁的自己",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/wanangedan.jpg",
                    "praise": "2579",
                    "play": "12453",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": {
                        "id": "6",
                        "name": "季辰",
                        "avatar": "https://savatar.fengbee.cn/zhubo/1488535606_613445.png"
                    }
                },
                {
                    "id": "165",
                    "name": "蜂背点歌台",
                    "description": "如果你也想点歌，请到“首页-互动区-点歌台投稿”区里投稿哦！",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>如果你也想点歌，</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>请到“首页-互动区-点歌台投稿”里投稿哦！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><a href=\'https://wx.fengbee.cn/bar_link?id=144\' target=\'_blank\'><font color=\'#808080\'>&gt;&gt;&gt;点我马上到互动区&lt;&lt;&lt;</font></a></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "我们都是追光者",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/diangetai1.jpg",
                    "praise": "2790",
                    "play": "42321",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                }
            ],
            "type": "109",
            "shortcut_rank": "30",
            "rank": "30"
        },
        {
            "title": "音 乐 合 集",
            "icon": "https://simg.fengbee.cn/upload/column/fx_yyhj_6.png",
            "albums": [
                {
                    "id": "469",
                    "name": "夏意正浓音乐合集",
                    "description": "夏天，这些音乐最能搭配你的心情。",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>夏冰镇西瓜、</font></p><p><font color=\'#808080\'>橘子汽水、</font></p><p><font color=\'#808080\'>冰淇淋、</font></p><p><font color=\'#808080\'>夹脚拖鞋、还有那刺眼的阳光，夏天的风！</font></p><p><font color=\'#808080\'>一切都这么美好，原来都是因为，在听这首歌的时候，旁边是你…</font></p><p><br></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "夏意正浓音乐1",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "434",
                    "name": "正能量max音乐合集",
                    "description": "在春天这样的季节里，我们都需要正能量满满地努力加油！",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>我相信自己，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>生来如同璀璨的夏日之花，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>不凋不败，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>妖冶如火，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>承受心跳的负荷和呼吸的累赘，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>乐此不疲。</font></p><p><font color=\'#808080\'><br></font></p></div><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "正能量max音乐1",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/znlyyhj.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "400",
                    "name": "背书必备音乐合集",
                    "description": "背书时听一听，记忆效果max哒！",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'line-height: 1.5;\'><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font face=\'宋体\' size=\'3\' color=\'#808080\'>巴赫 、亨德尔 、维瓦尔第为代表的Baroque音乐。</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font face=\'宋体\' size=\'3\' color=\'#808080\'>背书前听一会，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font face=\'宋体\' size=\'3\' color=\'#808080\'>更好的宁心提神。</font></p></div><p><font face=\'宋体\' size=\'3\' color=\'#808080\'>背书时听的话，</font></p><p><font face=\'宋体\' size=\'3\' color=\'#808080\'>记得控制音量呦~</font></p><p><br></p>",
                    "intro_title": "介绍",
                    "latest": "背书必备音乐1",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/bsbb_music.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                }
            ],
            "type": "114",
            "shortcut_rank": "20",
            "rank": "20"
        },
        {
            "title": "英 语 听 力",
            "icon": "https://simg.fengbee.cn/upload/column/fx_yyly_6.png",
            "albums": [
                {
                    "id": "477",
                    "name": "2017年全国高考听力",
                    "description": "最新出炉2017年高考英语听力",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>最新出炉！！！</p><p>2017年高考英语听力试题！！</p><p>附听力原文及答案！！</p><p>赶紧来训练一下啦！！</p></div>",
                    "intro_title": "介绍",
                    "latest": "2017年新课标I卷听力（第一节）",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "478",
                    "name": "2016年全国高考听力真题",
                    "description": "2016年高考英语听力真题汇编",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>2016年全国高考英语听力试题！！</p><p>附听力原文及答案！！</p><p>赶紧来训练一下啦！！</p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "2016年新课标I卷听力（第一节）",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2016qggktlzt.jpg",
                    "praise": "0",
                    "play": "0",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                },
                {
                    "id": "270",
                    "name": "VOA慢速英语",
                    "description": "精选适合高中生磨耳朵的VOA慢速英语内容",
                    "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>精选适合高中生磨耳朵的VOA慢速英语内容</font></p><p><br></p></div>",
                    "intro_title": "介绍",
                    "latest": "巴西前总统涉腐被控,举国震惊!",
                    "avatar": "https://simg.fengbee.cn/upload/zjAvatar/voa_jingxuan.jpg",
                    "praise": "3928",
                    "play": "48991",
                    "rank": "1000",
                    "status": "1",
                    "flag": "0",
                    "flagpic": "",
                    "is_rechargeable": "0",
                    "is_paid": 0,
                    "is_invite": 0,
                    "is_batch": "0",
                    "is_allowbatch": 0,
                    "goods": null,
                    "anchor": null
                }
            ],
            "type": "6",
            "shortcut_rank": "10",
            "rank": "10"
        }
    ],
    "msg": "成功"
}';
	}elseif ($type == "lesson_list") {
		$album_id = $_REQUEST['albumId'];//课程号，精品课程：99，高一专属：505
		if ($album_id == 99) {
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "479",
                "name": "像学霸一样读高一",
                "description": "成功，从高一开始。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015214.jpg\' alt=\'像学霸一样读高一商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015219.jpg\' alt=\'像学霸一样读高一商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015225.jpg\' alt=\'像学霸一样读高一商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015229.jpg\' alt=\'像学霸一样读高一商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015234.jpg\' alt=\'像学霸一样读高一商品详情图5\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015238.jpg\' alt=\'像学霸一样读高一商品详情图6\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015242.jpg\' alt=\'像学霸一样读高一商品详情图7\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "1. 小主你好！欢迎来到高中生的世界！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "19.90",
                    "youzan_url": "https://h5.youzan.com/v2/showcase/goods?alias=2xe14j5kz5zqh&ps=360",
                    "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=343536676",
                    "num_iid": "343536676"
                },
                "anchor": null
            },
            {
                "id": "432",
                "name": "1小时速成英语发音",
                "description": "Sam和Shawn两位老师，用轻松幽默的对话方式帮你嘴对嘴，从根部纠正发音。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>听说考试就要到，</font></p><p><font color=\'#808080\'>开口就是中式口音无缘高分？</font></p><p><font color=\'#808080\'>没有遇到好老师，发音总是“怪怪的？”</font></p><p><font color=\'#808080\'>如果你还在浓重口音的汪洋大海中挣扎</font></p><p><font color=\'#808080\'>赶紧学习《1小时速成英语发音》课程吧！</font></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>Sam和Shawn两位老师，</font></p><p><font color=\'#808080\'>用轻松幽默的对话方式</font></p><p><font color=\'#808080\'>帮你嘴对嘴，从根部纠正发音。</font></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>打开节目列表，可以试听哦！</font></p></div>",
                "intro_title": "介绍",
                "latest": "1小时，跟中式口音说bye bye",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/1xsscyyfy.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "19.90",
                    "youzan_url": "https://h5.youzan.com/v2/goods/366kwvx3foe0p?ps=360",
                    "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=327376647",
                    "num_iid": "327376647"
                },
                "anchor": null
            },
            {
                "id": "470",
                "name": "小蜜蜂老师读《如何高效学习》",
                "description": "小蜜蜂老师带你读《如何高效学习》，帮你成为学神。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>学习是一种能力，需要我们学习</font></p><p><span style=\'text-align: right;\'><font color=\'#808080\'>——小蜜蜂老师读《如何高效学习》</font></span></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>你是否经常抱怨自己的学习没什么效率，明明花了很多的时间在学习上，但分数还是不见涨；而且每次学习新知识，就会把旧的、学过的忘掉，知识形成不了系统，很苦恼......</font></p><p><font color=\'#808080\'>不怕，小蜜蜂老师带你读《如何高效学习》，帮你成为学神。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "【小蜜蜂】8. 多加练习才可以掌握",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xmf_rhgxxx.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": {
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/2fnymyfcuwj9l?ps=360",
                    "description": "仅需6.99元，小蜜蜂老师帮你成为学神！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340482953",
                    "num_iid": "340482953"
                },
                "anchor": null
            },
            {
                "id": "471",
                "name": "季辰教你《快速阅读》",
                "description": "季辰讲《快速阅读》，让你彻底改变读书。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>当你爱上阅读，世界就爱上了你</font></p><p><span style=\'text-align: right;\'><font color=\'#808080\'>——季辰教你《快速阅读》</font></span></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>你每天都要看书，但是你的读书习惯是不是好的呢？</font></p><p><font color=\'#808080\'>更为重要的是，现在的考试中，对阅读能力的要求越来越高了，不管是中文还是英文，所需要阅读的文字越来越多，那有什么阅读的技巧可以彻底改变读书呢？</font></p><p><font color=\'#808080\'>不妨听听季辰讲这本《快速阅读》吧！</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "【季晨】8. 小结：快速阅读=4个层次+4种方法+3个步骤",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/jc_ksyd.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/26wks5k29n1eh?ps=360",
                    "description": "仅需6.99元，季辰让你彻底改变读书！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340797283",
                    "num_iid": "340797283"
                },
                "anchor": null
            },
            {
                "id": "464",
                "name": "高中英语语法速成",
                "description": "用生活中的情景例句，轻松速成高中语法知识。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906156.jpg\' alt=\'高中英语语法速成商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906162.jpg\' alt=\'高中英语语法速成商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906166.jpg\' alt=\'高中英语语法速成商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906174.jpg\' alt=\'高中英语语法速成商品详情图4\' style=\'max-width: 100%;\'></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "听歌学虚拟语气",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gzyyyfsc.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "19.90",
                    "youzan_url": "https://h5.youzan.com/v2/goods/3nms4hlxe57kp?ps=360",
                    "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=337488740",
                    "num_iid": "337488740"
                },
                "anchor": null
            },
            {
                "id": "462",
                "name": "高考作文高分攻略",
                "description": "快速掌握高分“套路”，让作文成为拉分板块！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906792.jpg\' alt=\'高考作文高分攻略详情图2\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906799.jpg\' alt=\'高考作文高分攻略详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906806.jpg\' alt=\'高考作文高分攻略详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496906810.jpg\' alt=\'高考作文高分攻略详情图5\' style=\'max-width: 100%;\'></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "10.三步达到满分论述文水准",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gkzwgfgl.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "19.90",
                    "youzan_url": "https://h5.youzan.com/v2/goods/2olgnqt3ajuh5?ps=360",
                    "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=337563290",
                    "num_iid": "337563290"
                },
                "anchor": null
            },
            {
                "id": "385",
                "name": "生物泡面番",
                "description": "吃一碗泡面的时间，带你学会隐藏在生活里的生物知识！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496907717.jpg\' alt=\'生物泡面番商品详情图2\' style=\'max-width:100%;\' class=\'\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496907721.jpg\' alt=\'生物泡面番商品详情图3\' style=\'max-width: 100%;\'></p><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1496907731.jpg\' alt=\'生物泡面番商品详情图4\' style=\'max-width:100%;\'></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "同一间课室，为什么有人冷有人热",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/swpmf.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "19.90",
                    "youzan_url": "https://h5.koudaitong.com/v2/goods/2xiyoc6e8729l?reft=1480047790883_14",
                    "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=295666393",
                    "num_iid": "295666393"
                },
                "anchor": null
            },
            {
                "id": "474",
                "name": "冉冉告诉你《安静——内向性格的竞争力》",
                "description": "这本书可以让我们认识自己，更好地发挥自己的性格竞争力。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>内向，是上天的恩赐</font></p><p><span style=\'text-align: right;\'><font color=\'#808080\'>——冉冉告诉你《安静——内向性格的竞争力》</font></span></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>可能，你不常与人交流，或者，你更喜欢一个人独处。我们认为自己很内向想要改变，却不知道 “内向性格的竞争力”。希望这本书可以让我们认识自己，更好地发挥自己的性格竞争力。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "【冉冉】8. 小结：要做的其实是最好的自己",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/rr_ajnxxgdjzl.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/27a6nejdmzjk9?ps=360",
                    "description": "仅需6.99元，冉冉帮你认识自己，更好发挥性格竞争力！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340482953",
                    "num_iid": "340802356"
                },
                "anchor": null
            },
            {
                "id": "476",
                "name": "大淑老师讲《抗压力 – 逆境重生法则》",
                "description": "大淑老师教你增强抗压力，并学会把压力转化为动力。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>十几岁的抗压力，决定你二十几岁的生活</font></p><p><span style=\'color: rgb(128, 128, 128); text-align: right;\'>&nbsp;——大淑老师讲的《抗压力 – 逆境重生法则》</span></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>在中学阶段，我们面对的压力一点都不少。但是，学校教了语文，教了数学，教了英语，甚至物理化学生物地理历史政治都教了，却没有教我们应该怎样应对自己的压力。 &nbsp;</font></p><p><font color=\'#808080\'>于是，我们总是有学习不顺心的时候，也有被压力压得喘不过气然后转而麻木的时候。那有什么方法可以很好地处理这些压力，增强抗压力的同时真正把压力转变为学习的动力呢？</font></p><p><font color=\'#808080\'>大淑老师陪你读的这本书，相信能给你答案。</font></p><p><br></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "【大淑】8. 这本书帮助了我们什么",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ds_tgkyl.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/2oe340tbppqm1?ps=360",
                    "description": "仅需6.99元，大淑老师教你正确处理压力！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340490714",
                    "num_iid": "340490714"
                },
                "anchor": null
            },
            {
                "id": "475",
                "name": "阿宝老师讲《习惯的力量》",
                "description": "阿宝老师教你养成良好的学习习惯。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>改变，从现在开始</font></p><p><span style=\'color: rgb(128, 128, 128); text-align: right;\'>&nbsp;——阿宝老师讲《习惯的力量》</span></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>经常有蜂友这样抱怨，总忍不住刷手机，学习的时间好像悄悄都跑掉了。 &nbsp;</font></p><p><font color=\'#808080\'>说了无数次明天要开始努力学习，结果就是今晚还忍不住把热播电视剧又看了一遍。 &nbsp;</font></p><p><font color=\'#808080\'>还有还有，如何才可以像学霸一样，学习习惯一直那么好呢？</font></p><p><font color=\'#808080\'>那不妨听听阿宝老师给讲这本《习惯的力量》吧！</font></p><p><br></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "【阿宝】8. 读这本书你还可以获得",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ab_xgdll.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/276hygbcfi7vd?ps=360",
                    "description": "仅需6.99元，阿宝老师教你养成良好学习习惯！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340490543",
                    "num_iid": "340490543"
                },
                "anchor": null
            },
            {
                "id": "473",
                "name": "葵花老师读《心情词典》",
                "description": "听葵花老师读《心情词典》，补回我们人生重要的情商课。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>不要让人生，输给心情</font></p><p><span style=\'text-align: right;\'><font color=\'#808080\'>——葵花老师读《心情词典》</font></span></p><p><font color=\'#808080\'><br></font></p><p><font color=\'#808080\'>学校里没有“情商”课，但情商的考验却在我们每天的生活中。我们很有可能一直没有情商驾驶证，却在情绪的道路上违规驾驶。如果你想做一个更高“情商”的人，可以管理自己的情绪，而并不是被情绪带着跑。希望你能听听葵花老师讲的这本书，补回我们人生重要的情商课。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "【葵花】8.  小结：情绪是我们体验世界的最好工具",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/kh_xqcd.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "1",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "1",
                "is_allowbatch": 0,
                "goods": {
                    "price": "6.99",
                    "youzan_url": "https://h5.youzan.com/v2/goods/3erq3m6w78lqx?ps=360",
                    "description": "仅需6.99元，葵花老师帮你补回情商课！",
                    "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340488515",
                    "num_iid": "340488515"
                },
                "anchor": null
            }
        ],
        "totalRow": 5,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($album_id == 505) {
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "289",
                "name": "升高一必听100问",
                "description": "汇总你升高一最想知道的100个问题答案！每周六更新~",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>刚升高中很迷茫？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>高中生活究竟是什么样子的？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>高一，我将会遇到什么样的奇葩遭遇？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>高一新开学我跟不上怎么办？</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>......</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>关于高一，你想知道的！都在这里！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>逢周六更新</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "高中究竟长什么样子的？",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gy100w.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "480",
                "name": "早餐英语",
                "description": "这个暑假每顿早餐都是充实的！跟着蜂背在每顿早餐时间，学点英语！（逢周一到周五更新）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font size=\'3\' color=\'#808080\'>每天你的早餐时间是否随便吃点就过去了？</font></p><p><font size=\'3\' color=\'#808080\'>你知道每个早餐的时间利用起来，</font></p><p><font size=\'3\' color=\'#808080\'>我们会有很大的进步呢！</font></p><p><font size=\'3\' color=\'#808080\'>&nbsp;这个暑假，跟着蜂背！</font></p><p><font size=\'3\' color=\'#808080\'>每天一顿早餐的时间，</font></p><p><font size=\'3\' color=\'#808080\'>轻松掌握地道英语表达！</font></p><p>逢周一到周五更新。</p></div>",
                "intro_title": "介绍",
                "latest": "正能量早餐|真正的人生赢家是将手中的坏牌打好",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "483",
                "name": "读懂诗人才懂诗歌鉴赏",
                "description": "诗歌总是读不懂？来，听听TA的故事你就懂了。（逢周一、三、五更新）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>诗歌总是读不懂？</p><p>总是不知道为什么诗人在“无病呻吟”？</p><p>那是因为你不懂他们！</p><p>听听他们的故事，</p><p>读懂诗人！</p><p><font color=\'#808080\'>你就能读懂那些“晦涩”的诗歌了！</font></p><p><font color=\'#808080\'>逢周一、三、五更新。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "诗仙不仙——李太白",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ddsrcdsgjs.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "326",
                "name": " 2分钟口语",
                "description": "自信开口说英语，逢周六、日更新。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>总是抱怨课堂上只能学习哑巴英语？</font></p><p><font color=\'#808080\'>学的又是书面英语</font></p><p><font color=\'#808080\'>不知道如何地道地开口说英语？</font></p><p><font color=\'#808080\'>本专辑帮到你！</font></p><p><font color=\'#808080\'>每周2分钟，让你自信开口说出 流利、地道英语！</font></p><p><font color=\'#808080\'>每周六更新！</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "不好意思..请问..麻烦您了...",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2fzky.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "6",
                    "name": "季辰",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535606_613445.png"
                }
            },
            {
                "id": "404",
                "name": "作文素材天天读2017上半年特辑",
                "description": "每天三分钟，素材积累很轻松。逢周一至五日更。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>每天三分钟，素材积累很轻松。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>高考必备作文素材，你需要的这里都有。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>助你写出考场高分作文！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>逢周一至五，每天更新。</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "一路行走",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/zwscttd_2017_1.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "1",
                    "name": "冉冉",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535422_263836.png"
                }
            },
            {
                "id": "9",
                "name": "名师讲坛",
                "description": "最强的名师讲坛，最赞的方法分享，逢周五更新！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>最强的名师讲坛，最赞的方法分享，逢周五更新！</p>",
                "intro_title": "介绍",
                "latest": "暑期做了这，还怕开学测验成绩不理想吗？",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/msjt_n.jpg",
                "praise": "11344",
                "play": "1154891",
                "rank": "2",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "167",
                "name": "听歌学英语",
                "description": "在歌声中学习最地道的英文表达，逢周五更新。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>在歌声中学习最地道的英文表达，逢周五更新。</p>",
                "intro_title": "介绍",
                "latest": "Style - 你霉的freestyle",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/tinggexueen.jpg",
                "praise": "56752",
                "play": "472930",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "6",
                    "name": "季辰",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535606_613445.png"
                }
            },
            {
                "id": "415",
                "name": "蜂背带你游大学",
                "description": "蜂背带你游游那些大学官网和政策文件里没告诉你的大学趣风景！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>全国大学何其多</font></p><p><font color=\'#808080\'>除了清华、北大</font></p><p><font color=\'#808080\'>还有好多的独具地方特色的名牌大学</font></p><p><font color=\'#808080\'>看腻了大学风景</font></p><p><font color=\'#808080\'>听得太多关于大学生活的萎靡传言</font></p><p><font color=\'#808080\'>本期节目我们要带你看看最好玩有有趣的全国各地特色大学</font></p><p><font color=\'#808080\'>全国独此一个专辑哦！</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "川音、川大、重大——四川、重庆龙门阵摆起",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fbdnydx.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "463",
                "name": "高一数学学渣拯救计划",
                "description": "高一数学没学好？跟着他学！期末考不用愁！（已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>本专辑内容专门适用于以下蜂友：</font></p><p><font color=\'#808080\'>上课没听懂老师讲解；</font></p><p><font color=\'#808080\'>对高一下学期数学内容不熟悉；</font></p><p><font color=\'#808080\'>想在短时间内抓住本学期学习重难点复习；</font></p><p><font color=\'#808080\'>缺乏正确学习高中数学方法。</font></p><p><font color=\'#808080\'>一个专辑的精华内容，高效解决高一数学学习困难！</font></p><p><font color=\'#808080\'>（已完结）</font></p><p><br></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "10分钟全面把握数学复习节奏",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gysxxzzjjh.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "403",
                "name": "方法日报2017上半年特辑",
                "description": "全科精选学习方法大全！（本专辑已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>每天10分钟</font></p><p><font color=\'#808080\'>最实用的学习方法</font></p><p><font color=\'#808080\'>助你掌握考试秘诀！</font></p><p><font color=\'#808080\'>2017年上半年专辑已完结。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "怎么根除考试中的粗心大意",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ffrb_2017_1.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "441",
                "name": "蜂背三周年最受欢迎节目合集",
                "description": "精选蜂背三周年来最受欢迎的节目。这里有你最想听的！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>精选蜂背三周年来最受欢迎的节目合集</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>这些节目让你听到欲罢不能哦</font></p></div>",
                "intro_title": "介绍",
                "latest": "决定了选文，那能不能放弃理科？",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/3znzskyjm.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "257",
                "name": "两会备考专辑",
                "description": "告诉你本年两会备考重点",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>告诉你本年两会备考重点</p>",
                "intro_title": "介绍",
                "latest": "倾听春天里的“两会”好声音",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/lhbkzj.jpg",
                "praise": "3948",
                "play": "398421",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "454",
                "name": "大学专业知多少",
                "description": "关于大学专业你不知道的！蜂背详细给你说清楚！让你不再迷茫！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>全国大学专业千百个</font></p><p><font color=\'#808080\'>却不知道报哪个</font></p><p><font color=\'#808080\'>蜂背来帮你</font></p><p><font color=\'#808080\'>告诉你那些关于大学专业你不知道的</font></p><p><font color=\'#808080\'>听了你就不迷茫了</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "全面解读高职专业",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/dxzyzds.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "444",
                "name": "每天陪你读书",
                "description": "蜂背读书月，为你导读不能错过的好书，打开课本之外的世界。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>蜂背读书月，为你导读不能错过的好书，打开课本之外的世界。</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "金钱的威力与无奈 ——读《欧也妮·葛朗台》",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/mtpnds.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "169",
                "name": "10个故事背完高一重点单词",
                "description": "考前都要听一遍！使用背功能拿下本学期重点词汇！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>考前都要听一遍！使用背功能拿下本学期重点词汇！</p>",
                "intro_title": "介绍",
                "latest": "Fall in love with English",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/10story_1.jpg",
                "praise": "1589",
                "play": "27890",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "171",
                "name": "高一史地政必背56个考点",
                "description": "期末考最怕背？10分钟听完一本教材重要考点！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>期末考最怕背？10分钟听完一本教材重要考点！</p>",
                "intro_title": "介绍",
                "latest": "地理必修1 自然地理必背14个考点",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/zsd56_1.jpg",
                "praise": "1594",
                "play": "28683",
                "rank": "112",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "416",
                "name": "大淑诚不欺我（第一季）",
                "description": "历史书上写的不都是真历史哦！跟着大淑老师，听听那些历史书骗你的趣知识！（已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>你在历史课上学习到的知识可不都是真的哦</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>还有那些在课本上告诉你一本正经的历史名人可不一定是他们真实的样子哦</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>所谓“人生如戏，全靠演技”</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>这期！大淑老师就来带你解开历史的真相吧</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "这可能是世界上最会说情话的男人",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/dscbqw.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "3",
                    "name": "大淑老师",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535485_233166.png"
                }
            },
            {
                "id": "442",
                "name": "蜂背三周年生日祝福",
                "description": "2017年蜂背三周年生日快乐！精选蜂背互动区蜂友祝福投稿。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>2017年蜂背三周年生日！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>精选蜂背互动区蜂友祝福投稿。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>和全国蜂友一起庆祝蜂背生日吧！</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "蜂背见证着我的成长",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2016qgfyzf1.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "285",
                "name": "趣你的高中理综",
                "description": "生活处处是理综，这里有最有趣的理综知识！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>生活处处是理综，这里有最有趣的理综知识！</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "你身上的细菌有多少你知道吗？！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/qndgzlz.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "229",
                "name": "民国大家",
                "description": "聆听大家故事，感悟民国风范。（已完结，文字稿可移步小卖部购买）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>聆听大家故事，感悟民国风范。（已完结，文字稿可移步小卖部购买）</p>",
                "intro_title": "介绍",
                "latest": "陆小曼：红颜命不薄",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/mgdj.jpg",
                "praise": "2581",
                "play": "49310",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "263",
                "name": "世界主要国家趣谈",
                "description": "轻松掌握世界主要国家地理知识！（已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>轻松掌握世界主要国家地理知识！（已完结）</p>",
                "intro_title": "介绍",
                "latest": "巴西：处于热带地区的国度",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/wgdlqt.jpg",
                "praise": "3891",
                "play": "98212",
                "rank": "8",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "278",
                "name": "于丹国学美文",
                "description": "学国学,听美文。（已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>学国学,听美文。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>已完结</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "斋心天府以葆光",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ydgxmw.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "277",
                "name": "十分钟带你读名著",
                "description": "10分钟，青青带你懂得一本名著。（已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>10分钟，青青带你懂得一本名著。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>已完结</font></p></div>",
                "intro_title": "介绍",
                "latest": "《平凡的世界》一部经典作品的生命力",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/sfzdndmz.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "147",
                "name": "一周时事精选",
                "description": "精选一周时事内容，每周二更新~",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>精选一周时事内容，每周二更新~</p>",
                "intro_title": "介绍",
                "latest": "2017年7月第二周时事汇总",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/yizhoushishijingxuan.jpg",
                "praise": "295",
                "play": "5362",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "242",
                "name": "【基础版】英语晨读美文",
                "description": "“ 一日之计在于晨”，在大脑最清醒，理解和记忆的最佳时间晨读英语短文，享受朗读的乐趣，英语学习必然很有收获。 ",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>“ 一日之计在于晨”，在大脑最清醒，理解和记忆的最佳时间晨读英语短文，享受朗读的乐趣，英语学习必然很有收获。 </p>",
                "intro_title": "介绍",
                "latest": "The End of A Dream ",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/yycdmw_jcp.jpg",
                "praise": "7942",
                "play": "687230",
                "rank": "31",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "321",
                "name": "高中英语易背62篇作文（已完结）",
                "description": "每天2分钟，62天轻松拿下英语高分作文。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>每天2分钟，62天轻松拿下英语高分作文。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>每天更新~</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "Christmas 圣诞节",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gzybyyzw62.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "286",
                "name": "蜂背心理学",
                "description": "更懂心理学，更懂真的你",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>更懂心理学，更懂真的你</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "上课老走神？信不信，做笔记就能好！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fbxlx.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "84",
                "name": "60天拿下高考必背词汇",
                "description": "60天拿下高考必背词汇计划（已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>60天拿下高考必背词汇计划（已完结）</p>",
                "intro_title": "介绍",
                "latest": "Day 2 List 2",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/yingyu-s.jpg",
                "praise": "1160",
                "play": "35540",
                "rank": "60",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "284",
                "name": "2016高考优秀作文汇编",
                "description": "精选2016全国高考优秀作文",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>精选2016全国高考优秀作文</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "2016年全国卷1优秀作文：起伏的波浪才更具力量",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/16gkyxzw.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "316",
                "name": "蜜蜂全科急诊室",
                "description": "小蜜蜂老师帮你解决九科疑难杂症",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>小蜜蜂老师帮你解决九科疑难杂症</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "数学不开窍？试试GPA解题法",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/mfqkjzs2.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "4",
                    "name": "小蜜蜂老师",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535530_834055.png"
                }
            },
            {
                "id": "320",
                "name": "方法日报 2016上半年特辑",
                "description": "汇集方法日报2016 年上半年全部节目",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>汇集方法日报2016 年上半年全部节目</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "不用死记硬背方程式 化学so easy",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ffrb_2016s.png",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "113",
                "name": "方法日报 2016下半年特辑",
                "description": "全科方法精选学习方法大全！每日更新。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>全科方法精选学习方法大全！每日更新。</p>",
                "intro_title": "介绍",
                "latest": "轻轻地，轻轻地，我靠近了诗歌里的TA⋯⋯",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ffrb_2016x.png",
                "praise": "12681",
                "play": "1167669",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            }
        ],
        "totalRow": 32,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($album_id == 1001) {//课本录音
			$str = '{
    "resultCode": "0000",
    "response": [
        {
            "id": "1",
            "name": "语文",
            "rank": "1",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/yuwen.jpg",
            "is_bei": "1"
        },
        {
            "id": "3",
            "name": "英语",
            "rank": "2",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/yingyu.jpg",
            "is_bei": "1"
        },
        {
            "id": "4",
            "name": "政治",
            "rank": "3",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/zhengzhi.jpg",
            "is_bei": "1"
        },
        {
            "id": "9",
            "name": "生物",
            "rank": "4",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/shengwu.jpg",
            "is_bei": "0"
        },
        {
            "id": "7",
            "name": "历史",
            "rank": "5",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/lishi.jpg",
            "is_bei": "0"
        },
        {
            "id": "6",
            "name": "化学",
            "rank": "6",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/huaxue.jpg",
            "is_bei": "0"
        },
        {
            "id": "8",
            "name": "地理",
            "rank": "7",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/dili.jpg",
            "is_bei": "0"
        },
        {
            "id": "2",
            "name": "数学",
            "rank": "8",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/shuxue.jpg",
            "is_bei": "0"
        },
        {
            "id": "5",
            "name": "物理",
            "rank": "9",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/wuli.jpg",
            "is_bei": "0"
        }
    ],
    "msg": "成功"
}';
		}elseif ($album_id == 5) {//轻松幽默
			$str = '{
    "resultCode": "0000",
    "response": [
        {
            "id": "1",
            "name": "语文",
            "rank": "1",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/yuwen.jpg",
            "is_bei": "1"
        },
        {
            "id": "3",
            "name": "英语",
            "rank": "2",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/yingyu.jpg",
            "is_bei": "1"
        },
        {
            "id": "4",
            "name": "政治",
            "rank": "3",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/zhengzhi.jpg",
            "is_bei": "1"
        },
        {
            "id": "9",
            "name": "生物",
            "rank": "4",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/shengwu.jpg",
            "is_bei": "0"
        },
        {
            "id": "7",
            "name": "历史",
            "rank": "5",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/lishi.jpg",
            "is_bei": "0"
        },
        {
            "id": "6",
            "name": "化学",
            "rank": "6",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/huaxue.jpg",
            "is_bei": "0"
        },
        {
            "id": "8",
            "name": "地理",
            "rank": "7",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/dili.jpg",
            "is_bei": "0"
        },
        {
            "id": "2",
            "name": "数学",
            "rank": "8",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/shuxue.jpg",
            "is_bei": "0"
        },
        {
            "id": "5",
            "name": "物理",
            "rank": "9",
            "status": "1",
            "avatar": "https://simg.fengbee.cn/upload/kmAvatarV2/wuli.jpg",
            "is_bei": "0"
        }
    ],
    "msg": "成功"
}';
		}elseif ($album_id == 8) {//情感励志
			$str = '{
	"resultCode": "0000",
	"response": {
		"pageSize": "99",
		"pageNumber": "1",
		"list": [{
			"id": "247",
			"name": "\u9ad8\u8003\u52b1\u5fd7\u5012\u6570",
			"description": "\u7528\u667a\u6167\u966a\u4f60\u9ad8\u8003\u626b\u9664\u9ad8\u8003\u4e0d\u9002\u3002",
			"intro": " <link rel=\'stylesheet\' href=\'https:\/\/wx.fengbee.cn\/style\/forAPP\/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>\u7528\u667a\u6167\u966a\u4f60\u9ad8\u8003\u626b\u9664\u9ad8\u8003\u4e0d\u9002\u3002<\/p>",
			"intro_title": "\u4ecb\u7ecd",
			"latest": "\u81f4\u5954\u8d74\u8003\u573a\u7684\u4f60\uff1a\u5e26\u4e0a\u9a84\u50b2\uff0c\u7b49\u4f60\u51ef\u65cb\uff01",
			"avatar": "https:\/\/simg.fengbee.cn\/upload\/zjAvatar\/gklzds.jpg",
			"praise": "2931",
			"play": "827162",
			"rank": "1000",
			"status": "1",
			"flag": "0",
			"flagpic": "",
			"is_rechargeable": "0",
			"is_paid": 0,
			"is_invite": 0,
			"is_batch": "0",
			"is_allowbatch": 0,
			"goods": null,
			"anchor": {
				"id": "2",
				"name": "\u8475\u82b1\u8001\u5e08",
				"avatar": "https:\/\/savatar.fengbee.cn\/zhubo\/1488535458_729363.png"
			}
		}, {
			"id": "378",
			"name": "\u8475\u82b1\u52b1\u5fd7\u4e13\u680f",
			"description": "\u8475\u82b1\u8001\u5e08\u539f\u521b\u6587\u7ae0\uff0c\u9022\u5468\u516d\u66f4\u65b0",
			"intro": " <link rel=\'stylesheet\' href=\'https:\/\/wx.fengbee.cn\/style\/forAPP\/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:\u5b8b\u4f53;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>\u8475\u82b1\u8001\u5e08\u539f\u521b\u6587\u7ae0\uff1b<\/font><\/p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>\u9022\u5468\u516d\u66f4\u65b0\uff01<\/font><\/p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br><\/font><\/p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>\u70b9\u51fb\u4e0a\u65b9\u8475\u82b1\u8001\u5e08\u5934\u50cf\u53ef\u4ee5\u52a0\u5165\u8475\u82b1\u8001\u5e08\u7c89\u4e1d\u4f1a\uff0c\u83b7\u5f97\u4e13\u5c5e\u7279\u6743\u54e6~<\/font><\/p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>\u8d76\u7d27\u6765\u52a0\u5165\u5427\uff01<\/font><\/p><p><br><\/p><\/div>",
			"intro_title": "\u4ecb\u7ecd",
			"latest": "\u5173\u4e8e\u6691\u5047\u5b66\u4e60\u4f11\u606f\u4e24\u4e0d\u8bef\u7684\u884c\u52a8\u6e05\u5355",
			"avatar": "https:\/\/simg.fengbee.cn\/upload\/zjAvatar\/khlzzl.jpg",
			"praise": "0",
			"play": "0",
			"rank": "1000",
			"status": "1",
			"flag": "0",
			"flagpic": "",
			"is_rechargeable": "0",
			"is_paid": 0,
			"is_invite": 0,
			"is_batch": "0",
			"is_allowbatch": 0,
			"goods": null,
			"anchor": {
				"id": "2",
				"name": "\u8475\u82b1\u8001\u5e08",
				"avatar": "https:\/\/savatar.fengbee.cn\/zhubo\/1488535458_729363.png"
			}
		}, {
			"id": "230",
			"name": "\u660e\u661f\u52b1\u5fd7\u9986",
			"description": "\u7ec6\u6570\u660e\u661f\u80cc\u540e\u7684\u52b1\u5fd7\u6545\u4e8b\uff0c\u9022\u5468\u672b\u66f4\u65b0\u3002",
			"intro": " <link rel=\'stylesheet\' href=\'https:\/\/wx.fengbee.cn\/style\/forAPP\/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:\u5b8b\u4f53;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>\u7ec6\u6570\u660e\u661f\u80cc\u540e\u7684\u52b1\u5fd7\u6545\u4e8b\uff0c\u9022\u5468\u672b\u66f4\u65b0\u3002<\/font><\/p><p><br><\/p><\/div>",
			"intro_title": "\u4ecb\u7ecd",
			"latest": "\u5510\u5ae3\uff1a\u5173\u4e8e\u6211\u4eec\u7684\u4e8b \u4f60\u4eec\u7edf\u7edf\u90fd\u731c\u9519",
			"avatar": "https:\/\/simg.fengbee.cn\/upload\/zjAvatar\/mxlzg.jpg",
			"praise": "3821",
			"play": "58291",
			"rank": "1000",
			"status": "1",
			"flag": "0",
			"flagpic": "",
			"is_rechargeable": "0",
			"is_paid": 0,
			"is_invite": 0,
			"is_batch": "0",
			"is_allowbatch": 0,
			"goods": null,
			"anchor": null
		}, {
			"id": "85",
			"name": "\u52b1\u5fd7\u53cc\u8bed\u7f8e\u53e5",
			"description": "\u91c7\u7f8e\u53e5\uff0c\u5b66\u82f1\u8bed\uff0c\u8c08\u611f\u609f\uff0c\u804a\u4eba\u751f\uff08\u5df2\u5b8c\u7ed3\uff09",
			"intro": " <link rel=\'stylesheet\' href=\'https:\/\/wx.fengbee.cn\/style\/forAPP\/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>\u91c7\u7f8e\u53e5\uff0c\u5b66\u82f1\u8bed\uff0c\u8c08\u611f\u609f\uff0c\u804a\u4eba\u751f\u3002\u9022\u5468\u516d\u66f4\u65b0\u3002<\/p>",
			"intro_title": "\u4ecb\u7ecd",
			"latest": "\u5e78\u798f\uff0c\u4e5f\u8bb8\u5c31\u662f\u8bb0\u4f4f\u90a3\u4e9b\u5fae\u4e0d\u8db3\u9053\u7684\u5c0f\u4e8b\u3002",
			"avatar": "https:\/\/simg.fengbee.cn\/upload\/zjAvatar\/shuangyumeiju.jpg",
			"praise": "22894",
			"play": "1914982",
			"rank": "1000",
			"status": "1",
			"flag": "0",
			"flagpic": "",
			"is_rechargeable": "0",
			"is_paid": 0,
			"is_invite": 0,
			"is_batch": "0",
			"is_allowbatch": 0,
			"goods": null,
			"anchor": {
				"id": "4",
				"name": "\u5c0f\u871c\u8702\u8001\u5e08",
				"avatar": "https:\/\/savatar.fengbee.cn\/zhubo\/1488535530_834055.png"
			}
		}],
		"totalRow": 4,
		"totalPage": 1
	},
	"msg": "\u6210\u529f"
}';
		}elseif ($album_id == 10) {//学霸经验
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "90",
                "name": "学霸の提分技能",
                "description": "学霸独家学习心得大揭秘！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>学霸独家学习心得大揭秘！</p>",
                "intro_title": "介绍",
                "latest": "650分学霸教你克服高三不适症",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "praise": "1987",
                "play": "59588",
                "rank": "5",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "307",
                "name": "学霸是这样炼成的！",
                "description": "有关学霸们的励志故事~已完结",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>有关学霸们的励志故事~已完结</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "张沛文：我的复读之路",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xbszylcd.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "244",
                "name": "学姐学长侃大学",
                "description": "来自北上广一线名校的学姐学长给大家侃大学啦！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>来自北上广一线名校的学姐学长给大家侃大学啦！</p>",
                "intro_title": "介绍",
                "latest": "华南理工大学：校长是习大大背后的女人",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xjxzkdx.jpg",
                "praise": "49021",
                "play": "899021",
                "rank": "15",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "6",
                    "name": "季辰",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535606_613445.png"
                }
            },
            {
                "id": "272",
                "name": "清北学子的高中故事",
                "description": "告诉你清华北大学子的高中人生（已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>告诉你清华北大学子的高中人生</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>已完结</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "马晓东：一路上，我有你们（下）",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/qbxzdgzgs.jpg",
                "praise": "3672",
                "play": "87321",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "261",
                "name": "状元心路故事",
                "description": "给你讲高考状元那些不为人知的心路故事（已完结）。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>给你讲高考状元那些不为人知的心路故事（已完结）。</p>",
                "intro_title": "介绍",
                "latest": "张凯丽：为梦想，风雨兼程",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/zygs.jpg",
                "praise": "3829",
                "play": "478212",
                "rank": "16",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            }
        ],
        "totalRow": 5,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($album_id == 399) {//原创资料
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "49",
                "name": "【电子书】作文素材天天读（2017上半年刊）",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1496388407_2881_2017sbnk.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523421_519765.jpg",
                "description": "《作文素材天天读》2017上半年99期节目全部文字稿",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>《作文素材天天读》2017上半年99期节目全部文字稿</p><p><br></p></div>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 12:03:41",
                "type": "0",
                "num_iid": "338772414",
                "is_paid": 0,
                "price": "6.99",
                "youzan_url": "https://h5.youzan.com/v2/goods/27588da49rant?ps=360",
                "goods_description": "原创资料需购买解锁，仅需6.99元",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=338772414",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "8",
                "name": "蜜蜂数学课内部独家PPT（必修五）",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/数学ppt5.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523821_167190.jpg",
                "description": "蜜蜂数学课内部独家PPT（必修五）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532913.jpg\' alt=\'蜜蜂数学（必修五）商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532917.jpg\' alt=\'蜜蜂数学（必修五）商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532920.jpg\' alt=\'蜜蜂数学（必修五）商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532923.jpg\' alt=\'蜜蜂数学（必修五）商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532929.jpg\' alt=\'蜜蜂数学（必修五）商品详情图5\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532933.jpg\' alt=\'蜜蜂数学（必修五）商品详情图6\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500532939.jpg\' alt=\'蜜蜂数学（必修五）商品详情图7\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 14:43:51",
                "type": "0",
                "num_iid": "310050334",
                "is_paid": 0,
                "price": "19.90",
                "youzan_url": "https://h5.koudaitong.com/v2/goods/3no0nc5e1ncax?ps=360",
                "goods_description": "原创资料需购买解锁，仅需19.9元",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=310050334",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "52",
                "name": "2017全国高考作文真题分析及备考建议",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1497603547_3084_gkzuwspt.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500530653_410009.jpg",
                "description": "内含2017高考作文真题分析及备考建议",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>内含2017高考作文真题分析及备考建议</p><p><br></p></div>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 14:04:13",
                "type": "0",
                "num_iid": "340954963",
                "is_paid": 0,
                "price": "6.99",
                "youzan_url": "https://h5.youzan.com/v2/goods/3emumuwqah5gp",
                "goods_description": "仅需6.99元，让你提前拿下高考作文！",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=340954963",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "35",
                "name": "蜜蜂物理课内部独家PPT（必修二）",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1484900965_7506_wlppt2-.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523598_540598.jpg",
                "description": "39份566页PPT，一页顶一本，胜过看课本",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534239.jpg\' alt=\'蜜蜂物理（必修二）商品详情图1\' style=\'max-width:100%;\' class=\'\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534243.jpg\' alt=\'蜜蜂物理（必修二）商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534246.jpg\' alt=\'蜜蜂物理（必修二）商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534249.jpg\' alt=\'蜜蜂物理（必修二）商品详情图4\' style=\'max-width: 100%;\'></p></div><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534496.jpg\' alt=\'蜜蜂物理（必修二）商品详情图5\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534501.jpg\' alt=\'蜜蜂物理（必修二）商品详情图6\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534509.jpg\' alt=\'蜜蜂物理（必修二）商品详情图7\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534513.jpg\' alt=\'蜜蜂物理（必修二）商品详情图8\' style=\'max-width: 100%;\'></p><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 15:08:35",
                "type": "0",
                "num_iid": "323837557",
                "is_paid": 0,
                "price": "19.90",
                "youzan_url": "https://h5.koudaitong.com/v2/goods/2x6kzcdc6npmx",
                "goods_description": "仅需19.9元，赶紧购买周末物理复习PPT吧！",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=323837557",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "34",
                "name": "蜜蜂化学课内部独家PPT（必修二）",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1484900190_3232_hxppt2.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500531067_114071.jpg",
                "description": "29份476页PPT，一页顶一本，胜过看课本",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534534.jpg\' alt=\'蜜蜂化学（必修二）商品详情图1\' style=\'max-width:100%;\' class=\'\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534537.jpg\' alt=\'蜜蜂化学（必修二）商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534541.jpg\' alt=\'蜜蜂化学（必修二）商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534545.jpg\' alt=\'蜜蜂化学（必修二）商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534548.jpg\' alt=\'蜜蜂化学（必修二）商品详情图5\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534552.jpg\' alt=\'蜜蜂化学（必修二）商品详情图6\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534555.jpg\' alt=\'蜜蜂化学（必修二）商品详情图7\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500534562.jpg\' alt=\'蜜蜂化学（必修二）商品详情图8\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 15:09:26",
                "type": "0",
                "num_iid": "323837647",
                "is_paid": 0,
                "price": "19.90",
                "youzan_url": "https://h5.koudaitong.com/v2/goods/3no1uw2f6ev8p?ps=360",
                "goods_description": "仅需19.9元，赶紧购买周末化学复习PPT吧！",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=323837647",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "7",
                "name": "蜜蜂数学课内部独家PPT（必修四）",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/数学ppt4.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523942_499215.jpg",
                "description": "蜜蜂数学课内部独家PPT（必修四）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533043.jpg\' alt=\'蜜蜂数学（必修四）商品详情图1\' style=\'max-width:100%;\' class=\'\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533047.jpg\' alt=\'蜜蜂数学（必修四）商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533050.jpg\' alt=\'蜜蜂数学（必修四）商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533057.jpg\' alt=\'蜜蜂数学（必修四）商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533066.jpg\' alt=\'蜜蜂数学（必修四）商品详情图6\' style=\'max-width: 100%;\' class=\'\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533067.jpg\' alt=\'蜜蜂数学（必修四）商品详情图5\' style=\'max-width: 100%;\' class=\'\'></p></div><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533079.jpg\' alt=\'蜜蜂数学（必修四）商品详情图6\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533083.jpg\' alt=\'蜜蜂数学（必修四）商品详情图7\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533086.jpg\' alt=\'蜜蜂数学（必修四）商品详情图8\' style=\'max-width: 100%;\'></p><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 14:44:48",
                "type": "0",
                "num_iid": "310047907",
                "is_paid": 0,
                "price": "19.90",
                "youzan_url": "https://h5.koudaitong.com/v2/goods/2onvfwtgzcxeh?ps=360",
                "goods_description": "原创资料需购买解锁，仅需19.9元",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=310047907",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "40",
                "name": "《学法三部曲》合集",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1490240665_3688_hj.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523556_705122.jpg",
                "description": "内含《自律篇》《时间管理篇》《成为学霸篇》打包购只需19.90",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533499.jpg\' alt=\'学法三部曲合集商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533502.jpg\' alt=\'学法三部曲合集商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533506.jpg\' alt=\'学法三部曲合集商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533518.jpg\' alt=\'学法三部曲合集商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533522.jpg\' alt=\'学法三部曲合集商品详情图5\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533529.jpg\' alt=\'学法三部曲合集商品详情图6\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 16:11:16",
                "type": "0",
                "num_iid": "330350364",
                "is_paid": 0,
                "price": "19.90",
                "youzan_url": "https://h5.youzan.com/v2/goods/2xhptggbfo17t?ps=360",
                "goods_description": "仅需19.9元，立刻获得自律、学霸、时间管理三大技能！",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=330350364",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "16",
                "name": "作文素材天天读（2016全年刊）",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/作文素材天天读2016全年刊.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523674_156726.jpg",
                "description": "作文素材天天读（2016全年刊）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>作文素材天天读（2016全年刊）</p><p><br></p></div>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 12:07:54",
                "type": "0",
                "num_iid": "323486866",
                "is_paid": 0,
                "price": "9.90",
                "youzan_url": "https://h5.koudaitong.com/v2/goods/2g3x7m4j86ijd?ps=360",
                "goods_description": "原创资料需购买解锁，仅需9.9元",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=323486866",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "39",
                "name": "《学法三部曲》之自律篇",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1487730065_3234_zlp.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523565_553262.jpg",
                "description": "增强自律能力，提高效率，把梦想变为现实",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533574.jpg\' alt=\'学法三部曲之自律篇商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533579.jpg\' alt=\'学法三部曲之自律篇商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533583.jpg\' alt=\'学法三部曲之自律篇商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533588.jpg\' alt=\'学法三部曲之自律篇商品详情图6\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 16:11:27",
                "type": "0",
                "num_iid": "326607719",
                "is_paid": 0,
                "price": "9.90",
                "youzan_url": "https://h5.youzan.com/v2/goods/35vgy3i94ee89?ps=360",
                "goods_description": "仅需9.9元，就可以增强你的自律能力！",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=326607719",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "42",
                "name": "《学法三部曲》之时间管理篇",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1490243059_7489_sjgl.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523536_461219.jpg",
                "description": "摆脱拖延症，迅速提高学习效率！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533187.jpg\' alt=\'学法三部曲之时间管理商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533195.jpg\' alt=\'学法三部曲之时间管理商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533202.jpg\' alt=\'学法三部曲之时间管理商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533210.jpg\' alt=\'学法三部曲之时间管理商品详情图6\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 16:10:58",
                "type": "0",
                "num_iid": "330349659",
                "is_paid": 0,
                "price": "9.90",
                "youzan_url": "https://h5.youzan.com/v2/goods/366m4cbz1293d?ps=360",
                "goods_description": "仅需9.9元，就可以增强你的时间管理能力",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=330349659",
                "is_invite": 0,
                "is_invite3": 0
            },
            {
                "id": "41",
                "name": "《学法三部曲》之成为学霸篇",
                "avatar": "https://sstore.fengbee.cn/goods/avatar/1490242201_1493_cwxb.jpg",
                "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523546_168369.jpg",
                "description": "教你如何通向成功之路，让你也成为学霸！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533430.jpg\' alt=\'学法三部曲之成为学霸商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533433.jpg\' alt=\'学法三部曲之成为学霸商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533440.jpg\' alt=\'学法三部曲之成为学霸商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500533453.jpg\' alt=\'学法三部曲之成为学霸商品详情图6\' style=\'max-width: 100%;\'></p></div><p><br></p>",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "create_time": "2017-07-20 16:11:07",
                "type": "0",
                "num_iid": "330350070",
                "is_paid": 0,
                "price": "9.90",
                "youzan_url": "https://h5.youzan.com/v2/goods/3erscwgmvqoux?ps=360",
                "goods_description": "仅需9.9元，就可以了解学霸的成功秘诀",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=330350070",
                "is_invite": 0,
                "is_invite3": 0
            }
        ],
        "totalRow": 11,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($album_id == 15) {//校园故事
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "274",
                "name": "那些时光",
                "description": "耳朵里的那些心跳回忆，逢周六更新。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>耳朵里的那些心跳回忆，逢周六更新。</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "姑娘，这年头谁还没点故事",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "praise": "28732",
                "play": "76213",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "384",
                "name": "我们的故事",
                "description": "欢迎到“互动区”滚动置顶帖写下你的故事。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>欢迎到互动区滚动置顶帖写下你的故事。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>如何投稿：首页-互动区-顶栏滚动到最右可见“写我们的故事”。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><a href=\'https://wx.fengbee.cn/bar_link?id=144\' target=\'_blank\'><font color=\'#808080\'>&gt;&gt;&gt;点我立即到达互动区&lt;&lt;&lt;</font></a></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p><br></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "再见了，深爱的王学长",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/wmdgs.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "1",
                    "name": "冉冉",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535422_263836.png"
                }
            },
            {
                "id": "438",
                "name": "蜂友互助",
                "description": "蜂友们有困难，我们这里来帮忙！（逢周一、三、五、七更新）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>蜂友们有困难，我们这里来帮忙！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>日常学习生活当中</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>我们不免会遇到学习的烦恼、友情的困惑、家庭的烦扰......</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>在蜂背的大家庭里，我们一起来帮忙解决这些苦恼吧......</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>节目逢周一、三、五、七更新</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "中午总睡不着怎么办？",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fyhz.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "398",
                "name": "2017星座运程",
                "description": "2017年星座运程来了！快看看明年最lucky的是不是你！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>2017年最新星座运程</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>要看今年运程</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>赶紧收听本专辑</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>小卖部还有星座开运壁纸出售哦</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "摩羯座——主动出击，大步向前",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017xzyc.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "224",
                "name": "2016星座运程",
                "description": "2016星座运程来啦！快看看你的星座运吧~",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>2016星座运程来啦！快看看你的星座运吧~</p>",
                "intro_title": "介绍",
                "latest": "2016白羊座运程",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2016_Constellation.jpg",
                "praise": "3495",
                "play": "56472",
                "rank": "10",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            }
        ],
        "totalRow": 5,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($album_id == 109) {//晚安心情
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "281",
                "name": "蜂背悄悄话",
                "description": "冉冉陪你分享成长路上的喜怒哀乐，提问请到“我的”页面，互动区发帖。（第一季已完结）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>冉冉陪你分享成长路上的喜怒哀乐，提问请到首页，点击互动区。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>（第一季已完结）</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "有梦，却抓不住梦",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fbqqx.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "1",
                    "name": "冉冉",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535422_263836.png"
                }
            },
            {
                "id": "163",
                "name": "晚安歌单",
                "description": "用最动听的旋律和声音跟你道晚安。已完结。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>用最动听的旋律和声音跟你道晚安。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>已完结。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><span style=\'color: rgb(128, 128, 128);\'><br></span></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><span style=\'color: rgb(128, 128, 128);\'>点击上方季辰头像可以加入季辰粉丝会，获得专属特权哦~</span></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'></p><p><font color=\'#808080\'>赶紧来加入吧！</font></p><p><br></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "给十五岁的自己",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/wanangedan.jpg",
                "praise": "2579",
                "play": "12453",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": {
                    "id": "6",
                    "name": "季辰",
                    "avatar": "https://savatar.fengbee.cn/zhubo/1488535606_613445.png"
                }
            },
            {
                "id": "165",
                "name": "蜂背点歌台",
                "description": "如果你也想点歌，请到“首页-互动区-点歌台投稿”区里投稿哦！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>如果你也想点歌，</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>请到“首页-互动区-点歌台投稿”里投稿哦！</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><a href=\'https://wx.fengbee.cn/bar_link?id=144\' target=\'_blank\'><font color=\'#808080\'>&gt;&gt;&gt;点我马上到互动区&lt;&lt;&lt;</font></a></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "我们都是追光者",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/diangetai1.jpg",
                "praise": "2790",
                "play": "42321",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "283",
                "name": "蜂背好声音",
                "description": "蜂背好声音入围作品精选",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>蜂背好声音入围作品精选</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "蜂背好声音最终决赛—好久不见",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fbhsy.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            }
        ],
        "totalRow": 4,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($album_id == 114) {//音乐合集
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "469",
                "name": "夏意正浓音乐合集",
                "description": "夏天，这些音乐最能搭配你的心情。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>夏冰镇西瓜、</font></p><p><font color=\'#808080\'>橘子汽水、</font></p><p><font color=\'#808080\'>冰淇淋、</font></p><p><font color=\'#808080\'>夹脚拖鞋、还有那刺眼的阳光，夏天的风！</font></p><p><font color=\'#808080\'>一切都这么美好，原来都是因为，在听这首歌的时候，旁边是你…</font></p><p><br></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "夏意正浓音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "434",
                "name": "正能量max音乐合集",
                "description": "在春天这样的季节里，我们都需要正能量满满地努力加油！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>我相信自己，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>生来如同璀璨的夏日之花，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>不凋不败，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>妖冶如火，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>承受心跳的负荷和呼吸的累赘，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>乐此不疲。</font></p><p><font color=\'#808080\'><br></font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "正能量max音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/znlyyhj.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "400",
                "name": "背书必备音乐合集",
                "description": "背书时听一听，记忆效果max哒！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'line-height: 1.5;\'><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font face=\'宋体\' size=\'3\' color=\'#808080\'>巴赫 、亨德尔 、维瓦尔第为代表的Baroque音乐。</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font face=\'宋体\' size=\'3\' color=\'#808080\'>背书前听一会，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font face=\'宋体\' size=\'3\' color=\'#808080\'>更好的宁心提神。</font></p></div><p><font face=\'宋体\' size=\'3\' color=\'#808080\'>背书时听的话，</font></p><p><font face=\'宋体\' size=\'3\' color=\'#808080\'>记得控制音量呦~</font></p><p><br></p>",
                "intro_title": "介绍",
                "latest": "背书必备音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/bsbb_music.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "436",
                "name": "考前助眠音乐合集",
                "description": "考前失眠症患者必听音乐合集！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>考前精神压力大？总是睡不好？</font></p><p><font color=\'#808080\'>被日常生活折磨，睡眠质量总是很差？</font></p><p><font color=\'#808080\'>蜂背团精心挑选了可以帮助你入眠的音乐，</font></p><p><font color=\'#808080\'>伴随着音乐，来放松你的精神吧~</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "考前助眠音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/kqzmyyhj.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "433",
                "name": "春意盎然音乐合集",
                "description": "在这样的一个春天里，这些音乐最适合你。",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>你来的那天，</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>春风也到了，</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>你我两人，<br>你好似身处天空高高在上。</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'><br></font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>每每想到这里，</font></p><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>我就情不自禁的笑了出来。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "春意盎然音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/cyaryyhj.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "435",
                "name": "运动锻炼音乐合集",
                "description": "运动时怕无聊？蜂背音乐合集最适合你！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin-top: 0px; margin-bottom: 0px;\'>跑步不是件轻松的事情，</p><p style=\'margin-top: 0px; margin-bottom: 0px;\'>我们需要从音乐中获得力量和节奏，</p><p style=\'margin-top: 0px; margin-bottom: 0px;\'>给我们的意志力提供精神能量，</p><p style=\'margin-top: 0px; margin-bottom: 0px;\'>让脚步跟着节奏动起来，带给你能量！！</p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "跑步必听音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/yddlyyhj.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "399",
                "name": "复习专用音乐合集",
                "description": "复习时听一听，全部知识统统记下！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font face=\'宋体\' size=\'3\' color=\'#808080\'>本专辑和《背书》均为巴洛克风格音乐，</font></p><p><font face=\'宋体\' size=\'3\' color=\'#808080\'>使用中需要根据自己的需要调整音量，</font></p><p><font face=\'宋体\' size=\'3\' color=\'#808080\'>祝大家都能获得良好的学习体验~</font></p><p><br></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "复习专用音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fxzy_music.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "401",
                "name": "放松大脑音乐合集",
                "description": "知识越学越多，大脑疲劳记不住？快点来听听这些！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>音乐的用途多种多样，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>通常我用它来放松自己那绷紧的神经。</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>也许这里的风格不是你最喜爱的，</font></p><p style=\'margin-top: 0px; margin-bottom: 0px;\'><font color=\'#808080\'>但是或许他可以带给你不一样的感受。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "放松大脑音乐1",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/fsdn_music.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "402",
                "name": "刷题御用音乐合集",
                "description": "刷题时不想被噪声打扰又想能激发灵感！你需要这些音乐！",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><font color=\'#808080\'>做题是一件枯燥的事情，</font></p><p><font color=\'#808080\'>来点音乐~</font></p><p><font color=\'#808080\'>但是要什么样的呢？</font></p><p><font color=\'#808080\'>这里的音乐相信可以帮助到你。</font></p></div><p><br></p>",
                "intro_title": "介绍",
                "latest": "刷题御用音乐9",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/styy_music.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            }
        ],
        "totalRow": 9,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($album_id == 6) {//英语听力
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "477",
                "name": "2017年全国高考听力",
                "description": "最新出炉2017年高考英语听力",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>最新出炉！！！</p><p>2017年高考英语听力试题！！</p><p>附听力原文及答案！！</p><p>赶紧来训练一下啦！！</p></div>",
                "intro_title": "介绍",
                "latest": "2017年新课标I卷听力（第一节）",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "478",
                "name": "2016年全国高考听力真题",
                "description": "2016年高考英语听力真题汇编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p>2016年全国高考英语听力试题！！</p><p>附听力原文及答案！！</p><p>赶紧来训练一下啦！！</p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "2016年新课标I卷听力（第一节）",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2016qggktlzt.jpg",
                "praise": "0",
                "play": "0",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "270",
                "name": "VOA慢速英语",
                "description": "精选适合高中生磨耳朵的VOA慢速英语内容",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'><font color=\'#808080\'>精选适合高中生磨耳朵的VOA慢速英语内容</font></p><p><br></p></div>",
                "intro_title": "介绍",
                "latest": "巴西前总统涉腐被控,举国震惊!",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/voa_jingxuan.jpg",
                "praise": "3928",
                "play": "48991",
                "rank": "1000",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "122",
                "name": "2015全国高考听力真题",
                "description": "2015全国高考听力真题（完整版）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>2015全国高考听力真题（完整版）</p>",
                "intro_title": "介绍",
                "latest": "2015年全国卷高考真题英语听力第一节",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2015gaokaotingli.jpg",
                "praise": "42",
                "play": "1209",
                "rank": "65",
                "status": "1",
                "flag": "6",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "238",
                "name": "全国高考英语听力选编",
                "description": "全国高考英语听力选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>全国高考英语听力选编</p>",
                "intro_title": "介绍",
                "latest": "2004年全国卷part2",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-national.jpg",
                "praise": "8901",
                "play": "75631",
                "rank": "67",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "234",
                "name": "北京高考英语听力选编",
                "description": "北京高考英语听力选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>北京高考英语听力选编</p>",
                "intro_title": "介绍",
                "latest": "2004年北京卷part2",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-bj.jpg",
                "praise": "562",
                "play": "7892",
                "rank": "68",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "145",
                "name": "2014全国高考听力真题",
                "description": "2014全国高考听力真题（完整版）",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>2014全国高考听力真题（完整版）</p>",
                "intro_title": "介绍",
                "latest": "2014年广东高考听说考试真题A第三节",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2014tingli.jpg",
                "praise": "162",
                "play": "1876",
                "rank": "70",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "235",
                "name": "广东高考英语听力选编",
                "description": "广东高考英语听力选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>广东高考英语听力选编</p>",
                "intro_title": "介绍",
                "latest": "2014年广东高考听说考试真题A第一节",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-gd.jpg",
                "praise": "4596",
                "play": "79212",
                "rank": "180",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "236",
                "name": "上海高考英语听力选编",
                "description": "上海高考英语听力选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>上海高考英语听力选编</p>",
                "intro_title": "介绍",
                "latest": "2004年上海卷part3",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-sh.jpg",
                "praise": "895",
                "play": "12389",
                "rank": "190",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "237",
                "name": "湖北高考英语听力选编",
                "description": "湖北高考英语听力选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>湖北高考英语听力选编</p>",
                "intro_title": "介绍",
                "latest": "2004年湖北卷part2",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-hb.jpg",
                "praise": "895",
                "play": "7890",
                "rank": "195",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "239",
                "name": "湖南高考英语听力选编",
                "description": "湖南高考英语听力选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>湖南高考英语听力选编</p>",
                "intro_title": "介绍",
                "latest": "2004年湖南卷part2",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-hn.jpg",
                "praise": "7904",
                "play": "56478",
                "rank": "200",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "240",
                "name": "浙江高考英语听力选编",
                "description": "浙江高考英语听力选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>浙江高考英语听力选编</p>",
                "intro_title": "介绍",
                "latest": "2008年浙江卷part2",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-zj.jpg",
                "praise": "571",
                "play": "9436",
                "rank": "205",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            },
            {
                "id": "241",
                "name": "天津高考英语听力选编",
                "description": "天津高考英语听力真题选编",
                "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><p style=\'margin: 0px; padding: 0px; box-sizing: border-box;\'>天津高考英语听力真题选编</p>",
                "intro_title": "介绍",
                "latest": "2005年天津卷part2",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gktl-10years-tj.jpg",
                "praise": "674",
                "play": "9851",
                "rank": "210",
                "status": "1",
                "flag": "0",
                "flagpic": "",
                "is_rechargeable": "0",
                "is_paid": 0,
                "is_invite": 0,
                "is_batch": "0",
                "is_allowbatch": 0,
                "goods": null,
                "anchor": null
            }
        ],
        "totalRow": 13,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}
	}elseif ($type == 'album_detail') {//课程详情
		$audio_id = $_REQUEST['audioId'];
		if ($audio_id == 1) {//精品课程
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "8337",
                "name": "1. 小主你好！欢迎来到高中生的世界！",
                "size": "6.75",
                "url": "",
                "hours": "582",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8338",
                "name": "2. 初三毕业的暑假究竟做啥好？",
                "size": "7.59",
                "url": "",
                "hours": "655",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8339",
                "name": "3. 新高考是什么，可怕吗？",
                "size": "8.55",
                "url": "",
                "hours": "740",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8340",
                "name": "4. 高中生活剧透（内含高一上攻略）",
                "size": "6.87",
                "url": "",
                "hours": "593",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8341",
                "name": "5. 为啥总说初中女生学习好，高中就不行了？",
                "size": "8.23",
                "url": "",
                "hours": "712",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8342",
                "name": "6. 学生会社团，怎样才能玩得转",
                "size": "8.27",
                "url": "",
                "hours": "715",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8343",
                "name": "7. 高中社交技能get",
                "size": "6.67",
                "url": "",
                "hours": "575",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8344",
                "name": "8. 为什么高中语文光背拿不了分？",
                "size": "8.79",
                "url": "",
                "hours": "760",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8345",
                "name": "9. 高中数学难，已召唤神师来帮忙",
                "size": "10.96",
                "url": "",
                "hours": "950",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8346",
                "name": "10.3招帮你顺利过渡初高中英语学习",
                "size": "7.28",
                "url": "",
                "hours": "629",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8347",
                "name": "11.物理名师告诉你如何打倒高中怪",
                "size": "5.95",
                "url": "",
                "hours": "512",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8348",
                "name": "12. 你有一份高中化学宝典，请查收！",
                "size": "6.96",
                "url": "",
                "hours": "601",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8349",
                "name": "13. 初中没好好学过生物，高中咋整？",
                "size": "5.68",
                "url": "",
                "hours": "488",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8350",
                "name": "14. 高中历史怎么学才能轻松得高分",
                "size": "7.62",
                "url": "",
                "hours": "658",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8351",
                "name": "15. 如何不打瞌睡爱上高中政治",
                "size": "8.85",
                "url": "",
                "hours": "766",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8336",
                "name": "16.高中地理完全适应指南",
                "size": "7.31",
                "url": "",
                "hours": "631",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8352",
                "name": "17.武大学长的作业笔记经",
                "size": "6.58",
                "url": "",
                "hours": "568",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            },
            {
                "id": "8353",
                "name": "18.学霸的“爱情”是怎样的",
                "size": "7.28",
                "url": "",
                "hours": "629",
                "rank": "1",
                "urls": [
                    "",
                    ""
                ],
                "urlsHttps": [
                    "",
                    ""
                ],
                "album_id": "479",
                "album_name": "像学霸一样读高一",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
                "is_try": "0",
                "is_rechargeable": "1",
                "anchor_id": -1
            }
        ],
        "tryAudio": {
            "id": "8337",
            "name": "1. 小主你好！欢迎来到高中生的世界！",
            "size": "6.75",
            "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/1xiaozhunihao.mp3",
            "hours": "582",
            "rank": "1",
            "urls": [
                "http://qicow.fengbee.cn/@/upload/mp3/km0/1xiaozhunihao.mp3",
                "http://mp3.fengbee.cn/@_upload_mp3_km0_1xiaozhunihao.mp3"
            ],
            "urlsHttps": [
                "https://sqicow.fengbee.cn/@/upload/mp3/km0/1xiaozhunihao.mp3",
                "https://smp3.fengbee.cn/@_upload_mp3_km0_1xiaozhunihao.mp3"
            ],
            "album_id": "479",
            "album_name": "像学霸一样读高一",
            "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
            "is_try": "1",
            "is_rechargeable": "1",
            "anchor_id": -1
        },
        "album": {
            "id": "479",
            "name": "像学霸一样读高一",
            "description": "成功，从高一开始。",
            "intro": " <link rel=\'stylesheet\' href=\'https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\'><div class=\'is_set\' style=\'font-size:16px;font-family:宋体;line-height:1.5;\'><p><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015214.jpg\' alt=\'像学霸一样读高一商品详情图1\' style=\'max-width:100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015219.jpg\' alt=\'像学霸一样读高一商品详情图2\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015225.jpg\' alt=\'像学霸一样读高一商品详情图3\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015229.jpg\' alt=\'像学霸一样读高一商品详情图4\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015234.jpg\' alt=\'像学霸一样读高一商品详情图5\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015238.jpg\' alt=\'像学霸一样读高一商品详情图6\' style=\'max-width: 100%;\'><img src=\'http://qicow.fengbee.cn/@/avatar/avatar_0_1500015242.jpg\' alt=\'像学霸一样读高一商品详情图7\' style=\'max-width: 100%;\'></p></div><p><br></p>",
            "intro_title": "介绍",
            "latest": "1. 小主你好！欢迎来到高中生的世界！",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xxbyydgy.jpg",
            "praise": "0",
            "play": "0",
            "rank": "1000",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "1",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "1",
            "is_allowbatch": 0,
            "goods": {
                "price": "19.90",
                "youzan_url": "https://h5.youzan.com/v2/showcase/goods?alias=2xe14j5kz5zqh&ps=360",
                "description": "精品专辑需购买解锁，仅需19.9元即可收听整张专辑",
                "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=343536676",
                "num_iid": "343536676"
            },
            "anchor": null,
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 19,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 2) {//高一专属课堂
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "8376",
                "name": "正能量早餐|真正的人生赢家是将手中的坏牌打好",
                "size": "1.77",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3",
                "hours": "147",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_zhenzhengderenshengyingjia.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/zhenzhengderenshengyingjia.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_zhenzhengderenshengyingjia.mp3"
                ],
                "album_id": "480",
                "album_name": "早餐英语",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8375",
                "name": "早餐加油站|吃货必备的美食形容词你知道哪几个？",
                "size": "1.91",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/chihuobibeidanci.mp3",
                "hours": "159",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/chihuobibeidanci.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_chihuobibeidanci.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/chihuobibeidanci.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_chihuobibeidanci.mp3"
                ],
                "album_id": "480",
                "album_name": "早餐英语",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8374",
                "name": "早餐加油站|朋友圈中的九种人你是哪一种呢？",
                "size": "3.78",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/pengyouquan9zhongren.mp3",
                "hours": "322",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/pengyouquan9zhongren.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_pengyouquan9zhongren.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/pengyouquan9zhongren.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_pengyouquan9zhongren.mp3"
                ],
                "album_id": "480",
                "album_name": "早餐英语",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8373",
                "name": "元气早餐|英文歌精选——The Show",
                "size": "2.84",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/theshow.mp3",
                "hours": "241",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/theshow.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_theshow.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/theshow.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_theshow.mp3"
                ],
                "album_id": "480",
                "album_name": "早餐英语",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8372",
                "name": "正能量早餐|过好今天，为明天做准备",
                "size": "1.63",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/guohaojintianmeimingtianzuozhunbei.mp3",
                "hours": "135",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/guohaojintianmeimingtianzuozhunbei.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_guohaojintianmeimingtianzuozhunbei.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/guohaojintianmeimingtianzuozhunbei.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_guohaojintianmeimingtianzuozhunbei.mp3"
                ],
                "album_id": "480",
                "album_name": "早餐英语",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            }
        ],
        "tryAudio": null,
        "album": {
            "id": "480",
            "name": "早餐英语",
            "description": "这个暑假每顿早餐都是充实的！跟着蜂背在每顿早餐时间，学点英语！（逢周一到周五更新）",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><div class=\"is_set\" style=\"font-size:16px;font-family:宋体;line-height:1.5;\"><p><font size=\"3\" color=\"#808080\">每天你的早餐时间是否随便吃点就过去了？</font></p><p><font size=\"3\" color=\"#808080\">你知道每个早餐的时间利用起来，</font></p><p><font size=\"3\" color=\"#808080\">我们会有很大的进步呢！</font></p><p><font size=\"3\" color=\"#808080\">&nbsp;这个暑假，跟着蜂背！</font></p><p><font size=\"3\" color=\"#808080\">每天一顿早餐的时间，</font></p><p><font size=\"3\" color=\"#808080\">轻松掌握地道英语表达！</font></p><p>逢周一到周五更新。</p></div>",
            "intro_title": "介绍",
            "latest": "正能量早餐|真正的人生赢家是将手中的坏牌打好",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/zcyy.jpg",
            "praise": "0",
            "play": "0",
            "rank": "1000",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "0",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "0",
            "is_allowbatch": 0,
            "goods": null,
            "anchor": null,
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 5,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 3) {//课本录音-录音列表
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "88",
                "name": "高考新课标必背64篇",
                "description": "高考全国卷考纲要求必背64篇古诗文",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "praise": "1399",
                "play": "143250",
                "rank": "10",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "271",
                "name": "情境听写题（高中必背篇目）",
                "description": "高中必背篇目情境听写题",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gzbbpmqjtxb.jpg",
                "praise": "39210",
                "play": "382912",
                "rank": "1000",
                "status": "1",
                "flag": "1"
            },
            {
                "id": "267",
                "name": "高考必备文学常识",
                "description": "听着掌握高考需掌握的文学常识内容",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/gkbbwxcs.jpg",
                "praise": "48729",
                "play": "382713",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "10",
                "name": "拼音&成语",
                "description": "高考需掌握的拼音及成语大结集",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/9_pycy.jpg",
                "praise": "702",
                "play": "65058",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "13",
                "name": "文言实词&虚词",
                "description": "高考需掌握的文言实词及虚词大结集",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/9_wyscxc.jpg",
                "praise": "691",
                "play": "38678",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "59",
                "name": "人教版必修一必背篇目",
                "description": "人教版必修一必背篇目，听着背更轻松！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/9_yw1.jpg",
                "praise": "354",
                "play": "69414",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "60",
                "name": "人教版必修二必背篇目",
                "description": "人教版必修二必背篇目，听着背更轻松！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/9_yw2.jpg",
                "praise": "298",
                "play": "57008",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "61",
                "name": "人教版必修三必背篇目",
                "description": "人教版必修三必背篇目，听着背更轻松！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/9_yw3.jpg",
                "praise": "266",
                "play": "38154",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "62",
                "name": "人教版必修四必背篇目",
                "description": "人教版必修四必背篇目，听着背更轻松！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/9_yw4.jpg",
                "praise": "227",
                "play": "30586",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "63",
                "name": "人教版必修五必背篇目",
                "description": "人教版必修五必背篇目，听着背更轻松！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/9_yw5.jpg",
                "praise": "220",
                "play": "17873",
                "rank": "1000",
                "status": "1",
                "flag": "0"
            },
            {
                "id": "233",
                "name": "人教版语文选修必背篇目",
                "description": "人教版语文选修必背篇目，听着背更轻松！",
                "avatar": "https://simg.fengbee.cn/upload/zjAvatar/ywxxbbpm.jpg",
                "praise": "5669",
                "play": "89958",
                "rank": "90",
                "status": "1",
                "flag": "0"
            }
        ],
        "totalRow": 11,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == '3-1') {//课本录音-列表-详情
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "1013",
                "name": "《论语》十二则 ",
                "size": "2.03",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/xinaobeishulunyu.mp3",
                "hours": "133",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/xinaobeishulunyu.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_xinaobeishulunyu.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/xinaobeishulunyu.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_xinaobeishulunyu.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1014",
                "name": "《鱼我所欲也》 ",
                "size": "1.53",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/yu.mp3",
                "hours": "134",
                "rank": "2",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/yu.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_yu.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/yu.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_yu.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1015",
                "name": "《生于忧患，死于安乐》《孟子》",
                "size": "0.85",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/6403.mp3",
                "hours": "74",
                "rank": "3",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/6403.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_6403.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/6403.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_6403.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1016",
                "name": "《曹刿论战》",
                "size": "2.26",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(4).mp3",
                "hours": "98",
                "rank": "4",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(4).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(4).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(4).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(4).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1017",
                "name": "《邹忌讽齐王纳谏》",
                "size": "2.14",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/zouji201608182.mp3",
                "hours": "139",
                "rank": "5",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/zouji201608182.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_zouji201608182.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/zouji201608182.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_zouji201608182.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1018",
                "name": "《出师表》诸葛亮",
                "size": "3.53",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/chushi20170307.mp3",
                "hours": "231",
                "rank": "6",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/chushi20170307.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_chushi20170307.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/chushi20170307.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_chushi20170307.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1019",
                "name": "《桃花源记》 陶渊明",
                "size": "1.7",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/taohuayuanji2.mp3",
                "hours": "148",
                "rank": "7",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/taohuayuanji2.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_taohuayuanji2.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/taohuayuanji2.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_taohuayuanji2.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1020",
                "name": "《三峡》 郦道元",
                "size": "1.29",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/sanxiagaozhongban1.mp3",
                "hours": "84",
                "rank": "8",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/sanxiagaozhongban1.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_sanxiagaozhongban1.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/sanxiagaozhongban1.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_sanxiagaozhongban1.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1021",
                "name": "《马说》韩愈",
                "size": "1.64",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(9).mp3",
                "hours": "71",
                "rank": "9",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(9).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(9).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(9).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(9).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1022",
                "name": "《陋室铭》刘禹锡",
                "size": "0.67",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/louishiming3.mp3",
                "hours": "43",
                "rank": "10",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/louishiming3.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_louishiming3.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/louishiming3.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_louishiming3.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1023",
                "name": "《小石潭记》柳宗元",
                "size": "1.5",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/czxiaoshitanji1012.mp3",
                "hours": "97",
                "rank": "11",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/czxiaoshitanji1012.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_czxiaoshitanji1012.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/czxiaoshitanji1012.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_czxiaoshitanji1012.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1024",
                "name": "《岳阳楼记》 范仲淹",
                "size": "2.4",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/yueyanglouji4.mp3",
                "hours": "157",
                "rank": "12",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/yueyanglouji4.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_yueyanglouji4.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/yueyanglouji4.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_yueyanglouji4.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1025",
                "name": "《醉翁亭记》欧阳修",
                "size": "3.63",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(13).mp3",
                "hours": "158",
                "rank": "13",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(13).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(13).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(13).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(13).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1026",
                "name": "《爱莲说》周敦颐",
                "size": "1.34",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(14).mp3",
                "hours": "58",
                "rank": "14",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(14).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(14).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(14).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(14).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1029",
                "name": "《记承天寺夜游》苏轼",
                "size": "1.06",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(15).mp3",
                "hours": "46",
                "rank": "15",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(15).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(15).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(15).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(15).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1030",
                "name": "《送东阳马生序》 宋濂",
                "size": "3.75",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(16).mp3",
                "hours": "163",
                "rank": "16",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(16).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(16).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(16).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(16).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1080",
                "name": "《关雎》《诗经》",
                "size": "0.93",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(17).mp3",
                "hours": "40",
                "rank": "17",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(17).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(17).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(17).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(17).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1081",
                "name": "《蒹葭》《诗经》",
                "size": "1.24",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(18).mp3",
                "hours": "53",
                "rank": "18",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(18).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(18).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(18).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(18).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1082",
                "name": "《观沧海》曹操",
                "size": "0.83",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(19).mp3",
                "hours": "35",
                "rank": "19",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(19).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(19).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(19).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(19).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1083",
                "name": "《饮酒》陶渊明",
                "size": "0.99",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(20).mp3",
                "hours": "42",
                "rank": "20",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(20).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(20).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(20).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(20).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1036",
                "name": "《送杜少府之任蜀州》 王勃 ",
                "size": "0.78",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(21).mp3",
                "hours": "33",
                "rank": "21",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(21).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(21).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(21).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(21).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1037",
                "name": "《次北固山下》王湾",
                "size": "0.83",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(22).mp3",
                "hours": "36",
                "rank": "22",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(22).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(22).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(22).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(22).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1038",
                "name": "《使至塞上》王维",
                "size": "0.82",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(23).mp3",
                "hours": "35",
                "rank": "23",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(23).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(23).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(23).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(23).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1039",
                "name": "《闻王昌龄左迁龙标遥有此寄》李白",
                "size": "0.71",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(24).mp3",
                "hours": "30",
                "rank": "24",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(24).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(24).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(24).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(24).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1040",
                "name": "《行路难》 李白",
                "size": "1.12",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(25).mp3",
                "hours": "48",
                "rank": "25",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(25).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(25).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(25).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(25).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1041",
                "name": "《望岳》杜甫",
                "size": "0.74",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(26).mp3",
                "hours": "32",
                "rank": "26",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(26).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(26).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(26).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(26).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1042",
                "name": "《春望》 杜甫",
                "size": "0.79",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(27).mp3",
                "hours": "34",
                "rank": "27",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(27).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(27).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(27).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(27).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1043",
                "name": "《茅屋为秋风所破歌》 杜甫",
                "size": "4.07",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/maowuqiufeng2.mp3",
                "hours": "106",
                "rank": "28",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/maowuqiufeng2.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_maowuqiufeng2.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/maowuqiufeng2.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_maowuqiufeng2.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1044",
                "name": "《白雪歌送武判官归京》 岑参",
                "size": "1.81",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(29).mp3",
                "hours": "78",
                "rank": "29",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(29).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(29).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(29).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(29).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1045",
                "name": "《早春呈水部张十八员外》",
                "size": "0.28",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(30).mp3",
                "hours": "24",
                "rank": "30",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(30).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(30).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(30).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(30).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1046",
                "name": "《酬乐天扬州初逢席上见赠》刘禹锡",
                "size": "1.09",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(31).mp3",
                "hours": "47",
                "rank": "31",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(31).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(31).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(31).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(31).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1047",
                "name": "《观刈麦》",
                "size": "1.15",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(32).mp3",
                "hours": "100",
                "rank": "32",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(32).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(32).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(32).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(32).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1048",
                "name": "《钱塘湖春行》白居易",
                "size": "1",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(33).mp3",
                "hours": "43",
                "rank": "33",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(33).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(33).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(33).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(33).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1049",
                "name": "《雁门太守行》李贺",
                "size": "0.89",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(34).mp3",
                "hours": "38",
                "rank": "34",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(34).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(34).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(34).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(34).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1050",
                "name": "《赤壁》杜牧",
                "size": "0.6",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(35).mp3",
                "hours": "25",
                "rank": "35",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(35).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(35).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(35).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(35).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1051",
                "name": "《泊秦淮》杜牧",
                "size": "0.67",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(36).mp3",
                "hours": "28",
                "rank": "36",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(36).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(36).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(36).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(36).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1052",
                "name": "《夜雨寄北》李商隐",
                "size": "0.68",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(37).mp3",
                "hours": "29",
                "rank": "37",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(37).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(37).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(37).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(37).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1053",
                "name": "《无题》李商隐",
                "size": "0.96",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/xnbsywwt.mp3",
                "hours": "41",
                "rank": "38",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/xnbsywwt.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_xnbsywwt.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/xnbsywwt.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_xnbsywwt.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1054",
                "name": "《相见欢》李煜",
                "size": "0.76",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(39).mp3",
                "hours": "32",
                "rank": "39",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(39).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(39).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(39).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(39).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1055",
                "name": "《渔家傲·秋思》 范仲淹",
                "size": "1.07",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(40).mp3",
                "hours": "46",
                "rank": "40",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(40).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(40).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(40).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(40).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1056",
                "name": "《浣溪沙》晏殊",
                "size": "0.81",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(41).mp3",
                "hours": "35",
                "rank": "41",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(41).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(41).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(41).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(41).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1057",
                "name": "《登飞来峰》 王安石",
                "size": "0.46",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dengfeilaifen01.mp3",
                "hours": "30",
                "rank": "42",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dengfeilaifen01.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dengfeilaifen01.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dengfeilaifen01.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dengfeilaifen01.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1058",
                "name": "《江城子·密州出猎》 苏轼",
                "size": "1.08",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(43).mp3",
                "hours": "46",
                "rank": "43",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(43).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(43).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(43).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(43).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1059",
                "name": "《水调歌头》苏轼",
                "size": "1.66",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(44).mp3",
                "hours": "72",
                "rank": "44",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(44).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(44).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(44).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(44).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1060",
                "name": "《游山西村》陆游",
                "size": "0.91",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(45).mp3",
                "hours": "39",
                "rank": "45",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(45).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(45).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(45).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(45).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1061",
                "name": "《破阵子·为陈同甫赋壮词以寄之》辛弃疾",
                "size": "0.91",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(46).mp3",
                "hours": "39",
                "rank": "46",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(46).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(46).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(46).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(46).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1062",
                "name": "《过零丁洋》文天祥",
                "size": "0.95",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(47).mp3",
                "hours": "41",
                "rank": "47",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(47).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(47).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(47).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(47).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1063",
                "name": "《天净沙·秋思》马致远",
                "size": "0.7",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(48).mp3",
                "hours": "30",
                "rank": "48",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(48).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(48).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(48).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(48).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1064",
                "name": "《山坡羊·潼关怀古》张养浩",
                "size": "0.8",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(49).mp3",
                "hours": "34",
                "rank": "49",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/0709_(49).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_0709_(49).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/0709_(49).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_0709_(49).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1065",
                "name": "《己亥杂诗》龚自珍",
                "size": "0.3",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/yw64_yihaizashi.mp3",
                "hours": "26",
                "rank": "50",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/yw64_yihaizashi.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_yw64_yihaizashi.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/yw64_yihaizashi.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_yw64_yihaizashi.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1066",
                "name": "《劝学》荀子",
                "size": "1.88",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/quanxue1001.mp3",
                "hours": "123",
                "rank": "51",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/quanxue1001.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_quanxue1001.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/quanxue1001.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_quanxue1001.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1067",
                "name": "《逍遥游》",
                "size": "3.68",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/rjbbx5xyy.mp3",
                "hours": "274",
                "rank": "52",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/rjbbx5xyy.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_rjbbx5xyy.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/rjbbx5xyy.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_rjbbx5xyy.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1068",
                "name": "《师说》韩愈",
                "size": "2.9",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/shishuo1001.mp3",
                "hours": "190",
                "rank": "53",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/shishuo1001.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_shishuo1001.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/shishuo1001.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_shishuo1001.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1069",
                "name": "《阿房宫赋》杜牧",
                "size": "3.99",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/ywxxepanggongfu.mp3",
                "hours": "261",
                "rank": "54",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/ywxxepanggongfu.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_ywxxepanggongfu.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/ywxxepanggongfu.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_ywxxepanggongfu.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1070",
                "name": "《赤壁赋》苏轼",
                "size": "2.85",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/yw64_chibifu.mp3",
                "hours": "249",
                "rank": "55",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/yw64_chibifu.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_yw64_chibifu.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/yw64_chibifu.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_yw64_chibifu.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1071",
                "name": "《氓》 《诗经》",
                "size": "1.87",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/xnbsmeng.mp3",
                "hours": "122",
                "rank": "56",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/xnbsmeng.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_xnbsmeng.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/xnbsmeng.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_xnbsmeng.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1072",
                "name": "《离骚》",
                "size": "1.96",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/bibei57.mp3",
                "hours": "171",
                "rank": "57",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/bibei57.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_bibei57.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/bibei57.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_bibei57.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1073",
                "name": "《蜀道难》 李白",
                "size": "1.57",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/yw64_shudaonan.mp3",
                "hours": "137",
                "rank": "58",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/yw64_shudaonan.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_yw64_shudaonan.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/yw64_shudaonan.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_yw64_shudaonan.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1074",
                "name": "《登高》 杜甫",
                "size": "0.62",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/denggao0831.mp3",
                "hours": "39",
                "rank": "59",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/denggao0831.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_denggao0831.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/denggao0831.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_denggao0831.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1084",
                "name": "《琵琶行》白居易",
                "size": "5.72",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/pipaxing0831.mp3",
                "hours": "373",
                "rank": "60",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/pipaxing0831.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_pipaxing0831.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/pipaxing0831.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_pipaxing0831.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1076",
                "name": "《锦瑟》",
                "size": "0.31",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km1/gaozhong_(11).mp3",
                "hours": "40",
                "rank": "61",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km1/gaozhong_(11).mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km1_gaozhong_(11).mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km1/gaozhong_(11).mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km1_gaozhong_(11).mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1077",
                "name": "《虞美人》李煜",
                "size": "0.62",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/ywxxyumeiren.mp3",
                "hours": "40",
                "rank": "62",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/ywxxyumeiren.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_ywxxyumeiren.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/ywxxyumeiren.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_ywxxyumeiren.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1078",
                "name": "《念奴娇·赤壁怀古》苏轼",
                "size": "0.95",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/niannujiao0831.mp3",
                "hours": "61",
                "rank": "63",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/niannujiao0831.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_niannujiao0831.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/niannujiao0831.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_niannujiao0831.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1079",
                "name": "《永遇乐·京口北固亭怀古》辛弃疾",
                "size": "0.83",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/jingkoubeiguting.mp3",
                "hours": "72",
                "rank": "64",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/jingkoubeiguting.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_jingkoubeiguting.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/jingkoubeiguting.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_jingkoubeiguting.mp3"
                ],
                "album_id": "88",
                "album_name": "高考新课标必背64篇",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            }
        ],
        "tryAudio": null,
        "album": {
            "id": "88",
            "name": "高考新课标必背64篇",
            "description": "高考全国卷考纲要求必背64篇古诗文",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\">高考全国卷考纲要求必背64篇古诗文</p>",
            "intro_title": "介绍",
            "latest": "《岳阳楼记》 范仲淹",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/64pian.jpg",
            "praise": "1399",
            "play": "143250",
            "rank": "10",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "0",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "1",
            "is_allowbatch": 0,
            "goods": null,
            "anchor": null,
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 64,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 4) {//轻松幽默、高考励志
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "8355",
                "name": "假期的理想和现实",
                "size": "1.52",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0715.mp3",
                "hours": "125",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0715.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0715.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0715.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0715.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8295",
                "name": "请叫我优雅的点菜小能手",
                "size": "5.18",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0707.mp3",
                "hours": "445",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0707.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0707.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0707.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0707.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8273",
                "name": "震惊！原来他表达的是这个意思？！",
                "size": "6.39",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0630.mp3",
                "hours": "551",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0630.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0630.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0630.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0630.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8233",
                "name": " 震惊！原来她表达的其实不是这个意思？！",
                "size": "4.27",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0623.mp3",
                "hours": "366",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0623.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0623.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0623.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0623.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8208",
                "name": "在知识的海洋中我只是条淡水（xian）鱼",
                "size": "2.89",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0616.mp3",
                "hours": "252",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0616.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0616.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0616.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0616.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8157",
                "name": "最后的90后的第一场战役",
                "size": "1.77",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixn0607.mp3",
                "hours": "147",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixn0607.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixn0607.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixn0607.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixn0607.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8121",
                "name": "有什么事熬不过去呢~以后更难熬",
                "size": "1.94",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0602.mp3",
                "hours": "168",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0602.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0602.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0602.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0602.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8081",
                "name": "大夫，你这样我有点害怕",
                "size": "3.96",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0526.mp3",
                "hours": "339",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0526.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0526.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0526.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0526.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "8033",
                "name": "五二零...战争已经开始...",
                "size": "3.68",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0519.mp3",
                "hours": "319",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0519.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0519.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0519.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0519.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7933",
                "name": "你妈说你是垃圾桶里捡来的很可能不是骗你",
                "size": "3.02",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0512.mp3",
                "hours": "259",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0512.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0512.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0512.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0512.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7856",
                "name": "生活中有些人的存在是为了检验你的承受下限",
                "size": "3.57",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/douni0504.mp3",
                "hours": "308",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/douni0504.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_douni0504.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/douni0504.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_douni0504.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7834",
                "name": "有口音是种什么样的体验？",
                "size": "2.67",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0428.mp3",
                "hours": "232",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0428.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0428.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0428.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0428.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7764",
                "name": "胖是一种怎样的体验？",
                "size": "2.98",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dnks0418.mp3",
                "hours": "195",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dnks0418.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dnks0418.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dnks0418.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dnks0418.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7719",
                "name": "什么样的女生low到爆",
                "size": "1.52",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0412.mp3",
                "hours": "128",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0412.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0412.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0412.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0412.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7643",
                "name": "什么样的男生让你觉得low到爆",
                "size": "3.71",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0406.mp3",
                "hours": "321",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0406.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0406.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0406.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0406.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7556",
                "name": "还记得当年被整蛊的恐惧吗",
                "size": "3.28",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0331.mp3",
                "hours": "284",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0331.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0331.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0331.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0331.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7540",
                "name": "有些往事真是想让他随风而去...",
                "size": "2.78",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0324.mp3",
                "hours": "241",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0324.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0324.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0324.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0324.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7422",
                "name": "是谁在唱歌！温暖了寂寞！",
                "size": "4.52",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0317.mp3",
                "hours": "295",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0317.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0317.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0317.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0317.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "7320",
                "name": "震惊！逗你开心节目的主持人原来是...",
                "size": "2.75",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0310.mp3",
                "hours": "239",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0310.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0310.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0310.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0310.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "6860",
                "name": "我还是好喜欢你....像..",
                "size": "1.49",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0220.mp3",
                "hours": "97",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0220.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0220.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0220.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0220.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "6827",
                "name": "语文不好是一种怎样的体验？",
                "size": "1.59",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin170224.mp3",
                "hours": "103",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin170224.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin170224.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin170224.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin170224.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "6480",
                "name": "距离产生美，相看两不厌",
                "size": "1.12",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounbikaixin0217.mp3",
                "hours": "93",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounbikaixin0217.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounbikaixin0217.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounbikaixin0217.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounbikaixin0217.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "6322",
                "name": "迟到是会呼吸的痛",
                "size": "1.48",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/chidao0210.mp3",
                "hours": "96",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/chidao0210.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_chidao0210.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/chidao0210.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_chidao0210.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "6321",
                "name": "你的肾..不是..你手机呢？",
                "size": "1.57",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/wanshouji0204.mp3",
                "hours": "102",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/wanshouji0204.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_wanshouji0204.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/wanshouji0204.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_wanshouji0204.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "6363",
                "name": "2017重磅节目《同学说要逗你开心》强势来袭",
                "size": "3.35",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/tsxdnkx0127.mp3",
                "hours": "217",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/tsxdnkx0127.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_tsxdnkx0127.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/tsxdnkx0127.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_tsxdnkx0127.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "6313",
                "name": "作为一条单身狗，你的脑子里都在想什么？",
                "size": "2.31",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/danshengou.mp3",
                "hours": "149",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/danshengou.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_danshengou.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/danshengou.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_danshengou.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5920",
                "name": "2017年的文科生都是折翼的天使！",
                "size": "2.58",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0113.mp3",
                "hours": "168",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0113.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0113.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0113.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0113.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5885",
                "name": "这些2016的流行语你在2017年还有印象嘛！",
                "size": "1.57",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin170105.mp3",
                "hours": "101",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin170105.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin170105.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin170105.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin170105.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5864",
                "name": "回首2016，我都干了啥？",
                "size": "1.67",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1230.mp3",
                "hours": "108",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1230.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1230.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1230.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1230.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5748",
                "name": "苍天呐！我怎么这么笨！",
                "size": "1.72",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1222.mp3",
                "hours": "112",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1222.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1222.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1222.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1222.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5712",
                "name": "学生时代总有些东西令你记忆深刻",
                "size": "1.78",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaoixin1216.mp3",
                "hours": "116",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaoixin1216.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaoixin1216.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaoixin1216.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaoixin1216.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5674",
                "name": "同样的爸妈不同的朋友圈",
                "size": "1.64",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1209.mp3",
                "hours": "107",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1209.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1209.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1209.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1209.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5629",
                "name": "赖床时你在想什么？",
                "size": "1.56",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin121.mp3",
                "hours": "101",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin121.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin121.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin121.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin121.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5521",
                "name": "记性不好是种什么样的体验？",
                "size": "1.96",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1123.mp3",
                "hours": "128",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1123.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1123.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1123.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1123.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "5373",
                "name": "作文你不知道怎么写？笨！！",
                "size": "2.43",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1118.mp3",
                "hours": "158",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1118.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1118.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1118.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1118.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4863",
                "name": "学习使我快乐，我爱学习！",
                "size": "2.04",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1111.mp3",
                "hours": "133",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1111.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1111.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1111.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1111.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4735",
                "name": "如何优雅的表达电影不好看？",
                "size": "1.97",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixinn.mp3",
                "hours": "128",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixinn.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixinn.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixinn.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixinn.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4668",
                "name": "那些生活中的神评论",
                "size": "1.7",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1028.mp3",
                "hours": "110",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1028.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1028.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1028.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1028.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4634",
                "name": "小时候的我真是个天才",
                "size": "1.85",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1020.mp3",
                "hours": "121",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1020.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1020.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1020.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1020.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4593",
                "name": "有哪些话看起来简单但是实际杀伤力极大！",
                "size": "1.59",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/douniakixin1014.mp3",
                "hours": "103",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/douniakixin1014.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_douniakixin1014.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/douniakixin1014.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_douniakixin1014.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4485",
                "name": "生活中那些像是段子一样的故事",
                "size": "1.56",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1007.mp3",
                "hours": "101",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1007.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1007.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1007.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1007.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4463",
                "name": "简单点，说话的方式简单点",
                "size": "2.23",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixn09281.mp3",
                "hours": "145",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixn09281.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixn09281.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixn09281.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixn09281.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4407",
                "name": "那些虽然存在但是没啥用的东西？",
                "size": "1.49",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0923mp3.mp3",
                "hours": "96",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0923mp3.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0923mp3.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0923mp3.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0923mp3.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4322",
                "name": "那些年我们度过的中秋节",
                "size": "2.38",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0913.mp3",
                "hours": "154",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0913.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0913.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0913.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0913.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4310",
                "name": "这些生活小常识你知道嘛？",
                "size": "1.95",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0909.mp3",
                "hours": "127",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0909.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0909.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0909.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0909.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4219",
                "name": "文科班的男生是一种怎样的体验？",
                "size": "2.35",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/xuewenke.mp3",
                "hours": "153",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/xuewenke.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_xuewenke.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/xuewenke.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_xuewenke.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4114",
                "name": "如何优雅的解释我的作业没完成？",
                "size": "2.38",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0823.mp3",
                "hours": "155",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0823.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0823.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0823.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0823.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "4013",
                "name": "历史架空穿越剧的黄金套路",
                "size": "2.07",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0818.mp3",
                "hours": "135",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0818.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0818.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0818.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0818.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3779",
                "name": "七夕情人节生存指南?",
                "size": "1.83",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/0808.mp3",
                "hours": "119",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/0808.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_0808.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/0808.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_0808.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3770",
                "name": "是你想太多，我总这样说",
                "size": "1.57",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0805.mp3",
                "hours": "102",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0805.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0805.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0805.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0805.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3686",
                "name": "数学不好是种什么体验？",
                "size": "2.08",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0729.mp3",
                "hours": "135",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0729.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0729.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0729.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0729.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3631",
                "name": "假期里如何玩电脑？",
                "size": "1.17",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0721.mp3",
                "hours": "76",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0721.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0721.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0721.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0721.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3519",
                "name": " 文科生注意！明年肯定考这个！！",
                "size": "1.85",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0714.mp3",
                "hours": "120",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0714.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0714.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0714.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0714.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3486",
                "name": "假如你穿越到了先秦？",
                "size": "3.13",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixn07082.mp3",
                "hours": "135",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixn07082.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixn07082.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixn07082.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixn07082.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3429",
                "name": "记忆的最高境界就是举一反三",
                "size": "1.51",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0629.mp3",
                "hours": "98",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0629.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0629.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0629.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0629.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3379",
                "name": "套路？套路！全都是套路",
                "size": "1.56",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0622.mp3",
                "hours": "102",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0622.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0622.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0622.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0622.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3343",
                "name": "不会说话还想撩妹？活该你单身一辈子。",
                "size": "2.02",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/douni06152.mp3",
                "hours": "132",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/douni06152.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_douni06152.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/douni06152.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_douni06152.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3310",
                "name": "思维回路这种因人而异的东西真是没法说",
                "size": "1.4",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0607.mp3",
                "hours": "91",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0607.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0607.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin0607.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin0607.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3259",
                "name": "英语不好是种什么样的感受？",
                "size": "1.98",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixinyingyu.mp3",
                "hours": "86",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixinyingyu.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixinyingyu.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixinyingyu.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixinyingyu.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            },
            {
                "id": "3216",
                "name": "当我跑步时我觉得我拥有全世界",
                "size": "2.73",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1.mp3",
                "hours": "118",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/dounikaixin1.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_dounikaixin1.mp3"
                ],
                "album_id": "273",
                "album_name": "逗你开心",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": "1"
            }
        ],
        "tryAudio": null,
        "album": {
            "id": "273",
            "name": "逗你开心",
            "description": "这不是个正经的节目，单纯为了逗你开心，每周五更新。",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><div class=\"is_set\" style=\"font-size:16px;font-family:宋体;line-height:1.5;\"><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><font color=\"#808080\">这不是个正经的节目，</font></p><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><font color=\"#808080\">只是单纯的为了逗你开心。</font></p><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><font color=\"#808080\">每周五更新~</font></p><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><font color=\"#808080\"><br></font></p><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><font color=\"#808080\">参与互动：</font></p><p style=\"margin-top: 0px; margin-bottom: 0px;\"><font color=\"#808080\">在互动区找到冉冉“逗你开心”的帖子</font></p><p style=\"margin-top: 0px; margin-bottom: 0px;\"><font color=\"#808080\">并评论就有机会在节目中出现了哦</font></p><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><a href=\"https://wx.fengbee.cn/bar_link?id=144\" target=\"_blank\"><font color=\"#808080\">&gt;&gt;&gt;点我跳到互动区&lt;&lt;&lt;</font></a></p><p><br></p></div><p><br></p>",
            "intro_title": "介绍",
            "latest": "假期的理想和现实",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/dnkx.jpg",
            "praise": "0",
            "play": "0",
            "rank": "1000",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "0",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "0",
            "is_allowbatch": 0,
            "goods": null,
            "anchor": {
                "id": "1",
                "name": "冉冉",
                "avatar": "https://savatar.fengbee.cn/zhubo/1488535422_263836.png"
            },
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 60,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 5) {//学霸经验
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "3492",
                "name": "650分学霸教你克服高三不适症",
                "size": "7.5",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi650.mp3",
                "hours": "491",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi650.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_mingshi650.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/mingshi650.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_mingshi650.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1416",
                "name": "女生学不好数学？交大学姐传授学习大法！",
                "size": "7.74",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nvshengshuxue.mp3",
                "hours": "675",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nvshengshuxue.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nvshengshuxue.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nvshengshuxue.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nvshengshuxue.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "2548",
                "name": "人大学姐：这样做错题和调心态才有效！",
                "size": "6.98",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi20160226.mp3",
                "hours": "457",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi20160226.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_mingshi20160226.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/mingshi20160226.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_mingshi20160226.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3159",
                "name": "北师大学姐教你如何学好文科",
                "size": "9.28",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshijiangtanbeishi2.mp3",
                "hours": "608",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshijiangtanbeishi2.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_mingshijiangtanbeishi2.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/mingshijiangtanbeishi2.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_mingshijiangtanbeishi2.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1179",
                "name": "看师姐是如何考上北大的",
                "size": "12.83",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/kanshijieshi.mp3",
                "hours": "840",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/kanshijieshi.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_kanshijieshi.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/kanshijieshi.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_kanshijieshi.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "2623",
                "name": "在高中阶段如何珍藏一段感情",
                "size": "8.33",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi290160311.mp3",
                "hours": "728",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/mingshi290160311.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_mingshi290160311.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/mingshi290160311.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_mingshi290160311.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1178",
                "name": "这样做语文从90变120+",
                "size": "8.1",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/yuwen.mp3",
                "hours": "708",
                "rank": "100",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/yuwen.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_yuwen.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/yuwen.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_yuwen.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1180",
                "name": "理科男英语140+的高分秘籍",
                "size": "8.09",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/likenanyingyu.mp3",
                "hours": "707",
                "rank": "120",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/likenanyingyu.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_likenanyingyu.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/likenanyingyu.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_likenanyingyu.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1851",
                "name": "葛军门徒教你数学复习法",
                "size": "12.68",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/1204mingshijiangtan.mp3",
                "hours": "664",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/1204mingshijiangtan.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_1204mingshijiangtan.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/1204mingshijiangtan.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_1204mingshijiangtan.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1855",
                "name": "我是这样从班级倒数到年级前10的",
                "size": "9.65",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/1225mingshijiangtan.mp3",
                "hours": "632",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/1225mingshijiangtan.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_1225mingshijiangtan.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/1225mingshijiangtan.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_1225mingshijiangtan.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1181",
                "name": "文综250+的学霸经",
                "size": "9.72",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/wenzong250.mp3",
                "hours": "849",
                "rank": "200",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/wenzong250.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_wenzong250.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/wenzong250.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_wenzong250.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1418",
                "name": "物化生想拿90分？赶紧收听高分技能！",
                "size": "9.01",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/lisonggaofen.mp3",
                "hours": "786",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/lisonggaofen.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_lisonggaofen.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/lisonggaofen.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_lisonggaofen.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "1513",
                "name": "在浙大读书是一种怎样的体验",
                "size": "11.32",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/zheda.mp3",
                "hours": "741",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/zheda.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_zheda.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/zheda.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_zheda.mp3"
                ],
                "album_id": "90",
                "album_name": "学霸の提分技能",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            }
        ],
        "tryAudio": null,
        "album": {
            "id": "90",
            "name": "学霸の提分技能",
            "description": "学霸独家学习心得大揭秘！",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\">学霸独家学习心得大揭秘！</p>",
            "intro_title": "介绍",
            "latest": "650分学霸教你克服高三不适症",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xuebadujiatifen.jpg",
            "praise": "1987",
            "play": "59588",
            "rank": "5",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "0",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "0",
            "is_allowbatch": 0,
            "goods": null,
            "anchor": null,
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 13,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 6) {//原创资料
			$str = '{
    "resultCode": "0000",
    "response": {
        "material": {
            "id": "8",
            "name": "蜜蜂数学课内部独家PPT（必修五）",
            "avatar": "https://sstore.fengbee.cn/goods/avatar/数学ppt5.jpg",
            "avatar_new": "https://sstore.fengbee.cn/goods/avatar/1500523821_167190.jpg",
            "description": "蜜蜂数学课内部独家PPT（必修五）",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><div class=\"is_set\" style=\"font-size:16px;font-family:宋体;line-height:1.5;\"><p><img src=\"http://qicow.fengbee.cn/@/avatar/avatar_0_1500532913.jpg\" alt=\"蜜蜂数学（必修五）商品详情图1\" style=\"max-width:100%;\"><img src=\"http://qicow.fengbee.cn/@/avatar/avatar_0_1500532917.jpg\" alt=\"蜜蜂数学（必修五）商品详情图2\" style=\"max-width: 100%;\"><img src=\"http://qicow.fengbee.cn/@/avatar/avatar_0_1500532920.jpg\" alt=\"蜜蜂数学（必修五）商品详情图3\" style=\"max-width: 100%;\"><img src=\"http://qicow.fengbee.cn/@/avatar/avatar_0_1500532923.jpg\" alt=\"蜜蜂数学（必修五）商品详情图4\" style=\"max-width: 100%;\"><img src=\"http://qicow.fengbee.cn/@/avatar/avatar_0_1500532929.jpg\" alt=\"蜜蜂数学（必修五）商品详情图5\" style=\"max-width: 100%;\"><img src=\"http://qicow.fengbee.cn/@/avatar/avatar_0_1500532933.jpg\" alt=\"蜜蜂数学（必修五）商品详情图6\" style=\"max-width: 100%;\"><img src=\"http://qicow.fengbee.cn/@/avatar/avatar_0_1500532939.jpg\" alt=\"蜜蜂数学（必修五）商品详情图7\" style=\"max-width: 100%;\"></p></div><p><br></p>",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "create_time": "2017-07-20 14:43:51",
            "type": "0",
            "num_iid": "310050334",
            "is_paid": 0,
            "price": "19.90",
            "youzan_url": "https://h5.koudaitong.com/v2/goods/3no0nc5e1ncax?ps=360",
            "goods_description": "原创资料需购买解锁，仅需19.9元",
            "store_url": "https://wx.fengbee.cn/store_goodsdetail.html?gid=310050334",
            "is_invite": 0,
            "is_invite3": 0,
            "is_discount": 0
        },
        "detaillist": [
            {
                "id": "394",
                "detail_name": "5.1.01-正弦定理解三角形",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.1.01-正弦定理解三角形.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.1.01-正弦定理解三角形.pdf",
                "album_id": "0",
                "rank": "10",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "395",
                "detail_name": "5.1.02-余弦定理的应用",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.1.02-余弦定理的应用.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.1.02-余弦定理的应用.pdf",
                "album_id": "0",
                "rank": "20",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "396",
                "detail_name": "5.1.03-解三角形之边角互换",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.1.03-解三角形之边角互换.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.1.03-解三角形之边角互换.pdf",
                "album_id": "0",
                "rank": "30",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "397",
                "detail_name": "5.1.04-正余弦定理求三角形面积",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.1.04-正余弦定理求三角形面积.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.1.04-正余弦定理求三角形面积.pdf",
                "album_id": "0",
                "rank": "40",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "398",
                "detail_name": "5.1.05-用余弦定理判断三角形形状",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.1.05-用余弦定理判断三角形形状.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.1.05-用余弦定理判断三角形形状.pdf",
                "album_id": "0",
                "rank": "50",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "399",
                "detail_name": "5.2.01-猜想数列的通项",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.01-猜想数列的通项.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.01-猜想数列的通项.pdf",
                "album_id": "0",
                "rank": "60",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "400",
                "detail_name": "5.2.02-定义法证明等差数列",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.02-定义法证明等差数列.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.02-定义法证明等差数列.pdf",
                "album_id": "0",
                "rank": "70",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "401",
                "detail_name": "5.2.03-等差数列的恒等性",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.03-等差数列的恒等性.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.03-等差数列的恒等性.pdf",
                "album_id": "0",
                "rank": "80",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "402",
                "detail_name": "5.2.04-等差数列的等分性",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.04-等差数列的等分性.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.04-等差数列的等分性.pdf",
                "album_id": "0",
                "rank": "90",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "403",
                "detail_name": "5.2.05-等差数列性质",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.05-等差数列性质.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.05-等差数列性质.pdf",
                "album_id": "0",
                "rank": "100",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "404",
                "detail_name": "5.2.06-等差数列Sn的最值问题",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.06-等差数列Sn的最值问题.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.06-等差数列Sn的最值问题.pdf",
                "album_id": "0",
                "rank": "110",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "405",
                "detail_name": "5.2.07-定义法判断等比数列",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.07-定义法判断等比数列.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.07-定义法判断等比数列.pdf",
                "album_id": "0",
                "rank": "120",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "406",
                "detail_name": "5.2.08-等比数列的恒等性",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.08-等比数列的恒等性.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.08-等比数列的恒等性.pdf",
                "album_id": "0",
                "rank": "130",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "407",
                "detail_name": "5.2.09-等比数列等分性质",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.09-等比数列等分性质.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.09-等比数列等分性质.pdf",
                "album_id": "0",
                "rank": "140",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "408",
                "detail_name": "5.2.10-等比数列前n项和",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.10-等比数列前n项和.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.10-等比数列前n项和.pdf",
                "album_id": "0",
                "rank": "150",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "409",
                "detail_name": "5.2.11-公式法数列求通项",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.11-公式法数列求通项.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.11-公式法数列求通项.pdf",
                "album_id": "0",
                "rank": "160",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "410",
                "detail_name": "5.2.12-累加法求数列的通项",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.12-累加法求数列的通项.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.12-累加法求数列的通项.pdf",
                "album_id": "0",
                "rank": "170",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "411",
                "detail_name": "5.2.13-叠乘法求通项",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.13-叠乘法求通项.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.13-叠乘法求通项.pdf",
                "album_id": "0",
                "rank": "180",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "412",
                "detail_name": "5.2.14-构造法求通项1",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.14-构造法求通项1.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.14-构造法求通项1.pdf",
                "album_id": "0",
                "rank": "190",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "413",
                "detail_name": "5.2.15-构造法求通项2",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.15-构造法求通项2.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.15-构造法求通项2.pdf",
                "album_id": "0",
                "rank": "200",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "414",
                "detail_name": "5.2.16-构造法求通项3",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.16-构造法求通项3.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.16-构造法求通项3.pdf",
                "album_id": "0",
                "rank": "210",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "415",
                "detail_name": "5.2.17-分组求和法",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.17-分组求和法.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.17-分组求和法.pdf",
                "album_id": "0",
                "rank": "220",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "416",
                "detail_name": "5.2.18-错位相减求数列前n项和",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.18-错位相减求数列前n项和.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.18-错位相减求数列前n项和.pdf",
                "album_id": "0",
                "rank": "230",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "417",
                "detail_name": "5.2.19-数列求和之裂项相消法",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.19-数列求和之裂项相消法.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.19-数列求和之裂项相消法.pdf",
                "album_id": "0",
                "rank": "240",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "418",
                "detail_name": "5.2.20-无理数分式求和",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.2.20-无理数分式求和.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.2.20-无理数分式求和.pdf",
                "album_id": "0",
                "rank": "250",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "419",
                "detail_name": "5.3.01-二次不等式与二次函数的关系",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.01-二次不等式与二次函数的关系.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.01-二次不等式与二次函数的关系.pdf",
                "album_id": "0",
                "rank": "260",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "420",
                "detail_name": "5.3.02-解分式不等式",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.02-解分式不等式.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.02-解分式不等式.pdf",
                "album_id": "0",
                "rank": "270",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "421",
                "detail_name": "5.3.03-含参不等式的解法",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.03-含参不等式的解法.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.03-含参不等式的解法.pdf",
                "album_id": "0",
                "rank": "280",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "422",
                "detail_name": "5.3.04-一元二次不等式恒成立探究",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.04-一元二次不等式恒成立探究.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.04-一元二次不等式恒成立探究.pdf",
                "album_id": "0",
                "rank": "290",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "423",
                "detail_name": "5.3.05-线性规划（二元一次整式）求最值",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.05-线性规划（二元一次整式）求最值.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.05-线性规划（二元一次整式）求最值.pdf",
                "album_id": "0",
                "rank": "300",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "424",
                "detail_name": "5.3.06-线性规划（分式形式）求最值",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.06-线性规划（分式形式）求最值.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.06-线性规划（分式形式）求最值.pdf",
                "album_id": "0",
                "rank": "310",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "425",
                "detail_name": "5.3.07-线性规划（二元二次型）求最小值",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.07-线性规划（二元二次型）求最小值.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.07-线性规划（二元二次型）求最小值.pdf",
                "album_id": "0",
                "rank": "320",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "426",
                "detail_name": "5.3.08-线性规划（二元二次型）求最大值",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.08-线性规划（二元二次型）求最大值.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.08-线性规划（二元二次型）求最大值.pdf",
                "album_id": "0",
                "rank": "330",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "427",
                "detail_name": "5.3.09-桃园不等式",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.09-桃园不等式.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.09-桃园不等式.pdf",
                "album_id": "0",
                "rank": "340",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "428",
                "detail_name": "5.3.10-基本不等式求最值",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.10-基本不等式求最值.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.10-基本不等式求最值.pdf",
                "album_id": "0",
                "rank": "350",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "429",
                "detail_name": "5.3.11-乘1法求最值",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.3.11-乘1法求最值.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.3.11-乘1法求最值.pdf",
                "album_id": "0",
                "rank": "360",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "430",
                "detail_name": "5.4.01-期末考复习精华1——三角函数",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.4.01-期末考复习精华1——三角函数.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.4.01-期末考复习精华1——三角函数.pdf",
                "album_id": "0",
                "rank": "370",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "431",
                "detail_name": "5.4.02-期末考复习精华2——解三角形篇",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.4.02-期末考复习精华2——解三角形篇.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.4.02-期末考复习精华2——解三角形篇.pdf",
                "album_id": "0",
                "rank": "380",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "432",
                "detail_name": "5.4.03-期末考复习精华3——向量篇",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.4.03-期末考复习精华3——向量篇.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.4.03-期末考复习精华3——向量篇.pdf",
                "album_id": "0",
                "rank": "390",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "433",
                "detail_name": "5.4.04-期末考复习精华4——数列求通项篇",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.4.04-期末考复习精华4——数列求通项篇.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.4.04-期末考复习精华4——数列求通项篇.pdf",
                "album_id": "0",
                "rank": "400",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            },
            {
                "id": "434",
                "detail_name": "5.4.05-期末考复习精华5——数列求和篇",
                "detail_avatar": "https://sstore.fengbee.cn/goods/avatar/ppt_icon.png",
                "url": "https://sstore.fengbee.cn/goods/310050334/content/5.4.05-期末考复习精华5——数列求和篇.pdf",
                "url2": "http://qicow.fengbee.cn/@/upload/goods/310050334/5.4.05-期末考复习精华5——数列求和篇.pdf",
                "album_id": "0",
                "rank": "410",
                "create_time": "2016-11-02 16:30:24",
                "ext": "pdf"
            }
        ]
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 7) {//校园故事,晚安心情
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "8361",
                "name": "姑娘，这年头谁还没点故事",
                "size": "6.3",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0713nxsggushi.mp3",
                "hours": "549",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0713nxsggushi.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_0713nxsggushi.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/0713nxsggushi.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_0713nxsggushi.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8299",
                "name": "谁说青梅不爱竹马",
                "size": "5.43",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0705nxsgguanyanyan.mp3",
                "hours": "473",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0705nxsgguanyanyan.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_0705nxsgguanyanyan.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/0705nxsgguanyanyan.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_0705nxsgguanyanyan.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8268",
                "name": "你在我途中",
                "size": "10.97",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnizaiwotuzhong0628.mp3",
                "hours": "957",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnizaiwotuzhong0628.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnizaiwotuzhong0628.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnizaiwotuzhong0628.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnizaiwotuzhong0628.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8239",
                "name": "我没有下个十年再给你",
                "size": "11.96",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0621nxsgshinian.mp3",
                "hours": "1044",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0621nxsgshinian.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_0621nxsgshinian.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/0621nxsgshinian.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_0621nxsgshinian.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8220",
                "name": "他有才华，所以就一直喜欢他？",
                "size": "8",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtayoucaihua0614.mp3",
                "hours": "697",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtayoucaihua0614.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgtayoucaihua0614.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtayoucaihua0614.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgtayoucaihua0614.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8166",
                "name": "谢谢你曾与我同行",
                "size": "10.27",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtongxing0606.mp3",
                "hours": "896",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtongxing0606.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgtongxing0606.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtongxing0606.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgtongxing0606.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8122",
                "name": "爱情是自己挣得的，不是别人施舍的",
                "size": "11.93",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzijizheng0601.mp3",
                "hours": "1041",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzijizheng0601.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgzijizheng0601.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzijizheng0601.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgzijizheng0601.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8082",
                "name": "你是我的白衣少年",
                "size": "9.21",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgbaiyishaonian0524.mp3",
                "hours": "803",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgbaiyishaonian0524.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgbaiyishaonian0524.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgbaiyishaonian0524.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgbaiyishaonian0524.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7870",
                "name": "我不喜欢你，但我不会讨厌你",
                "size": "6.15",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwobuxihuanni0504.mp3",
                "hours": "536",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwobuxihuanni0504.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgwobuxihuanni0504.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwobuxihuanni0504.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgwobuxihuanni0504.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7708",
                "name": "我在图书馆等你",
                "size": "5.46",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwozaitushuguan0408.mp3",
                "hours": "476",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwozaitushuguan0408.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgwozaitushuguan0408.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwozaitushuguan0408.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgwozaitushuguan0408.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7710",
                "name": "你，还好么？",
                "size": "6.83",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshaonian0406.mp3",
                "hours": "596",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshaonian0406.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshaonian0406.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshaonian0406.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshaonian0406.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7826",
                "name": "你赠我运气，我赠你欢喜",
                "size": "6.61",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsg0427nizengwoyunqi.mp3",
                "hours": "576",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsg0427nizengwoyunqi.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsg0427nizengwoyunqi.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsg0427nizengwoyunqi.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsg0427nizengwoyunqi.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7709",
                "name": "皎皎喜欢鹿野，从12岁开始",
                "size": "10.42",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgjiaojiao0406.mp3",
                "hours": "909",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgjiaojiao0406.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgjiaojiao0406.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgjiaojiao0406.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgjiaojiao0406.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7566",
                "name": "沈同学，你好",
                "size": "9.63",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshentongxue0327.mp3",
                "hours": "840",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshentongxue0327.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshentongxue0327.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshentongxue0327.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshentongxue0327.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7567",
                "name": "今天，听我讲个故事吧",
                "size": "6.33",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgjianggefushi0327.mp3",
                "hours": "552",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgjianggefushi0327.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgjianggefushi0327.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgjianggefushi0327.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgjianggefushi0327.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7526",
                "name": "把聊天置顶，把你放在心里",
                "size": "5.78",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzhidingliaotian0323.mp3",
                "hours": "503",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzhidingliaotian0323.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgzhidingliaotian0323.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzhidingliaotian0323.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgzhidingliaotian0323.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7568",
                "name": "45°的暗恋，憋了整个青春",
                "size": "7.44",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0330nxsg45duanlian.mp3",
                "hours": "649",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/0330nxsg45duanlian.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_0330nxsg45duanlian.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/0330nxsg45duanlian.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_0330nxsg45duanlian.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7205",
                "name": "那个陪你吃面的男生，不是男神。",
                "size": "8.78",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnagepeinichi0302.mp3",
                "hours": "766",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnagepeinichi0302.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnagepeinichi0302.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnagepeinichi0302.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnagepeinichi0302.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "7204",
                "name": "对不起，我辜负了你",
                "size": "7.03",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgduibuqi0302.mp3",
                "hours": "613",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgduibuqi0302.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgduibuqi0302.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgduibuqi0302.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgduibuqi0302.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "6466",
                "name": "听听我说，好吗？",
                "size": "9.91",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgnizheyang0204.mp3",
                "hours": "648",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgnizheyang0204.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgnizheyang0204.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgnizheyang0204.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgnizheyang0204.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "6465",
                "name": "谢谢你不让我熬夜",
                "size": "8.31",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgbiezaiaoye0204.mp3",
                "hours": "543",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgbiezaiaoye0204.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgbiezaiaoye0204.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgbiezaiaoye0204.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgbiezaiaoye0204.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "6464",
                "name": "命中注定我爱你",
                "size": "8.58",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgmingzhongzhuding0204.mp3",
                "hours": "561",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgmingzhongzhuding0204.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgmingzhongzhuding0204.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgmingzhongzhuding0204.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgmingzhongzhuding0204.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "6371",
                "name": "爱情的样子有千百种，我想要的你都有",
                "size": "10.34",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgaiqingde0120.mp3",
                "hours": "676",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgaiqingde0120.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgaiqingde0120.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgaiqingde0120.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgaiqingde0120.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "6369",
                "name": "你追星吗？我追呀",
                "size": "13.13",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgnizhuixingi0120.mp3",
                "hours": "859",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgnizhuixingi0120.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgnizhuixingi0120.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgnizhuixingi0120.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgnizhuixingi0120.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "6370",
                "name": "大年初一的女孩子总是最好看的",
                "size": "11.45",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgdanianchuyi0120.mp3",
                "hours": "749",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgdanianchuyi0120.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgdanianchuyi0120.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/1nxsgdanianchuyi0120.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_1nxsgdanianchuyi0120.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5842",
                "name": "只要喜欢着，就会很快乐",
                "size": "9.75",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzhiyaoxihuanzhe1227.mp3",
                "hours": "638",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzhiyaoxihuanzhe1227.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgzhiyaoxihuanzhe1227.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgzhiyaoxihuanzhe1227.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgzhiyaoxihuanzhe1227.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5841",
                "name": "我喜欢你，但我也得要脸啊",
                "size": "9.07",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/0114naxieshiguang.mp3",
                "hours": "592",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/0114naxieshiguang.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_0114naxieshiguang.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/0114naxieshiguang.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_0114naxieshiguang.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5745",
                "name": "我人生中最好的十七岁",
                "size": "6.88",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgworenshengzhong1221.mp3",
                "hours": "450",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgworenshengzhong1221.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgworenshengzhong1221.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgworenshengzhong1221.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgworenshengzhong1221.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5698",
                "name": "那些都是我对你说不出口的喜欢",
                "size": "8.84",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnaxiedoushiwoi1208.mp3",
                "hours": "578",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnaxiedoushiwoi1208.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnaxiedoushiwoi1208.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnaxiedoushiwoi1208.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnaxiedoushiwoi1208.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5697",
                "name": "跟你在一起后，我从未羡慕过其他人",
                "size": "9.37",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsggennizaiyiqi1208.mp3",
                "hours": "613",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsggennizaiyiqi1208.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsggennizaiyiqi1208.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsggennizaiyiqi1208.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsggennizaiyiqi1208.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5642",
                "name": "要不是因为爱你，我才懒得自卑",
                "size": "8.23",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgyaobushiyinwei1127.mp3",
                "hours": "538",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgyaobushiyinwei1127.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgyaobushiyinwei1127.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgyaobushiyinwei1127.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgyaobushiyinwei1127.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5641",
                "name": "喜欢我就快来追我呀",
                "size": "9.6",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgxihuanwo1127.mp3",
                "hours": "628",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgxihuanwo1127.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgxihuanwo1127.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgxihuanwo1127.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgxihuanwo1127.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5516",
                "name": "我很好奇，你们都是怎么分手的？",
                "size": "12.37",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwohenhaoqi1118.mp3",
                "hours": "810",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwohenhaoqi1118.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgwohenhaoqi1118.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgwohenhaoqi1118.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgwohenhaoqi1118.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4865",
                "name": "世界那么大，不如你身边",
                "size": "12.51",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshijienameda1117.mp3",
                "hours": "819",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshijienameda1117.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshijienameda1117.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshijienameda1117.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshijienameda1117.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "5357",
                "name": "他们从青春走来，一直到老",
                "size": "12.04",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtamencong1115.mp3",
                "hours": "788",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtamencong1115.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgtamencong1115.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgtamencong1115.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgtamencong1115.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4864",
                "name": "青春年少，多的是人来爱",
                "size": "8.79",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgqingchunnianshao1107.mp3",
                "hours": "575",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgqingchunnianshao1107.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgqingchunnianshao1107.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgqingchunnianshao1107.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgqingchunnianshao1107.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4640",
                "name": "漂亮的你仍需努力",
                "size": "9.14",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgpiaoliangdeni1023.mp3",
                "hours": "598",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgpiaoliangdeni1023.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgpiaoliangdeni1023.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgpiaoliangdeni1023.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgpiaoliangdeni1023.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4639",
                "name": "你会追喜欢的人多久",
                "size": "14.48",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnihuizhui1022.mp3",
                "hours": "948",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnihuizhui1022.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnihuizhui1022.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnihuizhui1022.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnihuizhui1022.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4440",
                "name": "谁说青梅竹马就一定要在一起？",
                "size": "14.68",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshuishuoqingmeizhuma1012.mp3",
                "hours": "961",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshuishuoqingmeizhuma1012.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshuishuoqingmeizhuma1012.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgshuishuoqingmeizhuma1012.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgshuishuoqingmeizhuma1012.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4441",
                "name": "我很喜欢你，但是，只能到这里",
                "size": "4.41",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/naxieshiguang10142.mp3",
                "hours": "288",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/naxieshiguang10142.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_naxieshiguang10142.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/naxieshiguang10142.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_naxieshiguang10142.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4438",
                "name": "你是我的青梅，我不是你的竹马",
                "size": "9.07",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgnishiwodeqingmei0929.mp3",
                "hours": "792",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgnishiwodeqingmei0929.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgnishiwodeqingmei0929.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgnishiwodeqingmei0929.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgnishiwodeqingmei0929.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4425",
                "name": "你来过一阵子，我却怀念一辈子",
                "size": "15.09",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnilaiguoyizhenzi0920.mp3",
                "hours": "659",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnilaiguoyizhenzi0920.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnilaiguoyizhenzi0920.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgnilaiguoyizhenzi0920.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgnilaiguoyizhenzi0920.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "4380",
                "name": "暗恋是一种礼貌",
                "size": "10.43",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgalsyz09132.mp3",
                "hours": "455",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgalsyz09132.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgalsyz09132.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxsgalsyz09132.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxsgalsyz09132.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3790",
                "name": "我有酒，你有花生米么",
                "size": "11.11",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxhuashengmi0909.mp3",
                "hours": "485",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/tcid1037/nxhuashengmi0909.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_tcid1037_nxhuashengmi0909.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/tcid1037/nxhuashengmi0909.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_tcid1037_nxhuashengmi0909.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3791",
                "name": "那些她偷偷仰望他的时光里",
                "size": "6.37",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgyxgs.mp3",
                "hours": "417",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgyxgs.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgyxgs.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgyxgs.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgyxgs.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3789",
                "name": "时光不与秋千老",
                "size": "13.27",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgsgbyqql.mp3",
                "hours": "869",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgsgbyqql.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgsgbyqql.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgsgbyqql.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgsgbyqql.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3788",
                "name": "我也想要牵牵手就能永久",
                "size": "9.3",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwyxy.mp3",
                "hours": "608",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwyxy.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgwyxy.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgwyxy.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgwyxy.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3787",
                "name": "我只是你故事里的配角",
                "size": "12",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwsndlpy.mp3",
                "hours": "786",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwsndlpy.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgwsndlpy.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgwsndlpy.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgwsndlpy.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3500",
                "name": "对不起，我好像有点喜欢你",
                "size": "12.6",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgdbqwhx.mp3",
                "hours": "825",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgdbqwhx.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgdbqwhx.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgdbqwhx.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgdbqwhx.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3501",
                "name": "“你是年少的欢喜，倒过来念。”",
                "size": "7.24",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgnsnsdhx.mp3",
                "hours": "473",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgnsnsdhx.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgnsnsdhx.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgnsnsdhx.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgnsnsdhx.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3499",
                "name": "没关系，他只是不喜欢你而已呀",
                "size": "12.15",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgmgxtzsbxh.mp3",
                "hours": "795",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgmgxtzsbxh.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgmgxtzsbxh.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgmgxtzsbxh.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgmgxtzsbxh.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3498",
                "name": "其实我也暗恋你整个学生时代",
                "size": "13.4",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgqswyal.mp3",
                "hours": "877",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgqswyal.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgqswyal.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgqswyal.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgqswyal.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3468",
                "name": "没想到，他把我的假装不爱当真了",
                "size": "11.99",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgmxdtbwdjz.mp3",
                "hours": "784",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgmxdtbwdjz.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgmxdtbwdjz.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgmxdtbwdjz.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgmxdtbwdjz.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3467",
                "name": "毕业了，我也喜欢你",
                "size": "11.38",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgbylwyxhn.mp3",
                "hours": "745",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgbylwyxhn.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgbylwyxhn.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgbylwyxhn.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgbylwyxhn.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3414",
                "name": "谢谢你长得这么帅还喜欢我",
                "size": "11.22",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgxxnzdn.mp3",
                "hours": "734",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgxxnzdn.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgxxnzdn.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgxxnzdn.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgxxnzdn.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3413",
                "name": "这个故事没有结局",
                "size": "7.93",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgzggsmyjj.mp3",
                "hours": "518",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgzggsmyjj.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgzggsmyjj.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgzggsmyjj.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgzggsmyjj.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3377",
                "name": "喜欢一个人，他就会发光",
                "size": "8.44",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgxhygr.mp3",
                "hours": "552",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgxhygr.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgxhygr.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgxhygr.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgxhygr.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3376",
                "name": "再见，我梦中的那位少年",
                "size": "11.68",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgzjwmz.mp3",
                "hours": "764",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgzjwmz.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgzjwmz.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgzjwmz.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgzjwmz.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3345",
                "name": "可是，我们分手了",
                "size": "9.61",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgkswmfsl.mp3",
                "hours": "629",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgkswmfsl.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgkswmfsl.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgkswmfsl.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgkswmfsl.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3344",
                "name": "我以朋友的名义喜欢一个人好多年",
                "size": "11.29",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwypydmy.mp3",
                "hours": "739",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwypydmy.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgwypydmy.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgwypydmy.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgwypydmy.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3315",
                "name": "等待那个愿意与你双修的人",
                "size": "10.18",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgddngyy.mp3",
                "hours": "666",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgddngyy.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgddngyy.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgddngyy.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgddngyy.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3291",
                "name": "我曾经认识这样一个人",
                "size": "11.44",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwcjrszmygr.mp3",
                "hours": "749",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwcjrszmygr.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgwcjrszmygr.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgwcjrszmygr.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgwcjrszmygr.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3288",
                "name": "喜欢你这句话，我憋了一整个青春",
                "size": "6.06",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgxhnzjh.mp3",
                "hours": "396",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgxhnzjh.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgxhnzjh.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgxhnzjh.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgxhnzjh.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3287",
                "name": "我喜欢的人刚好不喜欢我",
                "size": "11.52",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwxhdrgh.mp3",
                "hours": "754",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/nxsgwxhdrgh.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_nxsgwxhdrgh.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/nxsgwxhdrgh.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_nxsgwxhdrgh.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3246",
                "name": "抱歉，我不会一直追你",
                "size": "8.38",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/qcbaoqian2.mp3",
                "hours": "731",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/qcbaoqian2.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_qcbaoqian2.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/qcbaoqian2.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_qcbaoqian2.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "3247",
                "name": "情感专家这种病，谈场恋爱就好了",
                "size": "6.63",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/qcqinggan2.mp3",
                "hours": "434",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/qcqinggan2.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_qcqinggan2.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/qcqinggan2.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_qcqinggan2.mp3"
                ],
                "album_id": "274",
                "album_name": "那些时光",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            }
        ],
        "tryAudio": null,
        "album": {
            "id": "274",
            "name": "那些时光",
            "description": "耳朵里的那些心跳回忆，逢周六更新。",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><div class=\"is_set\" style=\"font-size:16px;font-family:宋体;line-height:1.5;\"><p style=\"margin: 0px; padding: 0px; box-sizing: border-box;\"><font color=\"#808080\">耳朵里的那些心跳回忆，逢周六更新。</font></p><p><br></p></div>",
            "intro_title": "介绍",
            "latest": "姑娘，这年头谁还没点故事",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/nxsg.jpg",
            "praise": "28732",
            "play": "76213",
            "rank": "1000",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "0",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "0",
            "is_allowbatch": 0,
            "goods": null,
            "anchor": null,
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 66,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 8) {//音乐合集
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "8106",
                "name": "夏意正浓音乐1",
                "size": "8.35",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong1.mp3",
                "hours": "209",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong1.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong1.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong1.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong1.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8107",
                "name": "夏意正浓音乐2",
                "size": "7.24",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong2.mp3",
                "hours": "167",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong2.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong2.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong2.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong2.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8111",
                "name": "夏意正浓音乐3",
                "size": "4.82",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong3.mp3",
                "hours": "304",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong3.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong3.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong3.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong3.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8108",
                "name": "夏意正浓音乐4",
                "size": "3.34",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong4.mp3",
                "hours": "196",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong4.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong4.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong4.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong4.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8110",
                "name": "夏意正浓音乐5",
                "size": "2.85",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong5.mp3",
                "hours": "183",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong5.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong5.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong5.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong5.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8112",
                "name": "夏意正浓音乐6",
                "size": "3.25",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong6.mp3",
                "hours": "211",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong6.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong6.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong6.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong6.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8109",
                "name": "夏意正浓音乐7",
                "size": "2.82",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong7.mp3",
                "hours": "173",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong7.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong7.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong7.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong7.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8113",
                "name": "夏意正浓音乐8",
                "size": "5.21",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong8.mp3",
                "hours": "278",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong8.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong8.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km/xiayizhengnong8.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km_xiayizhengnong8.mp3"
                ],
                "album_id": "469",
                "album_name": "夏意正浓音乐合集",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            }
        ],
        "tryAudio": null,
        "album": {
            "id": "469",
            "name": "夏意正浓音乐合集",
            "description": "夏天，这些音乐最能搭配你的心情。",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><div class=\"is_set\" style=\"font-size:16px;font-family:宋体;line-height:1.5;\"><p><font color=\"#808080\">夏冰镇西瓜、</font></p><p><font color=\"#808080\">橘子汽水、</font></p><p><font color=\"#808080\">冰淇淋、</font></p><p><font color=\"#808080\">夹脚拖鞋、还有那刺眼的阳光，夏天的风！</font></p><p><font color=\"#808080\">一切都这么美好，原来都是因为，在听这首歌的时候，旁边是你…</font></p><p><br></p></div><p><br></p>",
            "intro_title": "介绍",
            "latest": "夏意正浓音乐1",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/xyznyyhj.jpg",
            "praise": "0",
            "play": "0",
            "rank": "1000",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "0",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "0",
            "is_allowbatch": 0,
            "goods": null,
            "anchor": null,
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 8,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}elseif ($audio_id == 10) {//英语听力
			$str = '{
    "resultCode": "0000",
    "response": {
        "pageSize": "99",
        "pageNumber": "1",
        "list": [
            {
                "id": "8225",
                "name": "2017年新课标I卷听力（第一节）",
                "size": "2.02",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao1juan1jie1.mp3",
                "hours": "175",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao1juan1jie1.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao1juan1jie1.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao1juan1jie1.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao1juan1jie1.mp3"
                ],
                "album_id": "477",
                "album_name": "2017年全国高考听力",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8226",
                "name": "2017年新课标I卷听力（第二节）",
                "size": "9.72",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao1juan2jie.mp3",
                "hours": "848",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao1juan2jie.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao1juan2jie.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao1juan2jie.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao1juan2jie.mp3"
                ],
                "album_id": "477",
                "album_name": "2017年全国高考听力",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8227",
                "name": "2017年新课标Ⅱ卷听力（第一节）",
                "size": "2.17",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao2juan1jie1.mp3",
                "hours": "187",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao2juan1jie1.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao2juan1jie1.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao2juan1jie1.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao2juan1jie1.mp3"
                ],
                "album_id": "477",
                "album_name": "2017年全国高考听力",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8228",
                "name": "2017年新课标Ⅱ卷听力（第二节）",
                "size": "9.81",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao2juan2jie.mp3",
                "hours": "855",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao2juan2jie.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao2juan2jie.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao2juan2jie.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao2juan2jie.mp3"
                ],
                "album_id": "477",
                "album_name": "2017年全国高考听力",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8229",
                "name": "2017年新课标Ⅲ卷听力（第一节）",
                "size": "2.34",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao3juan1jie12.mp3",
                "hours": "202",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao3juan1jie12.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao3juan1jie12.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao3juan1jie12.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao3juan1jie12.mp3"
                ],
                "album_id": "477",
                "album_name": "2017年全国高考听力",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            },
            {
                "id": "8230",
                "name": "2017年新课标Ⅲ卷听力（第二节）",
                "size": "9.86",
                "url": "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao3juan2jie.mp3",
                "hours": "859",
                "rank": "1",
                "urls": [
                    "http://qicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao3juan2jie.mp3",
                    "http://mp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao3juan2jie.mp3"
                ],
                "urlsHttps": [
                    "https://sqicow.fengbee.cn/@/upload/mp3/km0/2017yingyukebiao3juan2jie.mp3",
                    "https://smp3.fengbee.cn/@_upload_mp3_km0_2017yingyukebiao3juan2jie.mp3"
                ],
                "album_id": "477",
                "album_name": "2017年全国高考听力",
                "album_avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
                "is_try": "0",
                "is_rechargeable": "0",
                "anchor_id": -1
            }
        ],
        "tryAudio": null,
        "album": {
            "id": "477",
            "name": "2017年全国高考听力",
            "description": "最新出炉2017年高考英语听力",
            "intro": " <link rel=\"stylesheet\" href=\"https://wx.fengbee.cn/style/forAPP/AlbumIntros.css\"><div class=\"is_set\" style=\"font-size:16px;font-family:宋体;line-height:1.5;\"><p>最新出炉！！！</p><p>2017年高考英语听力试题！！</p><p>附听力原文及答案！！</p><p>赶紧来训练一下啦！！</p></div>",
            "intro_title": "介绍",
            "latest": "2017年新课标I卷听力（第一节）",
            "avatar": "https://simg.fengbee.cn/upload/zjAvatar/2017qggkyytlzt.jpg",
            "praise": "0",
            "play": "0",
            "rank": "1000",
            "status": "1",
            "flag": "0",
            "flagpic": "",
            "is_rechargeable": "0",
            "is_paid": 0,
            "is_invite": 0,
            "is_batch": "0",
            "is_allowbatch": 0,
            "goods": null,
            "anchor": null,
            "is_subscribe": 0,
            "is_discount": 0
        },
        "totalRow": 6,
        "totalPage": 1
    },
    "msg": "成功"
}';
		}
	}
	echo "$str";
?>