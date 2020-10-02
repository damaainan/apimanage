<?php

namespace app\index\docs;

/**
 * Class BacktrackResponse
 *
 * @author  author
 * @OA\Schema(
 *     title="BacktrackResponse",
 *     description="BacktrackResponse",
 * )
 */
class BacktrackResponse
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
     *     example=1568279892931395,
     *     format="string",
     *     description="request_id",
     *     title="request_id",
     * )
     *
     * @var string
     */
    private $request_id;

    /**
     * @OA\Property(
     *     description="返回数据",
     *     title="返回数据",
     * )
     *
     * @var BacktrackChannelData
     */
    private $data;

}

/**
 * Class BacktrackChannelData
 *
 * @author  author
 * @OA\Schema(
 *     title="BacktrackChannelData",
 *     description="BacktrackChannelData",
 * )
 */
class BacktrackChannelData
{

    /**
     * @OA\Property(
     *     default="[{'teacher_id':25,'count':30},{'teacher_id':45,'count':50}]",
     *     description="",
     *     title="",
     * )
     *
     * @var BacktrackChannel
     */
    private $backtrack_channel;

}

/**
 * Class BacktrackChannel
 *
 * @author  author
 * @OA\Schema(
 *     title="BacktrackChannel",
 *     description="BacktrackChannel",
 * )
 */
class BacktrackChannel{
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
    private $id;

    /**
     * @OA\Property(
     *     example="kuaishou2",
     *     format="string",
     *     description="渠道",
     *     title="",
     * )
     *
     * @var int
     */
    private $channel;

    /**
     * @OA\Property(
     *     example=1,
     *     format="int",
     *     description="弹框",
     *     title="",
     * )
     *
     * @var int
     */
    private $hs_notify;
    /**
     * @OA\Property(
     *     example=1,
     *     format="int",
     *     description="健告",
     *     title="",
     * )
     *
     * @var int
     */
    private $jk_notify;
}