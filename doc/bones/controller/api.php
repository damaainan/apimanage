<?php

// 这个文件只写接口注释

/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         version="1.0.0",
 *         title="ailab Api server",
 *         @OA\License(name="MIT")
 *     ),
 *     @OA\Server(
 *         description="qa Api server",
 *         url="http://internal.ai.qa.com.cn/",
 *     ),
 *     @OA\Server(
 *         description="internal Api server",
 *         url="http://internal.ai.com.cn/",
 *     ),
 *     @OA\Server(
 *         description="ip Api server",
 *         url="http://127.0.0.1/",
 *     ),
 *     @OA\Server(
 *         description="local Api server",
 *         url="http://localhost2/ailabv1/public/index.php/",
 *     ),
 * )
 */
    /**
     * @OA\Get(
     *   path="/class_ct_api/hello",
     *   tags={"ct"},
     *   summary="hello",
     *   @OA\Parameter(
     *         name="name",
     *         in="query",
     *         description="描述",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *             format="integer"
     *         )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="hello {{$name}}"
     *   ),
     *   @OA\Response(
     *     response="default",
     *     description="an ""unexpected"" error"
     *   )
     * )
     */
    /**
     * @OA\Get(
     *   path="/class_ct_api/get_list",
     *   summary="get_list",
     *   tags={"ct"},
     *   @OA\Parameter(
     *         name="category",
     *         in="query",
     *         description="类别",
     *         required=false,
     *         @OA\Schema(
     *             type="string"
     *         )
     *   ),
     *   @OA\Parameter(
     *         name="orderby",
     *         in="query",
     *         description="排序",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *             format="integer"
     *         )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="返回结果描述",
     *         @OA\JsonContent(),
     *         @OA\XmlContent()
     *   )
     * )
     */

/****************************************************************/
/****************************   反作弊接口   *********************/
/****************************************************************/

/**
 * @OA\Get(
 *   path="/anti_spam_api/getStudentInfo",
 *   summary="根据学生id 获取学生信息",
 *   tags={"antispam"},
 *   @OA\Parameter(
 *         name="id",
 *         in="query",
 *         description="学生id",
 *         required=false,
 *         @OA\Schema(
 *             type="string"
 *         )
 *   ),
 *   @OA\Parameter(
 *         name="type",
 *         in="query",
 *         description="返回数据格式,1:Echarts格式,默认需解析格式",
 *         required=false,
 *         @OA\Schema(
 *             type="integer"
 *         )
 *   ),
 *   @OA\Response(
 *     response=200,
 *     description="返回结果描述",
 *         @OA\JsonContent(),
 *         @OA\XmlContent()
 *   )
 * )
 */

/**
 * @OA\Get(
 *   path="/backtrack/channel/get",
 *   summary="获取渠道分支",
 *   tags={"渠道分支"},
 *   @OA\Parameter(
 *         name="channel",
 *         in="query",
 *         description="渠道",
 *         required=false,
 *         @OA\Schema(
 *             type="string"
 *         )
 *   ),
 *   @OA\Response(
 *     response=200,
 *     description="返回结果描述",
 *     @OA\JsonContent(ref="#/components/schemas/BacktrackResponse"),
 *     @OA\XmlContent(ref="#/components/schemas/BacktrackResponse")
 *   )
 * )
 */