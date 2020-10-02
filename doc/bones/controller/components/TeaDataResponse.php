<?php

namespace app\index\docs;

/**
 * Class TeaDataResponse
 *
 * @author  author
 * @OA\Schema(
 *     title="TeaDataResponse",
 *     description="TeaDataResponse",
 * )
 */
class TeaDataResponse
{

    /**
     * @OA\Property(
     *     example=0,
     *     format="int32",
     *     description="自定义响应码",
     *     title="自定义响应码",
     * )
     *
     * @var integer
     */
    private $code;
    /**
     * @OA\Property(
     *     example="成功",
     *     format="string",
     *     description="响应信息",
     *     title="响应信息",
     * )
     *
     * @var string
     */
    private $msg;

    /**
     * @OA\Property(
     *     example=1568279892.931395,
     *     format="float",
     *     description="绝对时间戳",
     *     title="绝对时间戳",
     * )
     *
     * @var float
     */
    private $m_timestamp;

    /**
     * @OA\Property(
     *     description="返回数据",
     *     title="返回数据",
     * )
     *
     * @var TeaDataList
     */
    private $data;

}

/**
 * Class TeaDataList
 *
 * @author  author
 * @OA\Schema(
 *     title="TeaDataList",
 *     description="TeaDataList",
 * )
 */
class TeaDataList
{

    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="总页数",
     *     title="",
     * )
     *
     * @var int
     */
    private $total_page;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="总数",
     *     title="",
     * )
     *
     * @var int
     */
    private $total;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="是否排序0否1是",
     *     title="",
     * )
     *
     * @var int
     */
    private $isOrder;

    /**
     * @OA\Property(
     *     default="[{'teacher_id':25,'count':30},{'teacher_id':45,'count':50}]",
     *     description="",
     *     title="",
     * )
     *
     * @var TeaData[]
     */
    private $data;

}

/**
 * Class TeaData
 *
 * @author  author
 * @OA\Schema(
 *     title="TeaData",
 *     description="TeaData",
 * )
 */
class TeaData{
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="外教id",
     *     title="",
     * )
     *
     * @var int
     */
    private $teacher_id;

    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="问题课总量",
     *     title="",
     * )
     *
     * @var int
     */
    private $count;

    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="投诉课总数",
     *     title="",
     * )
     *
     * @var int
     */
    private $complain_num;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="外教低苹果分数量",
     *     title="",
     * )
     *
     * @var int
     */
    private $tea_low_num;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="灰课率",
     *     title="",
     * )
     *
     * @var int
     */
    private $gray_rate;
    /**
     * @OA\Property(
     *     example=0.235698,
     *     format="float",
     *     description="完课率",
     *     title="",
     * )
     *
     * @var float
     */
    private $finish_rate;
    /**
     * @OA\Property(
     *     example=0.235698,
     *     format="float",
     *     description="投诉率",
     *     title="",
     * )
     *
     * @var float
     */
    private $complain_rate;
    /**
     * @OA\Property(
     *     example=0.235698,
     *     format="float",
     *     description="NPF率",
     *     title="",
     * )
     *
     * @var float
     */
    private $npf_rate;
    /**
     * @OA\Property(
     *     example=0.235698,
     *     format="float",
     *     description="AS课总数",
     *     title="",
     * )
     *
     * @var float
     */
    private $as;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="TIT课总数",
     *     title="",
     * )
     *
     * @var int
     */
    private $tit;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="TNS课总数",
     *     title="",
     * )
     *
     * @var int
     */
    private $tns;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="TC课总数",
     *     title="",
     * )
     *
     * @var int
     */
    private $tc;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="完课数量",
     *     title="",
     * )
     *
     * @var int
     */
    private $total;
    /**
     * @OA\Property(
     *     example=10,
     *     format="int",
     *     description="入职天数",
     *     title="",
     * )
     *
     * @var int
     */
    private $tea_entry_days;

    /**
     * @OA\Property(
     *     example="['投诉','外教低苹果分']",
     *     description="top 问题点",
     *     title="",
     * )
     *
     * @var string[]
     */
    private $top_points;
}