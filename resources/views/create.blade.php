@extends( 'layouts.app')
@section( 'content')

<h3>发布新闻</h3>
<form name = "forml" method = "post" action="{{route('notice.store')}}">
{{csrf_field()}}
<label>新闻标题</label>
<input type="text"  id="title" name="title" placehoder="请输入新闻标题">
<label>新闻内容</label>
<textarea  id="content" name="content" cols="30" rows="8"></textarea>
<button type='submit'  onClick="return check(forml);">发布新闻</button>
</form>
@endsection

<script language="javascript">
function check(form){
	if(form.title.value==""){
		alert("请输入新闻标题");
		form.title.focus();
		return false;
	}
	if(form.content.value==""){
		alert("请输入新闻内容");
		form.content.focus();
		return false;
	}
	form.submit();
}</script>
<style>
/* 整体页面背景设置，这里使用了淡蓝色的渐变背景，营造清新感 */
body {
    background: linear-gradient(to bottom right, #e0f7fa, #b2ebf2);
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* 表单整体样式调整 */
form {
    background-color: rgba(255, 255, 255, 0.8); /* 半透明白色背景，与页面背景融合又有区分 */
    padding: 20px;
    border-radius: 10px; /* 圆角效果，使表单看起来更柔和 */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* 淡淡的阴影，增加立体感 */
    width: 600px; /* 可以根据实际需求调整表单宽度 */
    margin: 50px auto; /* 让表单在页面中水平居中 */
}

/* 标题样式 */
h3 {
    color: #0097a7; /* 标题颜色，与整体色调协调 */
    text-align: center;
    margin-bottom: 20px;
}

/* 标签（如新闻标题、新闻内容的标签）样式 */
label {
    display: block; /* 让标签独占一行，布局更清晰 */
    margin-bottom: 5px;
    color: #424242; /* 标签文字颜色 */
}

/* 输入框（文本框和文本域）通用样式 */
input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #bdbdbd; /* 边框样式 */
    border-radius: 5px; /* 输入框圆角 */
    box-sizing: border-box; /* 确保内边距和边框不会撑大元素宽度 */
}

/* 按钮样式 */
button {
    background-color: #0097a7; /* 按钮背景色，与整体色调搭配 */
    color: white; /* 按钮文字颜色 */
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer; /* 鼠标悬停变为手型，提示可点击 */
    transition: background-color 0.3s ease; /* 过渡效果，鼠标悬停时背景色变化更平滑 */
}

button:hover {
    background-color: #006064; /* 鼠标悬停时按钮背景色加深 */
}
</style>