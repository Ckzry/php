@extends( 'layouts.app')
@section( 'content')
<script type="text/javascript">
function check(form){
	var confirm=window.confirm('你确定删除该新闻么？');
	if(confirm==TRUE){
		form.submit;
		}
		else{
		alert("取消删除操作");
		return false;
	}

}</script>
<div class = " container">
<div class= "card" >
<div class="card-header">新闻列表</div>
<div class = "card-body" >
<table class=" table table-hover table-bordered" >
<thead class='bg-info'>
<tr>
<td>新闻标题</d><td>发布时间</td><td>操作</td>
</tr>
</thead>
<tbody>
@foreach($notices as $notice)
<tr>
<td>{{ $notice->title}}</td>
<td>{{$notice->created_at}}</td>
<td>
<a href="{{route('notice.create')}}" class="btn btn-info">发布新闻 </a>
<a href="{{route('notice.edit',$notice->id)}}" class="btn btn-info">编辑新闻</a>
<form name = "forml" method = "post" action="{{route('notice.destroy',$notice->id)}}">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button type='submit' class='btn btn-info' onClick="return check(forml);">删除新闻</button></form>
</td>
</tr>
@endforeach
</tbody>
<tfoot>
{{$notices->links()}}
</tfoot>
</table>
</div>
</div>
</div>
@endsection
<style>
/* 整体页面背景设置，采用淡色系的线性渐变背景，营造清新柔和的氛围 */
body {
    background: linear-gradient(to bottom, #f0f9ff, #cbebff);
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* 容器样式，设置合理的间距、边框、圆角以及阴影，使其在页面中呈现出优雅的效果 */
.container {
    max-width: 1000px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: white;
}

/* 卡片整体样式，去除默认边框，设置合适的圆角 */
.card {
    border: none;
    border-radius: 10px;
}

/* 卡片头部样式，采用淡雅的蓝色背景，文字居中且颜色协调 */
.card-header {
    background-color: #87CEEB;
    color: white;
    text-align: center;
    padding: 15px 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    font-size: 24px;
    font-weight: bold;
}

/* 表格样式，设置整体的外观，让表格更简洁美观 */
table {
    width: 100%;
    border-collapse: collapse; /* 合并边框 */
    margin-top: 20px;
}

/* 表头样式，淡蓝色背景，文字加粗，有一定的内边距 */
thead.bg-info {
    background-color: #ADD8E6;
    color: white;
    font-weight: bold;
}

/* 表头单元格样式，设置内边距，让文字分布更均匀美观 */
thead td {
    padding: 10px 15px;
}

/* 表格主体行样式，鼠标悬停时有淡色背景变化，过渡效果让变化更平滑 */
tbody tr {
    transition: background-color 0.3s ease;
}

tbody tr:hover {
    background-color: #f5f5f5; /* 鼠标悬停时的背景色 */
}

/* 表格主体单元格样式，设置内边距，保证文字与边框有合适距离 */
tbody td {
    padding: 10px 15px;
}

/* 操作列中的按钮样式，统一的浅蓝色按钮，有圆角、无边框，文字颜色合适 */
.btn.btn-info {
    background-color: #87CEEB;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 15px;
    margin-right: 10px; /* 按钮之间留一点间距 */
    transition: background-color 0.3s ease; /* 按钮悬停时背景色变化过渡效果 */
}

.btn.btn-info:hover {
    background-color: #6495ED; /* 鼠标悬停时按钮背景色加深，更有层次感 */
}

/* 页脚样式，分页链接的样式调整，使其更美观 */
tfoot {
    text-align: center;
    margin-top: 20px;
}

tfoot.pagination {
    justify-content: center; /* 分页链接居中显示 */
}

tfoot.page-link {
    color: #87CEEB; /* 分页链接文字颜色与整体色调协调 */
    background-color: white;
    border: 1px solid #87CEEB;
    border-radius: 5px;
    margin: 0 3px;
    transition: background-color 0.3s ease, color 0.3s ease; /* 分页链接悬停时颜色变化过渡效果 */
}

tfoot.page-link:hover {
    background-color: #87CEEB; /* 鼠标悬停时背景色变化 */
    color: white;
}

tfoot.page-item.active.page-link {
    background-color: #87CEEB;
    color: white;
    border-color: #87CEEB;
}
</style>