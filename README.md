# 秀人网图片爬虫

一个非常简陋的[秀人网](https://www.xiurenwang.cc/)图片爬虫。

这是本蛾子用于练习简单正则表达式匹配爬虫、尝试使用 AI 融合开发的小项目，因此可能有一些潜在问题，后期网页的更新也可能导致脚本失效。如果您希望改善它，请发起 Pull Request。

> 关于本项目与 AI 融合开发的关系，请见[本蛾子的博客](https://hi.bug-barre.top/posts/5fae0977b1/)。

当前特性：

- 支持下载序号大于等于 13121 的页面全部内容（包含会员内容），简单修改之后可以下载其他页面的公开内容。
- 可以指定开始序号，也可以打断后自动从上次序号继续。
- 会忽略所有错误，以便无人值守下载。
- 自动压缩图像，节省空间。

您使用该脚本产生的一切后果与作者无关。下载的文件版权归原作者所有。本项目部分代码使用了 AI 生成，请注意潜在版权风险。

`dl.py` 是爬虫的入口，您可以通过 `python3 dl.py [number]` 启动下载，其中 `[number]` 参数可选。下载的文件将保存在当前目录下 `img/[page_number]/[img_number].jpg` 中。

`tool` 目录中有更多工具，例如用于显示图片的网页，以及可以让下载在后台进行的 Systemd Unit。由于它们的使用方法与实际情况关系太大，就请您自行探索。

`similar` 包含更多类似的爬虫，实现方法上与秀人网没有太大区别，就同样记录在这里了。
