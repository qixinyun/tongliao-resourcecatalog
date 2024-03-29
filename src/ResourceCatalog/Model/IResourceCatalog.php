<?php

namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'MZSHTTHMBFQYDW' => 1,
        'QYJBXX' => 2,
        'QYYCMLXX' => 3,
        'SXQYHMD' => 4,
        'DYZGXX' => 5,
        'QYGDZCTZXMHZHBA' => 6,
        'ZFCGDLJGXX' => 7,
        'QYGSZXXX' => 8,
        'AJNSRXX' => 9,
        'QYDSXZCFXX' => 10,
        'YSCRJZJJJZGRDXX' => 11,
        'SFJDJGCYRYZGXX' => 12,
        'QXTCHJBHJDXX' => 13,
        'PXSTYXHDJXX' => 14,
        'HSZYZGZXX' => 15,
        'JGJCDXZJL' => 16,
        'JXSZLJDW' => 17,
        'ZLJCQYXX' => 18,
        'SLGCZBXX' => 19,
        'ESCJDPGJGHZZS' => 20,
        'PGJGXX' => 21,
        'DTJXJGRXX' => 22,
        'YXZZDWJBGXX' => 23,
        'SLYSXKZXX' => 24,
        'ZYJNZSXX' => 25,
        'QYRYXX' => 26,
        'SHZZNJXX' => 27,
        'YLBXXX' => 28,
        'TJDCDXML' => 29,
        'JDCWFXX' => 30,
        'GTGSHXX' => 31,
        'CMQYSBXX' => 32,
        'YPLSQYXX' => 33,
        'YZTQSBXXHMD' => 34,
        'JGRYXX' => 35,
        'SPYPTSJBJLGR' => 36,
        'SPYPTSJBJLDW' => 37,
        'JXMPCPXX' => 38,
        'JSZGXX' => 39,
        'SJYXXS' => 40,
        'SYBXXX' => 41,
        'SJJXMXX' => 42,
        'JYJGXINXI' => 43,
        'GRRYXXJYJ' => 44,
        'GRRYXXJTJ' => 45,
        'GRRYXXGDJ' => 46,
        'GRRYXXMZJ' => 47,
        'SBQYXX' => 48,
        'SFJDJGDJXX' => 49,
        'GZJGJBXX' => 50,
        'GZYXX' => 51,
        'JCFLFWSXX' => 52,
        'JCFLFWGZZJBXX' => 53,
        'LSSWSXX' => 54,
        'LSZYZGZXX' => 55,
        'GZRYXX' => 56,
        'YSZYZCHBGZC' => 57,
        'YSZYZGZXX' => 58,
        'WSHJHSYWYHJCXX' => 59,
        'YLHJSFWJGXX' => 60,
        'JBYFKZJGXX' => 61,
        'FYCRYJLXX' => 62,
        'WSZYJSZGKSWJXX' => 63,
        'QSWCXXXJDWBZ' => 64,
        'YZTQNMGGZHMD' => 65,
        'JGRYXXSWGXJ' => 66,
        'JGRYXXSJYJ' => 67,
        'JGRYXXSSFJ' => 68,
        'MBFQYML' => 69,
        'SHTTDJXX' => 70,
        'QYZXXX' => 71,
        'QYDXXX' => 72,
        'CCJCJGXX' => 73,
        'TZXMBLJGGSXX' => 74,
        'TZXMMCDMPPXX' => 75,
        'SFJDRXX' => 76,
        'SFJDJGXX' => 77,
        'LSZYXX' => 78,
        'LSNDPJXX' => 79,
        'LSSWSNDPJXX' => 80,
        'SAJLVJQ' => 81,
        'BWGXX' => 82,
        'WWSDXX' => 83,
        'WWSDGMXSJLSX' => 84,
        'QYSWJBDJXX' => 85,
        'NSXYDJPDXX' => 86,
        'QYQSGGXX' => 87,
        'FZCNSRXX' => 88,
        'LXSDJXX' => 89,
        'GRYCJJBAXX' => 90,
        'XZJLXXZRR' => 91,
        'XZJLXXFRHQTZZ' => 92,
        'XBXZCF' => 93,
        'XBXZXK' => 94,
        'SXBZXRXX' => 95,
        'ZDSSWFAJXX' => 96,
        'HXLDGXXX' => 97,
        'SCAQBLJLHMD' => 98,
        'YZSXWFQY' => 99,
        'HGSXQY' => 100,
        'HGGJRZ' => 101,
        'ZZQSGBZHSFGDMD' => 102,
        'ZZQCYBGCZLJMD' => 103,
        'ZZQYZYBGCMD' => 104,
        'CCJCJG' => 105,
        'BGJLXX' => 106,
        'CPWSXX' => 107,
        'DWTZXX' => 108,
        'GDXX' => 109,
        'GSXX' => 110,
        'KGGX' => 111,
        'KZQYXX' => 112,
        'QYNB' => 113,
        'SFAJXX' => 114,
        'SJKZR' => 115,
        'ZLXX' => 116,
        'ZYRY' => 117,
        'ZZZS' => 118,
        'ZHXYPJ' => 119,
        'JTYSB_GLGCJSLYSXDXQY' => 120,
        'JTYSB_SYGCJSLYSXDXQY' => 121,
        'TJSYZSXQY' => 122,
        'ZHIJIAN_CRJJYJYYZSXQYMD' => 123,
        'ZHIJIAN_YZZLSXQYMD' => 124,
        'YZWFYSSXDSRMD' => 125,
        'ZFCGBLXWJL' => 126,
        //@position_type_127
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['CCJCJG'],
        ),
        IUserGroup::ID['FGW'] => array(
            self::TYPE['TEST'],
            self::TYPE['ZFCGBLXWJL'],
            self::TYPE['YZWFYSSXDSRMD'],
            self::TYPE['ZHIJIAN_YZZLSXQYMD'],
            self::TYPE['ZHIJIAN_CRJJYJYYZSXQYMD'],
            self::TYPE['TJSYZSXQY'],
            self::TYPE['JTYSB_SYGCJSLYSXDXQY'],
            self::TYPE['JTYSB_GLGCJSLYSXDXQY'],
            self::TYPE['ZHXYPJ'],
            self::TYPE['ZZZS'],
            self::TYPE['ZYRY'],
            self::TYPE['ZLXX'],
            self::TYPE['SJKZR'],
            self::TYPE['SFAJXX'],
            self::TYPE['QYNB'],
            self::TYPE['KZQYXX'],
            self::TYPE['KGGX'],
            self::TYPE['GSXX'],
            self::TYPE['GDXX'],
            self::TYPE['DWTZXX'],
            self::TYPE['CPWSXX'],
            self::TYPE['BGJLXX'],
            self::TYPE['SJJXMXX'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['TZXMBLJGGSXX'],
            self::TYPE['TZXMMCDMPPXX'],
            self::TYPE['MZSHTTHMBFQYDW'],
            self::TYPE['QYJBXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['DYZGXX'],
            self::TYPE['QYGDZCTZXMHZHBA'],
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['QXTCHJBHJDXX'],
            self::TYPE['PXSTYXHDJXX'],
            self::TYPE['HSZYZGZXX'],
            self::TYPE['JXSZLJDW'],
            self::TYPE['ZLJCQYXX'],
            self::TYPE['SLGCZBXX'],
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['PGJGXX'],
            self::TYPE['DTJXJGRXX'],
            self::TYPE['YXZZDWJBGXX'],
            self::TYPE['SLYSXKZXX'],
            self::TYPE['ZYJNZSXX'],
            self::TYPE['QYRYXX'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['TJDCDXML'],
            self::TYPE['JDCWFXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['JGRYXX'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['SYBXXX'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['GRRYXXJTJ'],
            self::TYPE['GRRYXXGDJ'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['SBQYXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['JGRYXXSWGXJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['SFJDRXX'],
            self::TYPE['SFJDJGXX'],
            self::TYPE['LSZYXX'],
            self::TYPE['LSNDPJXX'],
            self::TYPE['LSSWSNDPJXX'],
            self::TYPE['SAJLVJQ'],
            self::TYPE['BWGXX'],
            self::TYPE['WWSDXX'],
            self::TYPE['WWSDGMXSJLSX'],
            self::TYPE['QYSWJBDJXX'],
            self::TYPE['NSXYDJPDXX'],
            self::TYPE['QYQSGGXX'],
            self::TYPE['FZCNSRXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRYCJJBAXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
            self::TYPE['SXBZXRXX'],
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['HXLDGXXX'],
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
            self::TYPE['HGSXQY'],
            self::TYPE['HGGJRZ'],
            self::TYPE['ZZQSGBZHSFGDMD'],
            self::TYPE['ZZQCYBGCZLJMD'],
            self::TYPE['ZZQYZYBGCMD'],
        ),
        IUserGroup::ID['JYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
        ),
        IUserGroup::ID['KJJ'] => array(
            self::TYPE['JXSZLJDW'],
        ),
        IUserGroup::ID['JXW'] => array(),
        IUserGroup::ID['MZSWWYH'] => array(),
        IUserGroup::ID['GAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX'],
        ),
        IUserGroup::ID['MZJ'] => array(
            self::TYPE['MZSHTTHMBFQYDW'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
        ),
        IUserGroup::ID['SFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['SFJDRXX'],
            self::TYPE['SFJDJGXX'],
            self::TYPE['LSZYXX'],
            self::TYPE['LSNDPJXX'],
            self::TYPE['LSSWSNDPJXX'],
        ),
        IUserGroup::ID['CZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['RSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['HXLDGXXX'],
        ),
        IUserGroup::ID['GZW'] => array(
            self::TYPE['QYRYXX'],
        ),
        IUserGroup::ID['GHJ'] => array(
            self::TYPE['PGJGXX'],
        ),
        IUserGroup::ID['ZJJ'] => array(
            self::TYPE['ZLJCQYXX'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['CCJCJGXX'],
            self::TYPE['ZZQSGBZHSFGDMD'],
            self::TYPE['ZZQCYBGCZLJMD'],
            self::TYPE['ZZQYZYBGCMD'],
        ),
        IUserGroup::ID['HBJ'] => array(),
        IUserGroup::ID['JTJ'] => array(
            self::TYPE['YZWFYSSXDSRMD'],
            self::TYPE['JTYSB_SYGCJSLYSXDXQY'],
            self::TYPE['JTYSB_GLGCJSLYSXDXQY'],
            self::TYPE['SLYSXKZXX'],
            self::TYPE['GRRYXXJTJ'],
        ),
        IUserGroup::ID['SWJ'] => array(
            self::TYPE['SLGCZBXX'],
        ),
        IUserGroup::ID['NMJ'] => array(),
        IUserGroup::ID['LCJ'] => array(),
        IUserGroup::ID['SHANGWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
        ),
        IUserGroup::ID['WGJ'] => array(),
        IUserGroup::ID['WJW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
        ),
        IUserGroup::ID['SJJ'] => array(),
        IUserGroup::ID['TYJ'] => array(
            self::TYPE['PXSTYXHDJXX'],
        ),
        IUserGroup::ID['SYJ'] => array(),
        IUserGroup::ID['GSJ'] => array(
            self::TYPE['ZHIJIAN_YZZLSXQYMD'],
            self::TYPE['ZHIJIAN_CRJJYJYYZSXQYMD'],
            self::TYPE['QYJBXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JGRYXX'],
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['ZHIJJ'] => array(),
        IUserGroup::ID['AJJ'] => array(),
        IUserGroup::ID['TJJ'] => array(
            self::TYPE['TJSYZSXQY'],
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML'],
        ),
        IUserGroup::ID['LFW'] => array(
            self::TYPE['DYZGXX'],
            self::TYPE['SAJLVJQ'],
            self::TYPE['BWGXX'],
            self::TYPE['WWSDXX'],
            self::TYPE['WWSDGMXSJLSX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['YXZZDWJBGXX'],
            self::TYPE['GRRYXXGDJ'],
            self::TYPE['JGRYXXSWGXJ'],
            self::TYPE['GRYCJJBAXX'],
            self::TYPE['XZJLXXZRR'],
            self::TYPE['XZJLXXFRHQTZZ'],
        ),
        IUserGroup::ID['LSJ'] => array(),
        IUserGroup::ID['JRB'] => array(),
        IUserGroup::ID['RF'] => array(),
        IUserGroup::ID['FPB'] => array(),
        IUserGroup::ID['SHUIWJ'] => array(
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['QYSWJBDJXX'],
            self::TYPE['NSXYDJPDXX'],
            self::TYPE['QYQSGGXX'],
            self::TYPE['FZCNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['CRJJYJYJ'] => array(),
        IUserGroup::ID['QXJ'] => array(
            self::TYPE['QXTCHJBHJDXX'],
        ),
        IUserGroup::ID['HG'] => array(
            self::TYPE['HGSXQY'],
            self::TYPE['HGGJRZ'],
        ),
        IUserGroup::ID['YZJ'] => array(),
        IUserGroup::ID['YWJ'] => array(),
        IUserGroup::ID['TLSYCJ'] => array(),
        IUserGroup::ID['KEQQRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['KEQQCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['KEQQRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['KEQQZFHCXJSJ'] => array(),
        IUserGroup::ID['KEQQJTYSJ'] => array(),
        IUserGroup::ID['KEQQSWJ'] => array(),
        IUserGroup::ID['KEQQSHANGWJ'] => array(),
        IUserGroup::ID['KEQQNMJ'] => array(),
        IUserGroup::ID['KEQQSFJ'] => array(),
        IUserGroup::ID['KEQQSJJ'] => array(),
        IUserGroup::ID['KEQQSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['KEQQYJGLJ'] => array(),
        IUserGroup::ID['KEQQSTHJJ'] => array(),
        IUserGroup::ID['KEQQLYHCYJ'] => array(),
        IUserGroup::ID['KEQQWSJKWYH'] => array(),
        IUserGroup::ID['KEQQTJJ'] => array(),
        IUserGroup::ID['KEQQGYYQGLWYH'] => array(),
        IUserGroup::ID['KEQQZRZYJ'] => array(),
        IUserGroup::ID['KEQQTYJRSWJ'] => array(),
        IUserGroup::ID['KEQQYLBZJ'] => array(),
        IUserGroup::ID['KEQQXFJ'] => array(),
        IUserGroup::ID['KEQQZWFWJ'] => array(),
        IUserGroup::ID['KEQQSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['KEQQWHHLYJ'] => array(),
        IUserGroup::ID['KEQQFPKFBGS'] => array(),
        IUserGroup::ID['KEQQWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['KEQQWBMJYJ'] => array(),
        IUserGroup::ID['KEQQJLJCWYH'] => array(),
        IUserGroup::ID['KEQQJCWYH'] => array(),
        IUserGroup::ID['KFQZZB'] => array(),
        IUserGroup::ID['KFQXCB'] => array(),
        IUserGroup::ID['KFQRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['KFQRMJCY'] => array(),
        IUserGroup::ID['KFQWJGBZWYHBGS'] => array(),
        IUserGroup::ID['RMYHKFQZH'] => array(),
        IUserGroup::ID['KFQRMZFBGS'] => array(),
        IUserGroup::ID['KFQFZHGGWYH'] => array(),
        IUserGroup::ID['KFQJYKJTYJ'] => array(),
        IUserGroup::ID['KFQGYHXXHJ'] => array(),
        IUserGroup::ID['KFQGAJ'] => array(),
        IUserGroup::ID['KFQMZJ'] => array(),
        IUserGroup::ID['KFQCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['KFQRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['KFQZFHCXJSJ'] => array(),
        IUserGroup::ID['KFQJTYSJ'] => array(),
        IUserGroup::ID['KFQSWJ'] => array(),
        IUserGroup::ID['KFQSHANGWJ'] => array(),
        IUserGroup::ID['KFQNMJ'] => array(),
        IUserGroup::ID['KFQSFJ'] => array(),
        IUserGroup::ID['KFQSJJ'] => array(),
        IUserGroup::ID['KFQSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['KFQYJGLJ'] => array(),
        IUserGroup::ID['KFQSTHJJ'] => array(),
        IUserGroup::ID['KFQLYHCYJ'] => array(),
        IUserGroup::ID['KFQWSJKWYH'] => array(),
        IUserGroup::ID['KFQTJJ'] => array(),
        IUserGroup::ID['KFQGYYQGLWYH'] => array(),
        IUserGroup::ID['KFQZRZYJ'] => array(),
        IUserGroup::ID['KFQTYJRSWJ'] => array(),
        IUserGroup::ID['KFQYLBZJ'] => array(),
        IUserGroup::ID['KFQXFJ'] => array(),
        IUserGroup::ID['KFQZWFWJ'] => array(),
        IUserGroup::ID['KFQSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['KFQWHHLYJ'] => array(),
        IUserGroup::ID['KFQFPKFBGS'] => array(),
        IUserGroup::ID['KFQWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['KFQWBMJYJ'] => array(),
        IUserGroup::ID['KFQJLJCWYH'] => array(),
        IUserGroup::ID['KFQJCWYH'] => array(),
        IUserGroup::ID['HLGLSZZB'] => array(),
        IUserGroup::ID['HLGLSXCB'] => array(),
        IUserGroup::ID['HLGLSRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['HLGLSRMJCY'] => array(),
        IUserGroup::ID['HLGLSWJGBZWYHBGS'] => array(),
        IUserGroup::ID['RMYHHLGLSZH'] => array(),
        IUserGroup::ID['HLGLSRMZFBGS'] => array(),
        IUserGroup::ID['HLGLSFZHGGWYH'] => array(),
        IUserGroup::ID['HLGLSJYKJTYJ'] => array(),
        IUserGroup::ID['HLGLSGYHXXHJ'] => array(),
        IUserGroup::ID['HLGLSGAJ'] => array(),
        IUserGroup::ID['HLGLSMZJ'] => array(),
        IUserGroup::ID['HLGLSCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['HLGLSRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['HLGLSZFHCXJSJ'] => array(),
        IUserGroup::ID['HLGLSJTYSJ'] => array(),
        IUserGroup::ID['HLGLSSWJ'] => array(),
        IUserGroup::ID['HLGLSSHANGWJ'] => array(),
        IUserGroup::ID['HLGLSNMJ'] => array(),
        IUserGroup::ID['HLGLSSFJ'] => array(),
        IUserGroup::ID['HLGLSSJJ'] => array(),
        IUserGroup::ID['HLGLSSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['HLGLSYJGLJ'] => array(),
        IUserGroup::ID['HLGLSSTHJJ'] => array(),
        IUserGroup::ID['HLGLSLYHCYJ'] => array(),
        IUserGroup::ID['HLGLSWSJKWYH'] => array(),
        IUserGroup::ID['HLGLSTJJ'] => array(),
        IUserGroup::ID['HLGLSGYYQGLWYH'] => array(),
        IUserGroup::ID['HLGLSZRZYJ'] => array(),
        IUserGroup::ID['HLGLSTYJRSWJ'] => array(),
        IUserGroup::ID['HLGLSYLBZJ'] => array(),
        IUserGroup::ID['HLGLSXFJ'] => array(),
        IUserGroup::ID['HLGLSZWFWJ'] => array(),
        IUserGroup::ID['HLGLSSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['HLGLSWHHLYJ'] => array(),
        IUserGroup::ID['HLGLSFPKFBGS'] => array(),
        IUserGroup::ID['HLGLSWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['HLGLSWBMJYJ'] => array(),
        IUserGroup::ID['HLGLSJLJCWYH'] => array(),
        IUserGroup::ID['HLGLSJCWYH'] => array(),
        IUserGroup::ID['ZLTQZZB'] => array(),
        IUserGroup::ID['ZLTQXCB'] => array(),
        IUserGroup::ID['ZLTQRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['ZLTQRMJCY'] => array(),
        IUserGroup::ID['ZLTQWJGBZWYHBGS'] => array(),
        IUserGroup::ID['ZGRMYHZLTQZH'] => array(),
        IUserGroup::ID['ZLTQRMZFBGS'] => array(),
        IUserGroup::ID['ZLTQFZHGGWYH'] => array(),
        IUserGroup::ID['ZLTQJYKJTYJ'] => array(),
        IUserGroup::ID['ZLTQGYHXXHJ'] => array(),
        IUserGroup::ID['ZLTQGAJ'] => array(),
        IUserGroup::ID['ZLTQMZJ'] => array(),
        IUserGroup::ID['ZLTQCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['ZLTQRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['ZLTQZFHCXJSJ'] => array(),
        IUserGroup::ID['ZLTQJTYSJ'] => array(),
        IUserGroup::ID['ZLTQSWJ'] => array(),
        IUserGroup::ID['ZLTQSHANGWJ'] => array(),
        IUserGroup::ID['ZLTQNMJ'] => array(),
        IUserGroup::ID['ZLTQSFJ'] => array(),
        IUserGroup::ID['ZLTQSJJ'] => array(),
        IUserGroup::ID['ZLTQSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['ZLTQYJGLJ'] => array(),
        IUserGroup::ID['TLSSTHJJZLTQFJ'] => array(),
        IUserGroup::ID['ZLTQLYHCYJ'] => array(),
        IUserGroup::ID['ZLTQWSJKWYH'] => array(),
        IUserGroup::ID['ZLTQTJJ'] => array(),
        IUserGroup::ID['ZLTQGYYQGLWYH'] => array(),
        IUserGroup::ID['ZLTQZRZYJ'] => array(),
        IUserGroup::ID['ZLTQTYJRSWJ'] => array(),
        IUserGroup::ID['ZLTQYLBZJ'] => array(),
        IUserGroup::ID['ZLTQXFJ'] => array(),
        IUserGroup::ID['ZLTQZWFWJ'] => array(),
        IUserGroup::ID['ZLTQSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['ZLTQWHHLYJ'] => array(),
        IUserGroup::ID['ZLTQFPKFBGS'] => array(),
        IUserGroup::ID['ZLTQWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['ZLTQWBMJYJ'] => array(),
        IUserGroup::ID['ZLTQJLJCWYH'] => array(),
        IUserGroup::ID['ZLTQJCWYH'] => array(),
        IUserGroup::ID['KZZQZZB'] => array(),
        IUserGroup::ID['KZZQXCB'] => array(),
        IUserGroup::ID['KZZQRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['KZZQRMJCY'] => array(),
        IUserGroup::ID['KZZQWJGBZWYHBGS'] => array(),
        IUserGroup::ID['RMYHKZZQZH'] => array(),
        IUserGroup::ID['KZZQRMZFBGS'] => array(),
        IUserGroup::ID['KZZQFZHGGWYH'] => array(),
        IUserGroup::ID['KZZQJYKJTYJ'] => array(),
        IUserGroup::ID['KZZQGYHXXHJ'] => array(),
        IUserGroup::ID['KZZQGAJ'] => array(),
        IUserGroup::ID['KZZQMZJ'] => array(),
        IUserGroup::ID['KZZQCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['KZZQRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['KZZQZFHCXJSJ'] => array(),
        IUserGroup::ID['KZZQJTYSJ'] => array(),
        IUserGroup::ID['KZZQSWJ'] => array(),
        IUserGroup::ID['KZZQSHANGWJ'] => array(),
        IUserGroup::ID['KZZQNMJ'] => array(),
        IUserGroup::ID['KZZQSFJ'] => array(),
        IUserGroup::ID['KZZQSJJ'] => array(),
        IUserGroup::ID['KZZQSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['KZZQYJGLJ'] => array(),
        IUserGroup::ID['KZZQSTHJJ'] => array(),
        IUserGroup::ID['KZZQLYHCYJ'] => array(),
        IUserGroup::ID['KZZQWSJKWYH'] => array(),
        IUserGroup::ID['KZZQTJJ'] => array(),
        IUserGroup::ID['KZZQGYYQGLWYH'] => array(),
        IUserGroup::ID['KZZQZRZYJ'] => array(),
        IUserGroup::ID['KZZQTYJRSWJ'] => array(),
        IUserGroup::ID['KZZQYLBZJ'] => array(),
        IUserGroup::ID['KZZQXFJ'] => array(),
        IUserGroup::ID['KZZQZWFWJ'] => array(),
        IUserGroup::ID['KZZQSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['KZZQWHHLYJ'] => array(),
        IUserGroup::ID['KZZQFPKFBGS'] => array(),
        IUserGroup::ID['KZZQWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['KZZQWBMJYJ'] => array(),
        IUserGroup::ID['KZZQJLJCWYH'] => array(),
        IUserGroup::ID['KZZQJCWYH'] => array(),
        IUserGroup::ID['KZHQZZB'] => array(),
        IUserGroup::ID['KZHQXCB'] => array(),
        IUserGroup::ID['KZHQRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['KZHQRMJCY'] => array(),
        IUserGroup::ID['KZHQWJGBZWYHBGS'] => array(),
        IUserGroup::ID['RMYHKZHQZH'] => array(),
        IUserGroup::ID['KZHQRMZFBGS'] => array(),
        IUserGroup::ID['KZHQFZHGGWYH'] => array(),
        IUserGroup::ID['KZHQJYKJTYJ'] => array(),
        IUserGroup::ID['KZHQGYHXXHJ'] => array(),
        IUserGroup::ID['KZHQGAJ'] => array(),
        IUserGroup::ID['KZHQMZJ'] => array(),
        IUserGroup::ID['KZHQCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['KZHQRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['KZHQZFHCXJSJ'] => array(),
        IUserGroup::ID['KZHQJTYSJ'] => array(),
        IUserGroup::ID['KZHQSWJ'] => array(),
        IUserGroup::ID['KZHQSHANGWJ'] => array(),
        IUserGroup::ID['KZHQNMJ'] => array(),
        IUserGroup::ID['KZHQSFJ'] => array(),
        IUserGroup::ID['KZHQSJJ'] => array(),
        IUserGroup::ID['KZHQSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['KZHQYJGLJ'] => array(),
        IUserGroup::ID['KZHQSTHJJ'] => array(),
        IUserGroup::ID['KZHQLYHCYJ'] => array(),
        IUserGroup::ID['KZHQWSJKWYH'] => array(),
        IUserGroup::ID['KZHQTJJ'] => array(),
        IUserGroup::ID['KZHQGYYQGLWYH'] => array(),
        IUserGroup::ID['KZHQZRZYJ'] => array(),
        IUserGroup::ID['KZHQTYJRSWJ'] => array(),
        IUserGroup::ID['KZHQYLBZJ'] => array(),
        IUserGroup::ID['KZHQXFJ'] => array(),
        IUserGroup::ID['KZHQZWFWJ'] => array(),
        IUserGroup::ID['KZHQSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['KZHQWHHLYJ'] => array(),
        IUserGroup::ID['KZHQFPKFBGS'] => array(),
        IUserGroup::ID['KZHQWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['KZHQWBMJYJ'] => array(),
        IUserGroup::ID['KZHQJLJCWYH'] => array(),
        IUserGroup::ID['KZHQJCWYH'] => array(),
        IUserGroup::ID['KLQZZB'] => array(),
        IUserGroup::ID['KLQXCB'] => array(),
        IUserGroup::ID['KLQRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['KLQRMJCY'] => array(),
        IUserGroup::ID['KLQWJGBZWYHBGS'] => array(),
        IUserGroup::ID['RMYHKLQZH'] => array(),
        IUserGroup::ID['KLQRMZFBGS'] => array(),
        IUserGroup::ID['KLQFZHGGWYH'] => array(),
        IUserGroup::ID['KLQJYKJTYJ'] => array(),
        IUserGroup::ID['KLQGYHXXHJ'] => array(),
        IUserGroup::ID['KLQGAJ'] => array(),
        IUserGroup::ID['KLQMZJ'] => array(),
        IUserGroup::ID['KLQCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['KLQRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['KLQZFHCXJSJ'] => array(),
        IUserGroup::ID['KLQJTYSJ'] => array(),
        IUserGroup::ID['KLQSWJ'] => array(),
        IUserGroup::ID['KLQSHANGWJ'] => array(),
        IUserGroup::ID['KLQNMJ'] => array(),
        IUserGroup::ID['KLQSFJ'] => array(),
        IUserGroup::ID['KLQSJJ'] => array(),
        IUserGroup::ID['KLQSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['KLQYJGLJ'] => array(),
        IUserGroup::ID['KLQSTHJJ'] => array(),
        IUserGroup::ID['KLQLYHCYJ'] => array(),
        IUserGroup::ID['KLQWSJKWYH'] => array(),
        IUserGroup::ID['KLQTJJ'] => array(),
        IUserGroup::ID['KLQGYYQGLWYH'] => array(),
        IUserGroup::ID['KLQZRZYJ'] => array(),
        IUserGroup::ID['KLQTYJRSWJ'] => array(),
        IUserGroup::ID['KLQYLBZJ'] => array(),
        IUserGroup::ID['KLQXFJ'] => array(),
        IUserGroup::ID['KLQZWFWJ'] => array(),
        IUserGroup::ID['KLQSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['KLQWHHLYJ'] => array(),
        IUserGroup::ID['KLQFPKFBGS'] => array(),
        IUserGroup::ID['KLQWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['KLQWBMJYJ'] => array(),
        IUserGroup::ID['KLQJLJCWYH'] => array(),
        IUserGroup::ID['KLQJCWYH'] => array(),
        IUserGroup::ID['NMQRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['NMQJCY'] => array(),
        IUserGroup::ID['NMQWJJWJCW'] => array(),
        IUserGroup::ID['NMQWZZB'] => array(),
        IUserGroup::ID['NMQWXCB'] => array(),
        IUserGroup::ID['NMQJGBZWYHBGS'] => array(),
        IUserGroup::ID['RMYHNMQZH'] => array(),
        IUserGroup::ID['NMQZFBGS'] => array(),
        IUserGroup::ID['NMQFZHGGWYH'] => array(),
        IUserGroup::ID['NMQJYKJTYJ'] => array(),
        IUserGroup::ID['NMQGYHXXHJ'] => array(),
        IUserGroup::ID['NMQGAJ'] => array(),
        IUserGroup::ID['NMQMZJ'] => array(),
        IUserGroup::ID['NMQCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['NMQRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['NMQZFHCXJSJ'] => array(),
        IUserGroup::ID['NMQJTYSJ'] => array(),
        IUserGroup::ID['NMQSWJ'] => array(),
        IUserGroup::ID['NMQSHANGWJ'] => array(),
        IUserGroup::ID['NMQTJJ'] => array(),
        IUserGroup::ID['NMQSFJ'] => array(),
        IUserGroup::ID['NMQSJJ'] => array(),
        IUserGroup::ID['NMQSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['NMQYJGLJ'] => array(),
        IUserGroup::ID['NMQSTHJJ'] => array(),
        IUserGroup::ID['NMQNMJ'] => array(),
        IUserGroup::ID['NMQWHHLYJ'] => array(),
        IUserGroup::ID['NMQWSJKWYH'] => array(),
        IUserGroup::ID['NMQLYHCYJ'] => array(),
        IUserGroup::ID['NMQZRZYJ'] => array(),
        IUserGroup::ID['NMQTYJRSWJ'] => array(),
        IUserGroup::ID['NMQYLBZJ'] => array(),
        IUserGroup::ID['NMQGYZCJDGLWYH'] => array(),
        IUserGroup::ID['NMQXFJ'] => array(),
        IUserGroup::ID['NMQZWFWJ'] => array(),
        IUserGroup::ID['NMQSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['ZGKLXWYHZZB'] => array(),
        IUserGroup::ID['ZGKLXWYHXCB'] => array(),
        IUserGroup::ID['KLXRMFY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        IUserGroup::ID['KLXRMJCY'] => array(),
        IUserGroup::ID['ZGKLXWJGBZWYHBGS'] => array(),
        IUserGroup::ID['ZGRMYHKLXZH'] => array(),
        IUserGroup::ID['KLXRMZFBGS'] => array(),
        IUserGroup::ID['KLXFZHGGWYH'] => array(),
        IUserGroup::ID['KLXJYKJTYJ'] => array(),
        IUserGroup::ID['KLXGYHXXHJ'] => array(),
        IUserGroup::ID['KLXGAJ'] => array(),
        IUserGroup::ID['KLXMZJ'] => array(),
        IUserGroup::ID['KLXCZJ'] => array(
            self::TYPE['ZFCGBLXWJL'],
        ),
        IUserGroup::ID['KLXRLZYHSHBZJ'] => array(
            self::TYPE['HXLDGXXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['KLXZFHCXJSJ'] => array(),
        IUserGroup::ID['KLXJTYSJ'] => array(),
        IUserGroup::ID['KLXSWJ'] => array(),
        IUserGroup::ID['KLXSHANGWJ'] => array(),
        IUserGroup::ID['KLXNMJ'] => array(),
        IUserGroup::ID['KLXSFJ'] => array(),
        IUserGroup::ID['KLXSJJ'] => array(),
        IUserGroup::ID['KLXSCJDGLJ'] => array(
            self::TYPE['SCAQBLJLHMD'],
            self::TYPE['YZSXWFQY'],
        ),
        IUserGroup::ID['KLXYJGLJ'] => array(),
        IUserGroup::ID['KLXSTHJJ'] => array(),
        IUserGroup::ID['KLXLYHCYJ'] => array(),
        IUserGroup::ID['KLXWSJKWYH'] => array(),
        IUserGroup::ID['KLXTJJ'] => array(),
        IUserGroup::ID['KLXGYYQGLWYH'] => array(),
        IUserGroup::ID['KLXZRZYJ'] => array(),
        IUserGroup::ID['KLXTYJRSWJ'] => array(),
        IUserGroup::ID['KLXYLBZJ'] => array(),
        IUserGroup::ID['KLXXFJ'] => array(),
        IUserGroup::ID['KLXZWFWJ'] => array(),
        IUserGroup::ID['KLXSHUIWJ'] => array(
            self::TYPE['ZDSSWFAJXX'],
        ),
        IUserGroup::ID['KLXWHHLYJ'] => array(),
        IUserGroup::ID['KLXFPKFBGS'] => array(),
        IUserGroup::ID['KLXWXCGZLDXZBGS'] => array(),
        IUserGroup::ID['KLXWBMJYJ'] => array(),
        IUserGroup::ID['KLXJLJCWYH'] => array(),
        IUserGroup::ID['KLXJCWYH'] => array(),
        IUserGroup::ID['FY'] => array(
            self::TYPE['SXBZXRXX'],
        ),
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
