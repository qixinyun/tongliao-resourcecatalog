<?php
namespace ResourceCatalog\Model;

interface IUserGroup extends IUserGroupIdentify
{
    const ID = array(
        'NULL' => 0,
        'FGW' => 1,
        'JYJ' => 2,
        'KJJ' => 3,
        'JXW' => 4,
        'MZSWWYH' => 5,
        'GAJ' => 6,
        'MZJ' => 7,
        'SFJ' => 8,
        'CZJ' => 9,
        'RSJ' => 10,
        'GZW' => 11,
        'GHJ' => 12,
        'ZJJ' => 13,
        'HBJ' => 14,
        'JTJ' => 15,
        'SWJ' => 16,
        'NMJ' => 17,
        'LCJ' => 18,
        'SHANGWJ' => 19,
        'WGJ' => 20,
        'WJW' => 21,
        'SJJ' => 22,
        'TYJ' => 23,
        'SYJ' => 24,
        'GSJ' => 25,
        'ZJJ' => 26,
        'AJJ' => 27,
        'TJJ' => 28,
        'LFW' => 29,
        'LSJ' => 30,
        'JRB' => 31,
        'RF' => 32,
        'FPB' => 33,
        'SHUIWJ' => 34,
        'CRJJYJYJ' => 35,
        'QXJ' => 36,
        'HG' => 37,
        'YZJ' => 38,
        'YWJ' => 39,
        'TLSYCJ' => 40,
        'KEQQZZB' => 101,
        'KEQQXCB' => 102,
        'KEQQRMFY' => 103,
        'KEQQRMJCY' => 104,
        'KEQQWJGBZWYHBGS' => 105,
        'RMYHKEQQZH' => 106,
        'KEQQRMZFBGS' => 107,
        'KEQQFZHGGWYH' => 108,
        'KEQQJYKJTYJ' => 109,
        'KEQQGYHXXHJ' => 110,
        'KEQQGAJ' => 111,
        'KEQQMZJ' => 112,
        'KEQQCZJ' => 113,
        'KEQQRLZYHSHBZJ' => 114,
        'KEQQZFHCXJSJ' => 115,
        'KEQQJTYSJ' => 116,
        'KEQQSWJ' => 117,
        'KEQQSHANGWJ' => 118,
        'KEQQNMJ' => 119,
        'KEQQSFJ' => 120,
        'KEQQSJJ' => 121,
        'KEQQSCJDGLJ' => 122,
        'KEQQYJGLJ' => 123,
        'KEQQSTHJJ' => 124,
        'KEQQLYHCYJ' => 125,
        'KEQQWSJKWYH' => 126,
        'KEQQTJJ' => 127,
        'KEQQGYYQGLWYH' => 128,
        'KEQQZRZYJ' => 129,
        'KEQQTYJRSWJ' => 130,
        'KEQQYLBZJ' => 131,
        'KEQQXFJ' => 132,
        'KEQQZWFWJ' => 133,
        'KEQQSHUIWJ' => 134,
        'KEQQWHHLYJ' => 135,
        'KEQQFPKFBGS' => 136,
        'KEQQWXCGZLDXZBGS' => 137,
        'KEQQWBMJYJ' => 138,
        'KEQQJLJCWYH' => 139,
        'KEQQJCWYH' => 140,
        'KFQZZB' => 201,
        'KFQXCB' => 202,
        'KFQRMFY' => 203,
        'KFQRMJCY' => 204,
        'KFQWJGBZWYHBGS' => 205,
        'RMYHKFQZH' => 206,
        'KFQRMZFBGS' => 207,
        'KFQFZHGGWYH' => 208,
        'KFQJYKJTYJ' => 209,
        'KFQGYHXXHJ' => 210,
        'KFQGAJ' => 211,
        'KFQMZJ' => 212,
        'KFQCZJ' => 213,
        'KFQRLZYHSHBZJ' => 214,
        'KFQZFHCXJSJ' => 215,
        'KFQJTYSJ' => 216,
        'KFQSWJ' => 217,
        'KFQSHANGWJ' => 218,
        'KFQNMJ' => 219,
        'KFQSFJ' => 220,
        'KFQSJJ' => 221,
        'KFQSCJDGLJ' => 222,
        'KFQYJGLJ' => 223,
        'KFQSTHJJ' => 224,
        'KFQLYHCYJ' => 225,
        'KFQWSJKWYH' => 226,
        'KFQTJJ' => 227,
        'KFQGYYQGLWYH' => 228,
        'KFQZRZYJ' => 229,
        'KFQTYJRSWJ' => 230,
        'KFQYLBZJ' => 231,
        'KFQXFJ' => 232,
        'KFQZWFWJ' => 233,
        'KFQSHUIWJ' => 234,
        'KFQWHHLYJ' => 235,
        'KFQFPKFBGS' => 236,
        'KFQWXCGZLDXZBGS' => 237,
        'KFQWBMJYJ' => 238,
        'KFQJLJCWYH' => 239,
        'KFQJCWYH' => 240,
        'HLGLSZZB' => 301,
        'HLGLSXCB' => 302,
        'HLGLSRMFY' => 303,
        'HLGLSRMJCY' => 304,
        'HLGLSWJGBZWYHBGS' => 305,
        'RMYHHLGLSZH' => 306,
        'HLGLSRMZFBGS' => 307,
        'HLGLSFZHGGWYH' => 308,
        'HLGLSJYKJTYJ' => 309,
        'HLGLSGYHXXHJ' => 310,
        'HLGLSGAJ' => 311,
        'HLGLSMZJ' => 312,
        'HLGLSCZJ' => 313,
        'HLGLSRLZYHSHBZJ' => 314,
        'HLGLSZFHCXJSJ' => 315,
        'HLGLSJTYSJ' => 316,
        'HLGLSSWJ' => 317,
        'HLGLSSHANGWJ' => 318,
        'HLGLSNMJ' => 319,
        'HLGLSSFJ' => 320,
        'HLGLSSJJ' => 321,
        'HLGLSSCJDGLJ' => 322,
        'HLGLSYJGLJ' => 323,
        'HLGLSSTHJJ' => 324,
        'HLGLSLYHCYJ' => 325,
        'HLGLSWSJKWYH' => 326,
        'HLGLSTJJ' => 327,
        'HLGLSGYYQGLWYH' => 328,
        'HLGLSZRZYJ' => 329,
        'HLGLSTYJRSWJ' => 330,
        'HLGLSYLBZJ' => 331,
        'HLGLSXFJ' => 332,
        'HLGLSZWFWJ' => 333,
        'HLGLSSHUIWJ' => 334,
        'HLGLSWHHLYJ' => 335,
        'HLGLSFPKFBGS' => 336,
        'HLGLSWXCGZLDXZBGS' => 337,
        'HLGLSWBMJYJ' => 338,
        'HLGLSJLJCWYH' => 339,
        'HLGLSJCWYH' => 340,
        'ZLTQZZB' => 401,
        'ZLTQXCB' => 402,
        'ZLTQRMFY' => 403,
        'ZLTQRMJCY' => 404,
        'ZLTQWJGBZWYHBGS' => 405,
        'ZGRMYHZLTQZH' => 406,
        'ZLTQRMZFBGS' => 407,
        'ZLTQFZHGGWYH' => 408,
        'ZLTQJYKJTYJ' => 409,
        'ZLTQGYHXXHJ' => 410,
        'ZLTQGAJ' => 411,
        'ZLTQMZJ' => 412,
        'ZLTQCZJ' => 413,
        'ZLTQRLZYHSHBZJ' => 414,
        'ZLTQZFHCXJSJ' => 415,
        'ZLTQJTYSJ' => 416,
        'ZLTQSWJ' => 417,
        'ZLTQSHANGWJ' => 418,
        'ZLTQNMJ' => 419,
        'ZLTQSFJ' => 420,
        'ZLTQSJJ' => 421,
        'ZLTQSCJDGLJ' => 422,
        'ZLTQYJGLJ' => 423,
        'TLSSTHJJZLTQFJ' => 424,
        'ZLTQLYHCYJ' => 425,
        'ZLTQWSJKWYH' => 426,
        'ZLTQTJJ' => 427,
        'ZLTQGYYQGLWYH' => 428,
        'ZLTQZRZYJ' => 429,
        'ZLTQTYJRSWJ' => 430,
        'ZLTQYLBZJ' => 431,
        'ZLTQXFJ' => 432,
        'ZLTQZWFWJ' => 433,
        'ZLTQSHUIWJ' => 434,
        'ZLTQWHHLYJ' => 435,
        'ZLTQFPKFBGS' => 436,
        'ZLTQWXCGZLDXZBGS' => 437,
        'ZLTQWBMJYJ' => 438,
        'ZLTQJLJCWYH' => 439,
        'ZLTQJCWYH' => 440,
        'KZZQZZB' => 501,
        'KZZQXCB' => 502,
        'KZZQRMFY' => 503,
        'KZZQRMJCY' => 504,
        'KZZQWJGBZWYHBGS' => 505,
        'RMYHKZZQZH' => 506,
        'KZZQRMZFBGS' => 507,
        'KZZQFZHGGWYH' => 508,
        'KZZQJYKJTYJ' => 509,
        'KZZQGYHXXHJ' => 510,
        'KZZQGAJ' => 511,
        'KZZQMZJ' => 512,
        'KZZQCZJ' => 513,
        'KZZQRLZYHSHBZJ' => 514,
        'KZZQZFHCXJSJ' => 515,
        'KZZQJTYSJ' => 516,
        'KZZQSWJ' => 517,
        'KZZQSHANGWJ' => 518,
        'KZZQNMJ' => 519,
        'KZZQSFJ' => 520,
        'KZZQSJJ' => 521,
        'KZZQSCJDGLJ' => 522,
        'KZZQYJGLJ' => 523,
        'KZZQSTHJJ' => 524,
        'KZZQLYHCYJ' => 525,
        'KZZQWSJKWYH' => 526,
        'KZZQTJJ' => 527,
        'KZZQGYYQGLWYH' => 528,
        'KZZQZRZYJ' => 529,
        'KZZQTYJRSWJ' => 530,
        'KZZQYLBZJ' => 531,
        'KZZQXFJ' => 532,
        'KZZQZWFWJ' => 533,
        'KZZQSHUIWJ' => 534,
        'KZZQWHHLYJ' => 535,
        'KZZQFPKFBGS' => 536,
        'KZZQWXCGZLDXZBGS' => 537,
        'KZZQWBMJYJ' => 538,
        'KZZQJLJCWYH' => 539,
        'KZZQJCWYH' => 540,
        'KZHQZZB' => 601,
        'KZHQXCB' => 602,
        'KZHQRMFY' => 603,
        'KZHQRMJCY' => 604,
        'KZHQWJGBZWYHBGS' => 605,
        'RMYHKZHQZH' => 606,
        'KZHQRMZFBGS' => 607,
        'KZHQFZHGGWYH' => 608,
        'KZHQJYKJTYJ' => 609,
        'KZHQGYHXXHJ' => 610,
        'KZHQGAJ' => 611,
        'KZHQMZJ' => 612,
        'KZHQCZJ' => 613,
        'KZHQRLZYHSHBZJ' => 614,
        'KZHQZFHCXJSJ' => 615,
        'KZHQJTYSJ' => 616,
        'KZHQSWJ' => 617,
        'KZHQSHANGWJ' => 618,
        'KZHQNMJ' => 619,
        'KZHQSFJ' => 620,
        'KZHQSJJ' => 621,
        'KZHQSCJDGLJ' => 622,
        'KZHQYJGLJ' => 623,
        'KZHQSTHJJ' => 624,
        'KZHQLYHCYJ' => 625,
        'KZHQWSJKWYH' => 626,
        'KZHQTJJ' => 627,
        'KZHQGYYQGLWYH' => 628,
        'KZHQZRZYJ' => 629,
        'KZHQTYJRSWJ' => 630,
        'KZHQYLBZJ' => 631,
        'KZHQXFJ' => 632,
        'KZHQZWFWJ' => 633,
        'KZHQSHUIWJ' => 634,
        'KZHQWHHLYJ' => 635,
        'KZHQFPKFBGS' => 636,
        'KZHQWXCGZLDXZBGS' => 637,
        'KZHQWBMJYJ' => 638,
        'KZHQJLJCWYH' => 639,
        'KZHQJCWYH' => 640,
        'KLQZZB' => 701,
        'KLQXCB' => 702,
        'KLQRMFY' => 703,
        'KLQRMJCY' => 704,
        'KLQWJGBZWYHBGS' => 705,
        'RMYHKLQZH' => 706,
        'KLQRMZFBGS' => 707,
        'KLQFZHGGWYH' => 708,
        'KLQJYKJTYJ' => 709,
        'KLQGYHXXHJ' => 710,
        'KLQGAJ' => 711,
        'KLQMZJ' => 712,
        'KLQCZJ' => 713,
        'KLQRLZYHSHBZJ' => 714,
        'KLQZFHCXJSJ' => 715,
        'KLQJTYSJ' => 716,
        'KLQSWJ' => 717,
        'KLQSHANGWJ' => 718,
        'KLQNMJ' => 719,
        'KLQSFJ' => 720,
        'KLQSJJ' => 721,
        'KLQSCJDGLJ' => 722,
        'KLQYJGLJ' => 723,
        'KLQSTHJJ' => 724,
        'KLQLYHCYJ' => 725,
        'KLQWSJKWYH' => 726,
        'KLQTJJ' => 727,
        'KLQGYYQGLWYH' => 728,
        'KLQZRZYJ' => 729,
        'KLQTYJRSWJ' => 730,
        'KLQYLBZJ' => 731,
        'KLQXFJ' => 732,
        'KLQZWFWJ' => 733,
        'KLQSHUIWJ' => 734,
        'KLQWHHLYJ' => 735,
        'KLQFPKFBGS' => 736,
        'KLQWXCGZLDXZBGS' => 737,
        'KLQWBMJYJ' => 738,
        'KLQJLJCWYH' => 739,
        'KLQJCWYH' => 740,
        'NMQRMFY' => 801,
        'NMQJCY' => 802,
        'NMQWJJWJCW' => 803,
        'NMQWZZB' => 804,
        'NMQWXCB' => 805,
        'NMQJGBZWYHBGS' => 806,
        'RMYHNMQZH' => 807,
        'NMQZFBGS' => 808,
        'NMQFZHGGWYH' => 809,
        'NMQJYKJTYJ' => 810,
        'NMQGYHXXHJ' => 811,
        'NMQGAJ' => 812,
        'NMQMZJ' => 813,
        'NMQCZJ' => 814,
        'NMQRLZYHSHBZJ' => 815,
        'NMQZFHCXJSJ' => 816,
        'NMQJTYSJ' => 817,
        'NMQSWJ' => 818,
        'NMQSHANGWJ' => 819,
        'NMQTJJ' => 820,
        'NMQSFJ' => 821,
        'NMQSJJ' => 822,
        'NMQSCJDGLJ' => 823,
        'NMQYJGLJ' => 824,
        'NMQSTHJJ' => 825,
        'NMQNMJ' => 826,
        'NMQWHHLYJ' => 827,
        'NMQWSJKWYH' => 828,
        'NMQLYHCYJ' => 829,
        'NMQZRZYJ' => 830,
        'NMQTYJRSWJ' => 831,
        'NMQYLBZJ' => 832,
        'NMQGYZCJDGLWYH' => 833,
        'NMQXFJ' => 834,
        'NMQZWFWJ' => 835,
        'NMQSHUIWJ' => 836,
        'ZGKLXWYHZZB' => 901,
        'ZGKLXWYHXCB' => 902,
        'KLXRMFY' => 903,
        'KLXRMJCY' => 904,
        'ZGKLXWJGBZWYHBGS' => 905,
        'ZGRMYHKLXZH' => 906,
        'KLXRMZFBGS' => 907,
        'KLXFZHGGWYH' => 908,
        'KLXJYKJTYJ' => 909,
        'KLXGYHXXHJ' => 910,
        'KLXGAJ' => 911,
        'KLXMZJ' => 912,
        'KLXCZJ' => 913,
        'KLXRLZYHSHBZJ' => 914,
        'KLXZFHCXJSJ' => 915,
        'KLXJTYSJ' => 916,
        'KLXSWJ' => 917,
        'KLXSHANGWJ' => 918,
        'KLXNMJ' => 919,
        'KLXSFJ' => 920,
        'KLXSJJ' => 921,
        'KLXSCJDGLJ' => 922,
        'KLXYJGLJ' => 923,
        'KLXSTHJJ' => 924,
        'KLXLYHCYJ' => 925,
        'KLXWSJKWYH' => 926,
        'KLXTJJ' => 927,
        'KLXGYYQGLWYH' => 928,
        'KLXZRZYJ' => 929,
        'KLXTYJRSWJ' => 930,
        'KLXYLBZJ' => 931,
        'KLXXFJ' => 932,
        'KLXZWFWJ' => 933,
        'KLXSHUIWJ' => 934,
        'KLXWHHLYJ' => 935,
        'KLXFPKFBGS' => 936,
        'KLXWXCGZLDXZBGS' => 937,
        'KLXWBMJYJ' => 938,
        'KLXJLJCWYH' => 939,
        'KLXJCWYH' => 940,
        'FY' => 946,
        'TLSZLSGS' => 947,
        'XARQYXGS' => 948,
        'TLSDYJ' => 949,
    );
}
