@extends('layout.admin')

@section('content')
	<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="widget am-cf">
        <div class="widget-head am-cf">
            <div class="widget-title  am-cf">
                文章列表
            </div>
        </div>
        <div class="widget-body  am-fr">
            <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                <div class="am-form-group">
                    <div class="am-btn-toolbar">
                       
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                <div class="am-form-group tpl-table-list-select">
                    <select data-am-selected="{btnSize: 'sm'}">
                        <option value="option1">
                            所有类别
                        </option>
                        <option value="option2">
                            IT业界
                        </option>
                        <option value="option3">
                            数码产品
                        </option>
                        
                    </select>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                    <input type="text" class="am-form-field ">
                    <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"
                        type="button">
                        </button>
                    </span>
                </div>
            </div>
            <div class="am-u-sm-12">
                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black "
                id="example-r">
                    <thead>
                        <tr>
                            <th>
                                文章标题
                            </th>
                            <th>
                                作者
                            </th>
                            <th>
                                时间
                            </th>
                            <th>
                            	状态
                            </th>
                            <th>
                                操作
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr class="gradeX">
                            <td>
                                请问有没有amazeui 分享插件
                            </td>
                            <td>
                                王宽师
                            </td>
                            <td>
                                2016-09-26
                            </td>
                            <td>
                            	<div class="am-form-group">
                                           
                                            <div class="am-u-sm-9">
                                                <div class="tpl-switch">
                                                    <input type="checkbox" checked="" class="ios-switch bigswitch tpl-switch-btn">
                                                    <div class="tpl-switch-btn-view">
                                                        <div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </td>
                            <td>
                                <div class="tpl-table-black-operation">
                                    <a href="javascript:;">
                                        <i class="am-icon-pencil">
                                        </i>
                                        编辑
                                    </a>
                                    <a href="javascript:;" class="tpl-table-black-operation-del">
                                        <i class="am-icon-trash">
                                        </i>
                                        删除
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="even gradeC">
                            <td>
                                关于input输入框的问题
                            </td>
                            <td>
                                着迷
                            </td>
                            <td>
                                2016-09-26
                            </td>
                           	<td>
                           		<div class="am-form-group">
                                           
                                    <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" checked="" class="ios-switch bigswitch tpl-switch-btn">
                                                <div class="tpl-switch-btn-view">
                                                     <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           	</td>
                            <td>
                                <div class="tpl-table-black-operation">
                                    <a href="javascript:;">
                                        <i class="am-icon-pencil">
                                        </i>
                                        编辑
                                    </a>
                                    <a href="javascript:;" class="tpl-table-black-operation-del">
                                        <i class="am-icon-trash">
                                        </i>
                                        删除
                                    </a>
                                </div>
                            </td>
                        </tr>
                        
                        <!-- more data -->
                    </tbody>
                </table>
            </div>
            <div class="am-u-lg-12 am-cf">
                <div class="am-fr">
                    <ul class="am-pagination tpl-pagination">
                        <li class="am-disabled">
                            <a href="#">
                                «
                            </a>
                        </li>
                        <li class="am-active">
                            <a href="#">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                3
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                4
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                5
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                »
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection