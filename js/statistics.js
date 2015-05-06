/* ========================================================================
 * Open eClass 
 * E-learning and Course Management System
 * ========================================================================
 * Copyright 2003-2014  Greek Universities Network - GUnet
 * A full copyright notice can be read in "/info/copyright.txt".
 * For a full list of contributors, see "credits.txt".
 *
 * Open eClass is an open platform distributed in the hope that it will
 * be useful (without any warranty), under the terms of the GNU (General
 * Public License) as published by the Free Software Foundation.
 * The full license can be read in "/info/license/license_gpl.txt".
 *
 * Contact address: GUnet Asynchronous eLearning Group,
 *                  Network Operations Center, University of Athens,
 *                  Panepistimiopolis Ilissia, 15784, Athens, Greece
 *                  e-mail: info@openeclass.org
 * ======================================================================== 
 */

var startdate = null;
var sdate = null;
var interval = 30;
var enddate = null;
var edate = null;
var course = null;
var module = null;
var user = null;
//var maxintervals = 20;
//var lang = $language;

$(document).ready(function(){
    $('#startdate').datepicker({
        format: 'dd-mm-yyyy',
        pickerPosition: 'bottom-left',
        language: lang,
        autoclose: true    
    }); 
    $('#enddate').datepicker({
        format: 'dd-mm-yyyy',
        pickerPosition: 'bottom-left',
        language: lang,
        autoclose: true
    });
    $('#startdate').change(function(){
        sdate = $(this).datepicker("getDate");
        startdate = sdate.getFullYear()+"-"+(sdate.getMonth()+1)+"-"+sdate.getDate();
        $('#enddate').focus();
    });
    $('#enddate').change(function(){
        edate = $(this).datepicker("getDate");
        enddate = edate.getFullYear()+"-"+(edate.getMonth()+1)+"-"+edate.getDate();
    });
    $('#enddate').blur(function(){
        adjust_interval_options();
        refresh_plots();
    });
    sdate = $('#startdate').datepicker("getDate");
    startdate = sdate.getFullYear()+"-"+(sdate.getMonth()+1)+"-"+sdate.getDate();
    edate = $('#enddate').datepicker("getDate");
    enddate = edate.getFullYear()+"-"+(edate.getMonth()+1)+"-"+edate.getDate();
    adjust_interval_options();
    interval = $('#interval option:selected').val();
    $('#interval').change(function(){
        interval = $('#interval option:selected').val();
        refresh_plots();
    });
    if($('#user').length){
        user = $('#user option:selected').val();
        $('#user').change(function(){
            user = $('#user option:selected').val();
            refresh_plots();
        });
    
    }
    if($('#course').length){
        course = $('#course option:selected').val();
        $('#course').change(function(){
            course = $('#course option:selected').val();
            if(course == 0){
                module = null;
            }
            refresh_plots();
        });
    }
    refresh_plots();
    
});

function refresh_plots(){
    if($("#generic_stats").length){
        refresh_generic_course_plot();
    }
    if($("#generic_userstats").length){
        refresh_generic_user_plot();
    }
}

function adjust_interval_options(){
    dayMilliseconds = 24*60*60*1000;
    diffInDays = (edate-sdate)/dayMilliseconds;
    $('#interval > option').each(function(){
        intervalsNumber = diffInDays/$(this).val();
        if(intervalsNumber<=0 || intervalsNumber>maxintervals){
            $(this).hide();
        }
       else{
            $(this).show();
        }
    });
    console.log(edate+"-"+sdate+"="+diffInDays);
}

function refresh_generic_course_plot(){
    $.getJSON('results.php',{t:'cg', s:startdate, e:enddate, i:interval, u:user, c:course, m:module},function(data){
        c3.generate({
            data: {
                json: data,
                x: 'time',
                axes: {
                    hits: 'y',
                    duration: 'y2'
                },
                types:{
                    hits: 'bar',
                    duration: 'spline'
                }
            },
            axis:{ x: {type:'category', label: 'month', padding:{left:0, right:0}}, y:{label:'hits', min: 0,padding:{top:0, bottom:0}}, y2: {show: true, label:'duration (sec)', min: 0, padding:{top:0, bottom:0}}},
            bindto: '#generic_stats'
        });
        refresh_module_pref_plot();
    });
}

