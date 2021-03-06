@extends('layouts.app')
@section('title','Sales')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Sales
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Sales </strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">

<div id="da-content-area" style="margin-left:30px">                        
						
                                              
                        <div class="clear"></div>
                        	<h3>Upload Files</h3>
							<div style="width:700px;height:300px;overflow-y: scroll;border-top:1px grey solid;padding:10px;">
						
							                      
                        	</div>
                        <div class="clear"></div>
						
						
						
						 <div class="grid_2">
                        
							<div class="da-panel">
									
									<div class="da-panel-header">
										<span class="da-panel-title">
											<img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images//icons/black/16/documents.png" alt="">
											<b>Upload Files</b>
										</span>
									
									</div>
									<hr>
									<div class="da-panel-content"> 
										
										<form method="post" action="https://testenvadgainer.adgainersolutions.com/adgainer/sales/do_uploadFiles" enctype="multipart/form-data" >
										
											<div class="da-form-row">
												
												<div class="da-form-item large">
												<table>
													<tr>
													<td>
													<div class="rowName">
														File 1: &nbsp;&nbsp;&nbsp;&nbsp;
													</div></td><td>			</td>
													<td><div class="rowValue">
														<input type="file" name="file1" class="file" />	
													</div></td>
													</tr>
													<tr>
													<td>
													<div class="rowName">
														File 2:&nbsp;&nbsp;&nbsp;&nbsp;
													</div></td><td></td><td>
													<div class="rowValue">
														<input type="file" name="file2" class="file" />	
													</div></td></tr>
													
													<tr>
													<td>
													<div class="rowName">
														File 3:&nbsp;&nbsp;&nbsp;&nbsp;
													</div></td><td></td>		<td>
													<div class="rowValue">
														<input type="file" name="file3" class="file" />	
													</div></td>
													</tr>
													
													<div class="rowName">
														
													</div>
													<div class="rowValue" align="left">
													<tr><td></td>
														</td><td></td>&nbsp;&nbsp;&nbsp;&nbsp;<td><button id="">Upload Files</button></td></tr>
													</div>
													</table> 
												</div>
											</div>
										
										</form>
									</div>
							</div>
                        </div>
 </div>
 @endsection

  <style>
.da-button_green
{
 color:white;
 width:120px;
 height:40px;
    background-color:rgb(0,128,192);
    padding: 5px 12px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:10px;
	box-shadow: 5px 5px 5px -2px rgba(0,0,0,0.6);
}
.da-button_green:hover
{
color:white;
 background-color:rgb(0,179,225);
 border-radius:10px;
	/* box-shadow: 10px -10px 5px  rgba(0,0,0,0.6);*/
}
</style>  

@section('scripts')
    <script>
$(document).ready(function() {

 });

    </script>
@endsection
