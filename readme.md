##。。。。 QR扫除阿取利云印记。。

##。。。 韦塞尔部。

<a href。=“ https://vercel.com/new/import。?s = https://github.com/lengniuge/token”。><img。 src="https://vercel.com/button" height="24"></a>

##。。。 本地开发。

- `纱线服务。`
- `纱线vercel:dev。` 需要陆上。

###。。 生二绘图。

说明:调整此直接,获取取二绘图。

**。。。。。。。。。。调用子:。**。。。。。。。。。。 `/ api /生成。`

**。。。。。。。。。。可选参数:。**。。。。。。。。。。
`img。。。 `:布尔。

**。。。。。。。。。。返回说明:。**。。。。。。。。。。

- `t` :一项使用超过查询的输入数传递给。 `/ api / state-query。` (提示:这不是当前的时空)。
- `ck。` :一项使用超过查询的输入数传递给。 `/ api / state-query。`
- `codeContent。` : `img。。。 `正时是一个基数64图片是二绘图的直接位置地址(可自动测绘二测绘)。

###。。 检验二测绘特征。

说明:调整此次连通,检验查询二绘图图。

**。。。。。。。。。。调用子:。**。。。。。。。。。。 `/ api / state-query。?t =&ck =。`

**。。。。。。。。。。选参数:。**。。。。。。。。。。

`t` : 使用 `/api/generate`接口返回的 `t`

`ck` : 使用 `/api/generate`接口返回的 `ck`

tip : 如果不匹配 查询结果一直是 `EXPIRED`的状态

**返回说明 :**

- `qrCodeStatus`
  - NEW: "请用阿里云盘 App 扫码",
  - SCANED: "请在手机上确认",
  - EXPIRED: "二维码已过期",
  - CANCELED: "已取消",
  - CONFIRMED: "已确认"
- `bizExt` 用户信息、token 等... (已经 base64 解码了，可直接食用)

## 相关项目

[阿里云盘 Go SDK](https://github.com/chyroc/go-aliyundrive)

## Demo

[示例](https://token-git-main-lengniuge.vercel.app/)

## License

[The MIT License (MIT)](https://github.com/lengniuge/token/blob/master/LICENSE)
