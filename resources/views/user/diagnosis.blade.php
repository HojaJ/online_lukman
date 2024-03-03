@extends('layouts.guest')
@section('title')
    {{ __('Online Lukman') }}
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('files/Esas_files/onlinediagnostics.css') }}">
    <link rel="stylesheet" href="{{ asset('files/Esas_files/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('files/Esas_files/jquery.fancybox-1.3.1.css') }}">
    <link rel="stylesheet" href="{{ asset('files/Esas_files/hxdmoomenu.css') }}">
    <script type="text/javascript" src="{{ asset('files/Esas_files/jquery-1.7.1.min.js.download') }}"></script>
    <script type="text/javascript"
            src="{{ asset('files/Esas_files/jquery-ui-1.10.2.custom.min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/jquery.cookie.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/jquery.colorbox.js.download') }}"></script>
    <script type="text/javascript"
            src="{{ asset('files/Esas_files/jquery.fancybox-1.3.1.pack.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/mootools.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/hxdmoomenu.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/mootools.bgiframe.js.download') }}"></script>


    <link rel="stylesheet" href="{{ asset('files/Esas_files/application.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/Esas_files/jquery-ui-1.10.3.custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/Esas_files/system.css') }}">
    <link rel="stylesheet" href="{{ asset('files/Esas_files/general.css') }}">

    <link rel="stylesheet" href="{{ asset('files/Esas_files/chosen.min.css') }}">

@endpush
@section('content')
    <div id="all">
        <div id="wrapper">


            <div id="main">
                <div id="left_sidebar">

                </div>

                <div id="content">


                    <!-- шаг выбора локализаций -->
                    <!-- список локализаций -->
                    <script type="tmpl/medical" id="tmpl-localization-list">
	<div class='zoomout' onclick='Medical.ModelSelectLoc.zoomout();'>Назад</div>

	<% _.each(locations, function(location){ %>
		<div id="locat_<%= location.id %>" class="btn_symptome" data-id="<%= location.id %>" data-last="<%= location.last %>">
			<div class="name_sympt"><%= location.name %></div>
			<div class="desc_sympt"><%= location.description %></div>
		</div>
	<% }) %>


	<% if(otherloc.length) {%>
		<div class='other-location'>
		<% _.each(otherloc, function(location){ %>
			<div id="locat_<%= location.id %>" class="btn_symptome pointer" data-id="<%= location.id %>" data-last="<%= location.last %>">
				<div class="name_sympt"><%= location.name %></div>
				<div class="desc_sympt"><%= location.description %></div>
			</div>
		<% }) %>
		</div>
	<% } %>

                    </script>

                    <!-- карта полигонов -->
                    <script type="tmpl/medical" id="tmpl-polygon-map">
	<% _.each(datapoly, function(locationPoly){
			var poligons		= locationPoly.polygons;
			var locationName	= locationPoly.name;
			var locationId		= locationPoly.id;

		_.each(poligons,function(poly){
	%>
			<area style='cursor:pointer' data-id='<%= locationId %>' title='<%= locationName %>' id='ar_<%= poly.id %>' class='locat_<%= locationId %>' shape='<%= poly.shape %>' coords='<%= poly.coords %>' />
		<% }) %>
	<% }) %>

                    </script>


                    <!-- шаг диагностики -->
                    <!-- правая сторона для локализаций и симптомов -->
                    <!-- + каркас для локализации -->
                    <script type="tmpl/medical" id="tmpl-location-one">
	<table id='loc-bl-<%= location.id %>' data-hash='<%= location.hashkey %>' data-idloc='<%= location.id %>' class='current-location'>
		<tbody>
			<tr>
				<td class="logo-loc">
					<img src='<%= Medical.Settings.location_uri+ location.img %>'>
					<span><%= location.name %></span>
				</td>

				<td class="list-symp-loc">
					<div id="basket-storage-<%= location.id %>">
						<br />
						<h2>"<%= location.name %>"</h2>
					</div>
				</td>
			</tr>
		</tbody>
	</table>

                    </script>

                    <!-- + кнопка удалить локализацию -->
                    <script type="tmpl/medical" id="tmpl-location-delete">
		<div class="btn_symptome delete-loc pointer" data-id="<%= localizationid %>">
			<img onclick="" class="ico18 pointer fl_l" src="/assets/i/bar/cancel_f2.png">
			<div class="name_sympt">
				Удалить локализацию:"<%= name %>" ?
			</div>
		</div>

                    </script>

                    <!-- + список симптомов для одной локализации -->
                    <script type="tmpl/medical" id="tmpl-symptome-list">
	<% _.each(symptomlist, function(symptome){ %>
		<div class="symptome-btn" data-id="<%= symptome.id %>" data-loc="<%= locationid %>">
			<img class="del ico18 pointer fl_r" src="/assets/i/bar/cancel_f2.png">

		<% if(Medical.Settings.specific) {%>
			<button class='list-ill' data-id='<%= symptome.id %>'>
				<img title="Список болезней" src="/assets/i/bar/list.png">
			</button>
		<% } %>
		<div class="name_sympt"><%= symptome.name %></div></div>
	<% }) %>

                    </script>


                    <!-- шаг диагностики -->
                    <!-- правая сторона для локализаций и симптомов -->
                    <!-- + список болезней -->
                    <script type="tmpl/medical" id="tmpl-illness-list">
	<% _.each(illnesses, function(illness){ %>
		<% if(illness.percent >=2.5 && !Medical.Settings.specific) {%>

			<div class="<%= illness.wrapp %>" data-id="<%= illness.id %>">
                                <table class="btn-illness">
                                    <tr>
                                        <td class="percent"><%= Math.round(illness.percent) %> %</td>
                                        <td class="name"><%= illness.name %></td>
                                        <td class="more">
                                            <a target="_blank" data-id="<%= illness.id %>" <%print('href="'+illness.href+'"')%>>подробнее...</a>
                                        </td>

                                    </tr>
                                </table>


                                <% if(Medical.Settings.specific){ %>
					<a href="#" class='list-symptoms' data-id="<%= illness.id %>">Симптомы</a>&nbsp;&nbsp;&nbsp;
					<a href="#" class='list-prevalence' data-id="<%= illness.id %>">Заболеваемость</a>
				<% } %>
				<% if(Medical.Settings.specific && illness.specific && illness.specific>0){ %>
					<div class='ratio'>ratio: <%= illness.ratio %></div>

					<div class='specific_bl'>
 						Коэф.порядка: <input value='<%= illness.specific %>' title='Вероятность болезни:\nдопустимы только челые числа от 1 до 10\n 1-болезнь менее вероятно что встретится\n10-более вероятно' type='text'>
 						<img style='display:none;' id='spec_id_<%= illness.id %>' class='set_specific ico16' src='<%= Medical.Settings.specific_img %>'>
 					</div>

				<% } %>
			</div>

		<%} else if(Medical.Settings.specific){%>
			<div class="btn-illness" style="background-color:<%= illness.color %>" data-id="<%= illness.id %>">
				<div data-id="<%= illness.id %>" onclick="Medical.ModelIllness.openIllness(<%= illness.id %>);return false;" class="name_sympt pointer"><%= illness.name %><br />Вероятноть: <%= illness.percent %>%</div>
				<% if(Medical.Settings.specific){ %>
					<a href="#" class='list-symptoms' data-id="<%= illness.id %>">Симптомы</a>&nbsp;&nbsp;&nbsp;
					<a href="#" class='list-prevalence' data-id="<%= illness.id %>">Заболеваемость</a>
				<% } %>
				<% if(Medical.Settings.specific && illness.specific && illness.specific>0){ %>
					<div class='ratio'>ratio: <%= illness.ratio %></div>

					<div class='specific_bl'>
 						Коэф.порядка: <input value='<%= illness.specific %>' title='Вероятность болезни:\nдопустимы только челые числа от 1 до 10\n 1-болезнь менее вероятно что встретится\n10-более вероятно' type='text'>
 						<img style='display:none;' id='spec_id_<%= illness.id %>' class='set_specific ico16' src='<%= Medical.Settings.specific_img %>'>
 					</div>

				<% } %>
			</div>
		<% } %>
	<% }) %>
        <a class="illnes_in_diagnostic" href="/diagnostics?controller=ajaxdiagnostics&amp;task=illness_in_diagnostic">Заболевания, участвующие в диагностике</a>

                    </script>


                    <!-- левая сторона для локализаций и симптомов -->
                    <!-- + список симптомов -->
                    <script type="tmpl/medical" id="tmpl-symptoms-select-list">
	<% _.each(symptomelist, function(symptoms){ %>
		<div class="p_wrapp" <%= Medical.Settings.specific ? ' class="order-show"' : '' %>>
			<div id="sympt_<%= symptoms.id %>" data-id="<%= symptoms.id %>" class="btn_symptome pointer<%= (symptoms.select === 'true') ? ' selected' : '' %>"
				<% if(symptoms.last){ %>
					onclick="Medical.ModelSymptome.select(<%= symptoms.id %>);"
				<%} else {%>
					onclick="Medical.ModelSymptome.loadSymptome(<%= symptoms.id %>);"
				<% } %>
			>
				<div class="status">
					<% if(symptoms.last){ %>
                                            <% if(symptoms.select === 'true') {%>
						<b class="status-child-enable"></b>
                                            <% } else { %>
                                                <b class="status-child-disable">выбрать</b>
                                            <% } %>
					<% } else { %>
						<b class="status-parent-disable">уточнить</b>
					<% } %>
				</div>

				<div class="name_sympt" data-name=""><%= symptoms.name %>
					<% if(Medical.Settings.specific){ %>
						(<%= symptoms.count %>)
					<% } %>
				</div>

                            <% if(Medical.Settings.specific){ %>
                                    <br>
                                    <div class='order_bl'>
                                            Сортировка: <input value='<%= symptoms.order %>' title='Сортировка симптомов' type='text' onclick='return false;'>
                                            <img style='display:none;' data-id='<%= symptoms.id %>' class='set_order ico16' src='<%= Medical.Settings.specific_img %>'>
                                    </div>
                            <% } %>
			</div>


                        <% if(!symptoms.last){ %>
                            <div class="sub_children" id="children_sym_<%= symptoms.id %>" data-load="no">

                            </div>
                        <% } %>

		</div>
	<% }) %>

        <% if(parent===1){ %>
	<div class="btn_add_symptome pointer" id="btnAddSymptomeNewLocation" onclick="Medical.ControllerSteps.selectNewLocation();">
		<span class="center">Вернуться и добавить симптом <br>
							для другого участка тела</span>
	</div>
        <% } %>

                    </script>

                    <!-- + кнопка назад при просмотре симптомов -->
                    <script type="tmpl/medical" id="tmpl-symptoms-history-back">
	<div class='btn_symptome pointer back_btn' onclick='Medical.ModelSymptome.backHistory();return false;'>
		<div class='name_sympt'>
			<div class='back_name'>НАЗАД</div>
		</div>
	</div>
	</div>

                    </script>
                    <script type="text/javascript">

                        window.Medical = {};
                        window.Medical.Settings = {
                            "page": 0,
                            "debug_href": "",
                            "specific": false,
                            "specific_img": "\/assets\/i\/bar\/save_f2.png",
                            "base_uri": "\/assets\/i\/social\/",
                            "location_uri": "\/assets\/i\/social\/mini-localization\/"
                        };
                    </script>


                    <br>
                    <div class="bread_crumbs_diagnostic">


                    </div>

                    <br>
                    <br>    <!-- Блок с экранами диагностики -->
                    <div id="contentdiagnostics">

                        <!-- 1) Выбор пола -->
                        <div id="wrapSex" style=" /* display:none; */ ">
                            <!--div class='title-question'>Выберите пол и возрат:</div-->
                            <div class="wrap-sex">
                                <div class="title-question">Ýaşyňyz:</div>
                                <ul id="age_patient" class="group">
                                    <li><input name="age_patient" value="gr_1" id="gr1" type="radio"><label for="gr1">0-12
                                            aý</label></li>
                                    <li><input name="age_patient" value="gr_2" id="gr2" type="radio"><label for="gr2">1-3
                                            ýaş</label>
                                    </li>
                                    <li><input name="age_patient" value="gr_3" id="gr3" type="radio"><label for="gr3">3-14
                                            ýaş</label>
                                    </li>
                                    <li class="active"><input name="age_patient" value="gr_4" id="gr4"
                                                              type="radio"><label for="gr4">14-25 ýaş</label>
                                    </li>
                                    <li class=""><input name="age_patient" value="gr_5" id="gr5" type="radio"
                                                        checked="checked"><label for="gr5">25-40 ýaş</label></li>
                                    <li><input name="age_patient" value="gr_6" id="gr6" type="radio"><label for="gr6">40-60
                                            ýaş</label>
                                    </li>
                                    <li><input name="age_patient" value="gr_7" id="gr7" type="radio"><label for="gr7">60
                                            ýaşdan uly</label></li>
                                </ul>


                                <div class="title-question">Agram,
                                    <small>kg</small>
                                    :
                                </div>
                                <div style="margin: 15px 0 35px 0;position:relative;">
                                    <div id="toolTipWeight" class="errorToolTip">agramyňyzy ýazyň<br>
                                        <small>(0—180 kg)</small>
                                    </div>
                                    <input id="weight_patient" type="text" placeholder="0-250kg">
                                </div>

                                <div class="title-question">Boý,
                                    <small>sm</small>
                                    :
                                </div>
                                <div style="margin: 15px 0 10px 0;position:relative;">
                                    <div id="toolTipGrowth" class="errorToolTip">boýuňyzy ýazyň<br>
                                        <small>(0—250 sm)</small>
                                    </div>
                                    <input id="growth_patient" type="text" placeholder="20-250sm">
                                </div>
                                <div id="weight_koef" style="height: 20px; margin: 0 0 40px 0; color: #333;"></div>

                                <div class="title-question">Jyns:</div>
                                <div class="wrap-inner-sex">
                                    <div id="toolTipGender" class="errorToolTip">Jynsyňyzy saýlaň</div>
                                    <a href="Erkek/index.html">
                                        <div id="sex_man" class="btnSex pointer">
                                            <span><img src="{{ asset('files/img/men.png') }}"></span>
                                            <div class="titleSex">Erkek</div>
                                        </div>
                                    </a>
                                    <a href="Ayal/index.html">
                                        <div id="sex_girl" class="btnSex pointer">
                                            <span><img src="{{ asset('files/img/women.png') }}"></span>
                                            <div class="titleSex">Aýal</div>
                                        </div>
                                    </a>
                                    <div style="clear: both;"></div>
                                </div>
                                <br>
                                <div id="alarm-first">
                                    <b>90% -e çenli takyklyk bilen keselleri anyklamak üçin öz jynsyňyzy saýlaň.</b>
                                    <p><span style="font-size: small;"><span style="color: #3c3c3c;"><strong>Islendik adamyň keseller baradaky maglumatlary, ýüze çykýan ýagdaýlaryny, olaryň öňüni almak üçin geçirilmeli çäreler bilen tanyşmagyny gazanmak.</strong>
                                    </p></div>
                                <div style="clear: both;"></div>
                            </div>
                        </div><!--/ #wrapSex  -->


                        <!-- 2) Выбор локализации -->
                        <div id="screen_location" style="/*display: block*/">
                            <!--div class='title-question'>Выберите область тела:</div-->
                            <div class="wrapper_location group">

                                <div class="left-loc">
                                    <div class="rotate pointer" onclick="Medical.ModelSelectLoc.rotate();">&nbsp;</div>
                                    <div id="people_location">
                                        <i>
                                            <!-- изображение локализации -->
                                            <img id="img_location" alt="" src="{{ asset('files/Esas_files/body.png') }}"
                                                 usemap="#location_map">
                                        </i>
                                        <map name="location_map" id="location_map">
                                            <!-- карта с подсветкой -->
                                        </map>
                                    </div>
                                    <div class="rotate pointer" onclick="Medical.ModelSelectLoc.rotate();">&nbsp;</div>
                                </div>

                                <div class="right-loc">
                                    <div id="back-diagnostic" class="back-diagnostic pointer"
                                         onclick="Medical.ControllerSteps.seletStepDiagnostic();">Продолжить диагноcтику
                                    </div>
                                    <div id="listlocationscroll">

                                        <div id="loadingLocations">
                                            <img src="{{ asset('files/Esas_files/loader.gif') }}">
                                            Загрузка локализаций ...
                                        </div>

                                        <div id="nano-scroll" class="nano">
                                            <div class="content overthrow">
                                                <!-- локализации -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div><!--/ #screen_location -->


                    </div><!-- col-wrap2 -->
                </div><!-- col-wrap1 -->
            </div><!--/ Верхняя часть -->
        </div><!--/ #people_location -->
    </div><!--/ #screen_basket -->

    </div><!--/ #contentdiagnostics  -->
@endsection

@push('script')

    <script type="text/javascript" src="{{ asset('files/Esas_files/vendors.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/chosen.jquery.min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/app.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/underscore-min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/idle-timer.min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('files/Esas_files/diagnostic.js.download') }}"></script>
@endpush