function refresh_module_pref_plot(){
    $.getJSON('results.php',{t:'cmp', s:startdate, e:enddate, i:interval, u:user, c:course, m:module},function(data){
        c3.generate({
            data: {
                json: data.chartdata,
                type:'pie',
                onclick: function (d,i){console.log('click on '+d+' with id '+d.index);refresh_course_module_plot(data.modules[d.index]);}
                },
            bindto: '#modulepref_pie'
        });
        refresh_course_module_plot(data.pmid);
    });
}
function refresh_course_module_plot(mdl){
    module = mdl;
    $.getJSON('results.php',{t:'cm', s:startdate, e:enddate, i:interval, u:user, c:course, m:module},function(data){
        $("#moduletitle").text(data.charttitle);
        c3.generate({
            data: {
                json: data.chartdata,
                x: 'time',
                axes: {
                    hits: 'y',
                    duration: 'y2'
                },
                types:{
                    hits: 'bar',
                    duration: 'spline'
                }
            },
            axis:{ x: {type:'category', label: 'month', padding:{left:0, right:0}}, y:{label:'hits', min:0, padding:{top:0, bottom:0}}, y2: {show: true, label:'duration (sec)', min: 0, padding:{top:0, bottom:0}}},
            bindto: '#module_stats'
        });
    });
}



function refresh_generic_user_plot(){
    $.getJSON('results.php',{t:'ug', s:startdate, e:enddate, i:interval, u:user, c:course, m:module},function(data){
        c3.generate({
            data: {
                json: data,
                x: 'time',
                axes: {
                    hits: 'y',
                    duration: 'y2'
                },
                types:{
                    hits: 'bar',
                    duration: 'spline'
                }
            },
            axis:{ x: {type:'category', label: 'month', padding:{left:0, right:0}}, y:{label:'hits', min: 0,padding:{top:0, bottom:0}}, y2: {show: true, label:'duration (sec)', min: 0, padding:{top:0, bottom:0}}},
            bindto: '#generic_userstats'
        });
        refresh_course_pref_plot();
    });
}

function refresh_course_pref_plot(){
    $.getJSON('results.php',{t:'ucp', s:startdate, e:enddate, i:interval, u:user, c:course, m:module},function(data){
        if(data.pcid != null){
            c3.generate({
                data: {
                    json: data.chartdata,
                    type:'pie',
                    onclick: function (d,i){console.log('click on '+d+' with id '+d.index);course = data.courses[d.index];refresh_user_course_plot();}
                    },
                bindto: '#coursepref_pie'
            });
            course = data.pcid;
        }
        else{
            encapsulateddata = data.chartdata;
            module = encapsulateddata.pmid;
            c3.generate({
                data: {
                    json: encapsulateddata.chartdata,
                    type:'pie',
                    onclick: function (d,i){console.log('click on '+d+' with id '+d.index); module = encapsulateddata.modules[d.index];refresh_user_course_plot();}
                    },
                bindto: '#coursepref_pie'
            });    
        }
        refresh_user_course_plot();
    });
}
function refresh_user_course_plot(){
    $.getJSON('results.php',{t:'uc', s:startdate, e:enddate, i:interval, u:user, c:course, m:module},function(data){
        if(data.chartdata.chartdata == null){
            $("#coursetitle").text(data.charttitle);
            chartdata = data.chartdata;
        }
        else{
            $("#coursetitle").text(data.charttitle+': '+data.chartdata.charttitle);
            chartdata = data.chartdata.chartdata;
        }
        c3.generate({
            data: {
                json: chartdata,
                x: 'time',
                axes: {
                    hits: 'y',
                    duration: 'y2'
                },
                types:{
                    hits: 'bar',
                    duration: 'spline'
                }
            },
            axis:{ x: {type:'category', label: 'month', padding:{left:0, right:0}}, y:{label:'hits', min:0, padding:{top:0, bottom:0}}, y2: {show: true, label:'duration (sec)', min: 0, padding:{top:0, bottom:0}}},
            bindto: '#course_stats'
        });
    });
}





