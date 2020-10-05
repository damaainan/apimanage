```yaml
openapi: "3.0.0"
info:  //提供API相关的元数据
  version: 1.0.0   //必选. API文档的版本信息(注意:这个版本和开放API 规范版本没有任何关系)。
  title: Swagger Petstore  //必选. 应用的名称。
  description: A sample API that uses a petstore as an example to demonstrate features in the OpenAPI 3.0 specification //对应用的简短描述。 CommonMark syntax 可以被用来 表示富文本呈现。
  termsOfService: http://swagger.io/terms/   //指向服务条款的URL地址，必须是URL地址格式。
  contact:                                  //所开放的API的联系人信息。
    name: Swagger API Team
    email: apiteam@swagger.io
    url: http://swagger.io
  license:                                  //所开放的API的证书信息。
    name: Apache 2.0
    url: https://www.apache.org/licenses/LICENSE-2.0.html
servers:   //这是一个Server对象的数组， 提供到服务器的连接 信息。如果没有提供 servers 属性或者是一个空数 组，那么默认为是url值为 /
  - url: http://petstore.swagger.io/api   //必选. 指向目标主机的URL地址。
    description: The production API server  //一个可选的字符串，用来描述此URL地址
    variables:    //一组变量和值的映射，这些值被用来替换服务器URL地 址内的模板参数。
        username:
            default: demo     //必选. 当可替换的值没有被使用者指定时使用的默认值。
            description: this value is assigned by the service provider    //对服务器变量的可选的描述
        port:
            enum:               //一组可枚举字符串值，当可替换选项只能设置为固定的某些 值时使用。
               - 8443
               - 443
            default: 8443
        basePath:
            default: v2
paths: //必选。对所提供的API有效的路径和操作。
  /pets:   //到各个端点的相对路径，路径必须以 / 打头，这个路径会被直接连接 到 Server 对象 的 url 字段以组成完整URL地址 当做URL地址匹配时，不 带路径参数的路径会被优先匹配。应该避免定义多个具有相同路径层 级但是路径参数名不同的路径，因为他们是等价的。当匹配出现歧义 时，由使用的工具自行决定使用那个路径。
    $ref: ''  //指定对此路径的外部定义的引用
    description: ''//可选描述字段
    summary: ''  //可选 描述包含的操作
    get:
      description: |
        Returns all pets from the system that the user
      operationId: findPets   //用于标识此操作的 唯一字符串，这个 id在此API内包含 的所有操作中必须 是唯一的。
      tags:     //用于控制API文档 的标签列表，标签 可以用于在逻辑上 分组对资源的操作 或作为其它用途的 先决条件。
        - test
      parameters:
        - name: tags  //必选. 参数的名称。参数名是区分大小写。
          in: query   //必选. 参数的位置，可能的值有 "query", "header", "path" 或 "cookie"。
          description: tags to filter by
          required: false
          style: form
          schema:
            type: array
            items:
              type: string
        - name: limit
          in: query
          description: maximum number of results to return
          required: false
          schema:
            type: integer
            format: int32
      responses:
        '200':
          description: pet response
          content:
            application/json:
              schema:
                type: array
                items:
                  $ref: '#/components/schemas/Pet'
        default:
          description: unexpected error
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Error'
      servers:   //一个可用于此操作 的额外的 server 数组，这里的定义 会覆盖 Path Item 对象 或 顶层的定 义。
        - url:
      callbacks:  //回调 内容和path item一致
        {path}
    post:
      description: Creates a new pet in the store. Duplicates are allowed
      operationId: addPet
      requestBody:
        description: Pet to add to the store
        required: true
        content:
          application/json:
            schema:
              $ref: '#/components/schemas/NewPet'
      responses:
        '200':
          description: pet response
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Pet'
        default:
          description: unexpected error
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Error'
  /pets/{id}:
    get:
      description: Returns a user based on a single ID, if the user does not have access to the pet
      operationId: find pet by id
      parameters:
        - name: id
          in: path
          description: ID of pet to fetch
          required: true
          schema:
            type: integer
            format: int64
      responses:
        '200':
          description: pet response
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Pet'
        default:
          description: unexpected error
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Error'
    delete:
      description: deletes a single pet based on the ID supplied
      operationId: deletePet
      parameters:
        - name: id
          in: path
          description: ID of pet to delete
          required: true
          schema:
            type: integer
            format: int64
      responses:
        '204':
          description: pet deleted
        default:
          description: unexpected error
          content:
            application/json:
              schema:
                $ref: '#/components/schemas/Error'
components:  //包含开放API规范固定的各种可重用组件。 这里只提供schema示例，其余的（如header,response等）请自行查看openapi 3.0文档
  schemas:
    Pet:
      oneOf:
        - $ref: '#/components/schemas/PetV1'
        - $ref: '#/components/schemas/PetV2'
      discriminator: //如何区分不同的模式，来如何进行序列化和反序列化
          propertyName: version //包含区分符值的属性的名称。
          mapping:
            1.0: '#/components/schemas/PetV1'
            2.0: '#/components/schemas/PetV2'
    PetV2:
      allOf:
        - $ref: '#/components/schemas/PetV1'
        - type: object
          required:
          - id
          properties:
            id:
              type: integer
              format: int64

    PetV1:
      type: object
      required:
        - name
      properties:
        name:
          type: string
        tag:
          type: string
        address:
          $ref: '#/components/schemas/Address'

    Error:
      type: object
      required:
        - code
        - message
      properties:
        code:
          type: integer
          format: int32
          minimum: 100
          maximum: 600
        message:
          type: string
```


